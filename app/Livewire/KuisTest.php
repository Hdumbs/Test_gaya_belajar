<?php

namespace App\Livewire;

use Livewire\Component;
use App\Services\QuizService;

class KuisTest extends Component
{
    public $jenjang;
    public $questions = [];
    public $currentQuestionIndex = 0;
    public $answers = []; // Menyimpan jawaban ('A', 'B', atau 'C')

    public function mount($jenjang = 'smk')
    {
        // Default kita set SMK dulu untuk testing, nanti ini diambil dari URL/Session
        $this->jenjang = $jenjang;
        $this->questions = QuizService::getQuestions($this->jenjang);
    }

    public function pilihJawaban($opsi)
    {
        // Simpan jawaban siswa untuk soal saat ini
        $this->answers[$this->currentQuestionIndex] = $opsi;

        // Pindah ke soal berikutnya jika belum soal terakhir
        if ($this->currentQuestionIndex < count($this->questions) - 1) {
            $this->currentQuestionIndex++;
        } else {
            // Jika sudah soal terakhir, hitung hasil dan pindah ke halaman Report
            $this->hitungDanSelesai();
        }
    }

    public function hitungDanSelesai()
    {
        $visual = 0;
        $auditori = 0;
        $kinestetik = 0;

        foreach ($this->answers as $jawaban) {
            if ($jawaban === 'A') $visual++;
            if ($jawaban === 'B') $auditori++;
            if ($jawaban === 'C') $kinestetik++;
        }

        // Simpan hasil ke session agar bisa dibaca di halaman hasil/PDF
        session()->put('hasil_kuis', [
            'visual' => $visual,
            'auditori' => $auditori,
            'kinestetik' => $kinestetik,
            'total' => count($this->questions),
            'jenjang' => $this->jenjang,
        ]);

        // Redirect ke halaman hasil
        return redirect()->to('/hasil-report');
    }

    public function render()
    {
        $currentQuestion = $this->questions[$this->currentQuestionIndex];
        $totalQuestions = count($this->questions);
        $progressPercentage = ($this->currentQuestionIndex / $totalQuestions) * 100;

        return view('livewire.kuis-test', [
            'soal' => $currentQuestion,
            'total' => $totalQuestions,
            'progress' => $progressPercentage
        ]);
    }
}
