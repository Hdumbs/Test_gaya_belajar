<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use App\Models\HasilDiagnosis;

class HasilReport extends Component
{
    public $siswa;
    public $hasil;
    public $persentase = [];
    public $gayaDominan = '';
    public $aiResponse = null;

    public function mount()
    {
        $this->siswa = session('siswa');
        $this->hasil = session('hasil_kuis');

        if (empty($this->siswa) || empty($this->hasil)) {
            return $this->redirect('/');
        }

        $this->hitungPersentase();
        $this->generateAIResponse();
    }

    private function hitungPersentase()
    {
        $total = max(1, (int) $this->hasil['total']); // hindari pembagian dengan 0

        $this->persentase = [
            'visual'     => round(($this->hasil['visual'] / $total) * 100),
            'auditori'   => round(($this->hasil['auditori'] / $total) * 100),
            'kinestetik' => round(($this->hasil['kinestetik'] / $total) * 100),
        ];

        $max = max($this->persentase);
        $dominan = array_keys($this->persentase, $max);
        $this->gayaDominan = ucfirst($dominan[0]);
    }

    public function generateAIResponse()
    {
        $apiKey = config('services.gemini.key');

        if (empty($apiKey)) {
            $this->setFallback('API Key Gemini kosong di .env!');
            return;
        }

        $model = 'gemini-3.5-flash-lite';

        $prompt = "Kamu adalah Pakar Psikologi Pendidikan dan Konselor Akademik yang sangat berpengalaman di Indonesia. Tugasmu adalah menganalisis gaya belajar siswa secara sangat mendalam, personal, dan memberikan solusi taktis.

        DATA SISWA:
        - Nama: {$this->siswa['nama']}
        - Jenjang: {$this->siswa['sekolah']}
        - Jurusan / Kompetensi (Khusus SMK): {$this->siswa['jurusan']}
        - Gaya Belajar Dominan: {$this->gayaDominan}
        - Skor Detail: Visual ({$this->persentase['visual']}%), Auditori ({$this->persentase['auditori']}%), Kinestetik ({$this->persentase['kinestetik']}%)

        INSTRUKSI OUTPUT JSON:
        Berikan jawaban HANYA berupa JSON valid tanpa awalan/akhiran markdown. Jangan tambahkan teks apapun di luar JSON. Struktur JSON wajib seperti ini:
        {
            \"analisis\": \"Buat 2 paragraf mendalam. Paragraf 1: Analisis karakter gaya belajarnya secara psikologis. Paragraf 2: Kaitkan potensinya secara spesifik dengan jenjang atau jurusannya (jika SMK, sebutkan relevansi dengan skill di lapangan/industri, kelebihan & kelemahannya).\",
            \"strategi_mandiri\": [
                \"Strategi praktis 1 yang sangat detail\",
                \"Strategi praktis 2 yang sangat detail\",
                \"Strategi praktis 3 yang spesifik dengan kebiasaan belajarnya\",
                \"Strategi taktis 4\"
            ],
            \"lingkungan_sekolah\": [
                \"Saran spesifik suasana kelas/lab yang mendukungnya\",
                \"Bagaimana dia harus memposisikan diri saat kerja kelompok\",
                \"Tips menghadapi ujian praktik/teori untuk gaya belajarnya\"
            ],
            \"media_digital\": [
                \"Rekomendasi jenis aplikasi/software yang cocok\",
                \"Tipe tontonan (YouTube/Podcast/Tutorial) yang paling pas\",
                \"Cara memanfaatkan gadget untuk mempercepat penyerapan materinya\"
            ],
            \"panduan_guru\": \"Buat 3-4 kalimat komprehensif berisi saran untuk guru/instruktur tentang bagaimana cara terbaik berkomunikasi, memberi tugas, dan membimbing siswa ini agar potensinya maksimal.\"
        }";

        try {
            $response = Http::timeout(90)
                ->retry(2, 2000)
                ->withHeaders(['x-goog-api-key' => $apiKey])
                ->post("https://generativelanguage.googleapis.com/v1beta/models/{$model}:generateContent", [
                    'contents' => [['parts' => [['text' => $prompt]]]],
                    'generationConfig' => [
                        'responseMimeType' => 'application/json',
                    ],
                ]);
        } catch (\Throwable $e) {
            Log::error('Gemini request gagal: ' . $e->getMessage());
            $this->setFallback('Koneksi ke Gemini gagal: ' . $e->getMessage());
            return;
        }

        if (! $response->successful()) {
            Log::error('Gemini API error', ['status' => $response->status(), 'body' => $response->body()]);
            $this->setFallback('API Error (' . $response->status() . '): ' . $response->body());
            return;
        }

        $text = $response->json('candidates.0.content.parts.0.text') ?? '{}';
        $text = trim(str_replace(['```json', '```'], '', $text));

        $decoded = json_decode($text, true);

        if (json_last_error() !== JSON_ERROR_NONE || ! is_array($decoded)) {
            $this->setFallback('JSON Error: ' . json_last_error_msg());
            return;
        }

        $this->aiResponse = $decoded;
        try {
            HasilDiagnosis::create([
                'nama'            => $this->siswa['nama'],
                'nisn'            => $this->siswa['nisn'] ?? '-',
                'sekolah'         => $this->siswa['sekolah'],
                'kelas'           => $this->siswa['kelas'] ?? '-',
                'jurusan'         => $this->siswa['jurusan'] ?? '-',
                'skor_visual'     => $this->persentase['visual'],
                'skor_auditori'   => $this->persentase['auditori'],
                'skor_kinestetik' => $this->persentase['kinestetik'],
                'gaya_dominan'    => $this->gayaDominan,
                'ai_response'     => $this->aiResponse, // Otomatis jadi JSON berkat $casts
            ]);
        } catch (\Throwable $e) {
            // Log error jika gagal simpan ke DB, tapi user tetap bisa lihat hasilnya di layar
            Log::error('Gagal simpan ke database: ' . $e->getMessage());
        }
        // -------------------------------------------------------
    }
    

    private function setFallback($pesanError = 'Menunggu integrasi sistem.')
    {
        $this->aiResponse = [
            'analisis' => "⚠️ " . $pesanError,
            'strategi_mandiri' => ['Sistem gagal memuat data', '-', '-'],
            'lingkungan_sekolah' => ['Sistem gagal memuat data', '-'],
            'media_digital' => ['Sistem gagal memuat data', '-'],
            'panduan_guru' => 'Silakan muat ulang halaman atau hubungi administrator.',
        ];
    }

    public function render()
    {
        return view('livewire.hasil-report');
    }
}
