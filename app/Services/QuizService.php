<?php

namespace App\Services;

class QuizService
{
    public static function getQuestions($jenjang)
    {
        $questions = [
            'smp' => [
                [
                    'id' => 1,
                    'pertanyaan' => 'Saat belajar untuk ujian, cara apa yang paling mudah buatmu mengingat materi?',
                    'opsi' => [
                        'A' => 'Membaca buku catatan, melihat diagram, atau membuat mind map yang berwarna.',
                        'B' => 'Mendengarkan penjelasan guru, berdiskusi dengan teman, atau membaca dengan suara keras.',
                        'C' => 'Berjalan mondar-mandir sambil menghafal, atau memegang benda tertentu.'
                    ]
                ],
                [
                    'id' => 2,
                    'pertanyaan' => 'Ketika guru sedang menjelaskan di depan kelas, apa yang biasanya kamu lakukan?',
                    'opsi' => [
                        'A' => 'Memperhatikan slide presentasi atau tulisan di papan tulis dengan seksama.',
                        'B' => 'Fokus mendengarkan nada suara dan penjelasan lisan guru.',
                        'C' => 'Tangan tidak bisa diam, entah itu mencoret-coret buku (doodling) atau memainkan pulpen.'
                    ]
                ],
                [
                    'id' => 3,
                    'pertanyaan' => 'Saat waktu istirahat tiba, kegiatan apa yang paling kamu sukai?',
                    'opsi' => [
                        'A' => 'Membaca komik, novel, atau melihat-lihat gambar di media sosial.',
                        'B' => 'Ngobrol dan bercanda dengan teman-teman di kelas atau kantin.',
                        'C' => 'Bermain bola, lari-larian, atau berjalan-jalan keliling sekolah.'
                    ]
                ],
                [
                    'id' => 4,
                    'pertanyaan' => 'Jika mendapat tugas kelompok, peran apa yang paling kamu hindari / sukai?',
                    'opsi' => [
                        'A' => 'Suka bagian membuat poster, slide presentasi, atau mencari gambar ilustrasi.',
                        'B' => 'Suka menjadi juru bicara saat presentasi atau memimpin jalannya diskusi tim.',
                        'C' => 'Suka bagian membuat alat peraga fisik, mading, atau mempraktekkannya langsung.'
                    ]
                ],
                [
                    'id' => 5,
                    'pertanyaan' => 'Ketika mencoba mengingat arah menuju tempat baru, kamu biasanya...',
                    'opsi' => [
                        'A' => 'Mengingat bentuk bangunan, warna cat rumah, atau melihat peta (Google Maps).',
                        'B' => 'Bertanya kepada orang sekitar atau mengingat instruksi lisan dari teman.',
                        'C' => 'Mengingat patokan fisik seperti belokan tajam atau jalanan yang menanjak.'
                    ]
                ],
                [
                    'id' => 6,
                    'pertanyaan' => 'Saat sedang marah atau kesal, bagaimana biasanya kamu mengekspresikannya?',
                    'opsi' => [
                        'A' => 'Cemberut, diam saja, atau menuliskan kekesalan di buku harian/status medsos.',
                        'B' => 'Mengomel, berteriak, atau menceritakan kekesalan kepada orang lain.',
                        'C' => 'Membanting pintu, mengepalkan tangan, atau pergi berjalan cepat.'
                    ]
                ],
                [
                    'id' => 7,
                    'pertanyaan' => 'Kamu akan merasa sangat kesulitan berkonsentrasi belajar jika...',
                    'opsi' => [
                        'A' => 'Kamar atau meja belajarmu sangat berantakan.',
                        'B' => 'Ada suara bising, TV menyala, atau orang mengobrol di sekitarmu.',
                        'C' => 'Kamu dipaksa duduk diam di kursi dalam waktu yang sangat lama.'
                    ]
                ],
                [
                    'id' => 8,
                    'pertanyaan' => 'Saat membaca buku cerita yang seru, apa kebiasaanmu?',
                    'opsi' => [
                        'A' => 'Cepat membalik halaman dan membayangkan adegannya seperti menonton film.',
                        'B' => 'Terkadang bibir ikut bergerak membaca dialognya atau mendengarkan efek suara di pikiran.',
                        'C' => 'Sering berganti posisi duduk, tengkurap, atau membaca sambil memegang sesuatu.'
                    ]
                ],
                [
                    'id' => 9,
                    'pertanyaan' => 'Jika diajari cara memainkan permainan baru (game atau board game), kamu lebih suka...',
                    'opsi' => [
                        'A' => 'Melihat gambar petunjuk atau memperhatikan orang lain bermain dulu.',
                        'B' => 'Minta dijelaskan peraturannya secara lisan oleh teman.',
                        'C' => 'Langsung ikut bermain sambil belajar peraturannya di tengah jalan.'
                    ]
                ],
                [
                    'id' => 10,
                    'pertanyaan' => 'Saat belanja sepatu atau baju baru, hal pertama yang paling menarik perhatianmu adalah...',
                    'opsi' => [
                        'A' => 'Warna, motif, dan bentuk desainnya yang keren.',
                        'B' => 'Masukan dari teman atau penjual mengenai kelayakan barang tersebut.',
                        'C' => 'Kenyamanan saat disentuh atau dicoba langsung untuk bergerak.'
                    ]
                ],
                [
                    'id' => 11,
                    'pertanyaan' => 'Bagaimana cara kamu mengeja sebuah kata yang cukup sulit?',
                    'opsi' => [
                        'A' => 'Membayangkan bentuk tulisan kata tersebut di pikiran.',
                        'B' => 'Mengejanya pelan-pelan dengan suara lisan.',
                        'C' => 'Menuliskan kata tersebut di udara atau di atas kertas untuk melihat rasanya.'
                    ]
                ],
                [
                    'id' => 12,
                    'pertanyaan' => 'Pilihan hadiah yang paling membuatmu senang adalah...',
                    'opsi' => [
                        'A' => 'Buku ilustrasi, alat lukis, atau video game dengan grafis bagus.',
                        'B' => 'Earphone, langganan musik Spotify, atau tiket konser.',
                        'C' => 'Peralatan olahraga, tiket outbond, atau mainan bongkar pasang (Lego).'
                    ]
                ],
                [
                    'id' => 13,
                    'pertanyaan' => 'Saat menonton film di bioskop atau Netflix, kamu paling fokus pada...',
                    'opsi' => [
                        'A' => 'Efek visual CGI, pemandangan, dan ekspresi wajah aktor.',
                        'B' => 'Soundtrack musik, efek suara, dan dialog para pemain.',
                        'C' => 'Adegan aksi atau ikut merasa tegang saat ada adegan yang mengejutkan.'
                    ]
                ],
                [
                    'id' => 14,
                    'pertanyaan' => 'Ketika mencoba makanan baru, apa yang membuatmu tertarik?',
                    'opsi' => [
                        'A' => 'Penataannya (plating) yang cantik dan warnanya yang menggugah selera.',
                        'B' => 'Bunyi renyahnya saat digigit atau deskripsi dari review makanan.',
                        'C' => 'Tekstur makanannya saat dikunyah di dalam mulut.'
                    ]
                ],
                [
                    'id' => 15,
                    'pertanyaan' => 'Liburan sekolah yang paling ideal buatmu adalah...',
                    'opsi' => [
                        'A' => 'Pergi ke tempat wisata dengan pemandangan indah untuk berfoto.',
                        'B' => 'Pergi ke festival musik atau tempat yang ramai dan meriah.',
                        'C' => 'Mendaki gunung, berkemah, atau melakukan aktivitas outbond.'
                    ]
                ]
            ],

            'smk' => [
                [
                    'id' => 1,
                    'pertanyaan' => 'Saat pertama kali diperkenalkan dengan alat, mesin, atau aplikasi baru di jurusanmu, apa tindakan pertamamu?',
                    'opsi' => [
                        'A' => 'Membaca buku manual, melihat diagram alur, atau menonton video tutorial.',
                        'B' => 'Mendengarkan instruksi dan penjelasan lisan dari guru atau instruktur tentang cara kerjanya.',
                        'C' => 'Langsung memegang alatnya, menekan tombol, dan mencoba mengoperasikannya sendiri.'
                    ]
                ],
                [
                    'id' => 2,
                    'pertanyaan' => 'Ketika terjadi masalah (troubleshooting) pada mesin/komputer yang kamu pegang, bagaimana caramu mencari tahu penyebabnya?',
                    'opsi' => [
                        'A' => 'Mencari error code di layar, mengecek kabel yang putus secara visual, atau melihat pola kerusakan.',
                        'B' => 'Mendengarkan suara aneh pada mesin (misal: bunyi mendengung atau putaran kipas yang bising).',
                        'C' => 'Langsung membongkar komponen atau mengetes fungsi secara fisik satu per satu.'
                    ]
                ],
                [
                    'id' => 3,
                    'pertanyaan' => 'Di area Praktik Lab atau Teaching Factory, informasi keselamatan (K3) paling mudah kamu pahami lewat...',
                    'opsi' => [
                        'A' => 'Poster SOP dan tanda bahaya yang tertempel di dinding lab.',
                        'B' => 'Briefing lisan yang disampaikan instruktur sebelum mulai kerja.',
                        'C' => 'Simulasi atau latihan evakuasi dengan memakai alat pelindung diri langsung.'
                    ]
                ],
                [
                    'id' => 4,
                    'pertanyaan' => 'Menjelang Uji Kompetensi Keahlian (UKK), persiapan apa yang paling sering kamu lakukan?',
                    'opsi' => [
                        'A' => 'Membuat flowchart, merapikan catatan praktik, atau melihat skema kerja proyek.',
                        'B' => 'Berdiskusi, tanya-jawab dengan teman, atau meminta guru mengulang penjelasan.',
                        'C' => 'Latihan merakit, ngoding, atau membuat produknya berulang-ulang sampai tangan terbiasa.'
                    ]
                ],
                [
                    'id' => 5,
                    'pertanyaan' => 'Jika jurusanmu mengharuskan interaksi dengan klien (Bisnis, Perhotelan, dll), apa keunggulanmu?',
                    'opsi' => [
                        'A' => 'Bisa membuat presentasi katalog produk dan menjaga kerapian penampilan visual.',
                        'B' => 'Bagus dalam intonasi suara, merespons keluhan lisan, dan bernegosiasi.',
                        'C' => 'Pintar memperagakan penggunaan produk secara langsung di depan klien.'
                    ]
                ],
                [
                    'id' => 6,
                    'pertanyaan' => 'Saat membuat laporan PKL (Praktik Kerja Lapangan), kamu paling teliti dalam hal...',
                    'opsi' => [
                        'A' => 'Format margin, layout tabel, dan penempatan gambar/grafik yang rapi.',
                        'B' => 'Tata bahasa yang enak dibaca dan alur cerita laporannya yang mengalir.',
                        'C' => 'Mengerjakan sambil berjalan mondar-mandir atau sering istirahat menggerakkan badan.'
                    ]
                ],
                [
                    'id' => 7,
                    'pertanyaan' => 'Menurutmu, seorang guru produktif (guru kejuruan) yang asik itu yang seperti apa?',
                    'opsi' => [
                        'A' => 'Yang sering memberikan modul berilustrasi bagus dan presentasi slide yang rapi.',
                        'B' => 'Yang jago bercerita tentang pengalamannya di industri dengan gaya bicara yang asik.',
                        'C' => 'Yang tidak banyak teori tapi langsung mengajak turun ke bengkel/lab untuk praktik.'
                    ]
                ],
                [
                    'id' => 8,
                    'pertanyaan' => 'Untuk mengingat prosedur urutan menyalakan/mematikan alat industri, kamu menggunakan...',
                    'opsi' => [
                        'A' => 'Visualisasi bagan alur di kepala.',
                        'B' => 'Menyebutkan langkah-langkahnya bergumam sendiri (Satu.. Dua.. Tiga..).',
                        'C' => 'Mengandalkan memori otot tangan (muscle memory) karena sudah sering menekan tombolnya.'
                    ]
                ],
                [
                    'id' => 9,
                    'pertanyaan' => 'Ketika disuruh membuat prototipe atau produk tugas akhir, apa pendekatan pertamamu?',
                    'opsi' => [
                        'A' => 'Menggambar sketsa atau desain UI/UX-nya terlebih dahulu.',
                        'B' => 'Mendiskusikan ide konsepnya dengan guru pembimbing.',
                        'C' => 'Langsung mencari bahan material dan membuat kerangka fisiknya.'
                    ]
                ],
                [
                    'id' => 10,
                    'pertanyaan' => 'Suasana bengkel/lab seperti apa yang membuat kerjaan praktikmu paling cepat selesai?',
                    'opsi' => [
                        'A' => 'Meja kerja (workstation) yang sangat bersih, terang, dan peralatannya tertata rapi.',
                        'B' => 'Sambil mendengarkan musik atau di suasana yang hening tanpa gangguan suara orang.',
                        'C' => 'Suasana yang dinamis di mana kamu punya ruang bebas untuk bergerak dan berpindah tempat.'
                    ]
                ],
                [
                    'id' => 11,
                    'pertanyaan' => 'Jika ada perubahan tugas atau revisi dadakan dari guru pembimbing, kamu biasanya...',
                    'opsi' => [
                        'A' => 'Meminta guru menuliskan revisinya agar kamu bisa melihat poin-poinnya.',
                        'B' => 'Mendengarkan instruksi revisi dan mengingat kata-katanya di kepala.',
                        'C' => 'Langsung mengubah dan membongkar tugasmu saat itu juga.'
                    ]
                ],
                [
                    'id' => 12,
                    'pertanyaan' => 'Dalam kompetensi keahlian/jurusanmu, apa hal yang paling kamu banggakan?',
                    'opsi' => [
                        'A' => 'Hasil karyaku punya nilai estetika, desain yang indah, dan rapi dipandang.',
                        'B' => 'Aku mampu mempresentasikan atau mempromosikan hasil karyaku dengan lancar.',
                        'C' => 'Aku bekerja dengan cepat, tangkas, dan secara teknis sangat fungsional.'
                    ]
                ],
                [
                    'id' => 13,
                    'pertanyaan' => 'Kamu mengikuti Lomba Kompetensi Siswa (LKS). Di area kompetisi, fokus utamamu adalah...',
                    'opsi' => [
                        'A' => 'Memperhatikan detail bentuk akhir dari karya/program yang dibuat.',
                        'B' => 'Fokus mendengarkan waktu yang tersisa dan aba-aba juri.',
                        'C' => 'Fokus pada kecepatan tangan dan ritme kerja alat/keyboard.'
                    ]
                ],
                [
                    'id' => 14,
                    'pertanyaan' => 'Bagaimana cara terbaikmu mengevaluasi kesalahan saat praktik kerja?',
                    'opsi' => [
                        'A' => 'Melihat perbandingan hasil kerjamu dengan gambar standar operasi (SOP).',
                        'B' => 'Mendengarkan teguran dan evaluasi verbal dari guru atau mandor.',
                        'C' => 'Merasakan sendiri ada yang salah pada setelan mesin atau hasil rakitan.'
                    ]
                ],
                [
                    'id' => 15,
                    'pertanyaan' => 'Alasan terkuatmu dulu memilih masuk jurusan SMK ini adalah...',
                    'opsi' => [
                        'A' => 'Pernah melihat hasil karya, pameran, atau portofolio keren dari jurusan ini.',
                        'B' => 'Terinspirasi dari cerita guru, alumni, atau keluarga tentang peluang kerjanya.',
                        'C' => 'Karena memang suka ngoprek, bongkar pasang, atau melakukan hal teknis dari dulu.'
                    ]
                ]
            ]
        ];

        return $questions[$jenjang] ?? [];
    }
}
