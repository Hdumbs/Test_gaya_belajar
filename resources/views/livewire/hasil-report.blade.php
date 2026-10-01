<div class="min-h-screen bg-slate-50 print:bg-white pb-12">
    
    <!-- NAVBAR (Sembunyi saat cetak PDF) -->
    <nav class="bg-white shadow-sm border-b border-gray-200 px-6 py-4 mb-8 print:hidden">
        <div class="max-w-5xl mx-auto flex justify-between items-center">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-orange-600 rounded-xl flex items-center justify-center text-white font-bold text-xl shadow-sm">
                    E
                </div>
                <div>
                    <h1 class="font-bold text-xl text-gray-800 leading-tight">EduStyle AI</h1>
                    <p class="text-xs text-gray-500 font-medium">Sistem Diagnosis Gaya Belajar PPLG</p>
                </div>
            </div>
            <div class="hidden md:flex items-center gap-4 text-sm font-medium text-gray-500">
                <span>SMP SMK Skye Digipreneur School</span>
                <span class="w-1.5 h-1.5 rounded-full bg-gray-300"></span>
                <span>Tahun Ajaran 2026</span>
            </div>
        </div>
    </nav>

    <!-- KONTEN UTAMA -->
    <div class="max-w-5xl mx-auto px-4 sm:px-8 print:p-0 print:max-w-full">

        <!-- ACTION BANNER / SUCCESS BAR (Sembunyi saat cetak PDF) -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-4 mb-6 flex flex-col md:flex-row justify-between items-center gap-4 print:hidden">
            <!-- Kiri: Pesan Sukses -->
            <div class="flex items-center gap-3 text-emerald-700">
                <div class="w-8 h-8 rounded-full bg-emerald-50 border border-emerald-200 flex items-center justify-center">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
                <span class="font-semibold text-gray-800">Analisis Berhasil di Generate!</span>
            </div>

            <!-- Kanan: Tombol Aksi -->
            <div class="flex flex-wrap items-center gap-3">
                <a href="/" class="flex items-center gap-2 px-4 py-2.5 bg-white border border-gray-300 text-gray-700 rounded-xl text-sm font-medium hover:bg-gray-50 transition-colors">
                    <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                    </svg>
                    Tes Ulang
                </a>
                <button type="button" class="flex items-center gap-2 px-4 py-2.5 bg-blue-50 border border-blue-200 text-blue-700 rounded-xl text-sm font-medium hover:bg-blue-100 transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    Ekspor MS Word
                </button>
                <button type="button" onclick="window.print()" class="flex items-center gap-2 px-4 py-2.5 bg-[#E85D10] text-white rounded-xl text-sm font-semibold hover:bg-[#CC520E] transition-colors shadow-sm">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path>
                    </svg>
                    Cetak Laporan PDF
                </button>
            </div>
        </div>

        <!-- KERTAS LAPORAN -->
        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-8 print:shadow-none print:border-none print:p-0 print:w-full">
            
            <!-- Header & Tombol Print Internal -->
            <div class="flex justify-between items-start mb-10 border-b border-slate-100 pb-6 print:pb-2">
                <div class="flex items-center gap-4">
                    <div class="w-14 h-14 rounded-xl bg-orange-500 flex items-center justify-center text-white font-black text-2xl shadow-sm print:bg-orange-500 print:-webkit-print-color-adjust: exact;">
                        {{ strtoupper(substr($siswa['nama'], 0, 1)) }}
                    </div>
                    <div>
                        <h1 class="text-3xl font-black text-slate-800 tracking-tight flex items-center gap-3">
                            Learning Style
                            <span class="text-[10px] bg-orange-100 text-orange-600 px-2.5 py-1 rounded-full font-bold tracking-wider print:border print:border-orange-500">KURIKULUM MERDEKA</span>
                        </h1>
                        <p class="text-sm text-slate-500 font-medium mt-1">Laporan Diagnosis Gaya Belajar & Strategi Pedagogis Berbasis AI</p>
                    </div>
                </div>

                <div class="text-right flex flex-col items-end gap-3">
                    <button onclick="window.print()" class="print:hidden bg-slate-800 hover:bg-slate-700 text-white text-xs font-bold px-4 py-2 rounded-lg flex items-center gap-2 transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path></svg>
                        Cetak PDF
                    </button>
                    <div class="border border-slate-200 px-4 py-2 rounded-lg bg-slate-50 print:bg-transparent print:border-none print:p-0">
                        <p class="text-xs font-bold text-slate-700">Tanggal: <span class="font-normal">{{ now()->translatedFormat('d F Y') }}</span></p>
                        <p class="text-[10px] text-slate-400 font-mono mt-0.5">ID: EDU-{{ rand(100000, 999999) }}</p>
                    </div>
                </div>
            </div>

            <!-- Tabel Identitas -->
            <h3 class="text-xs font-bold text-slate-800 uppercase tracking-widest mb-3 flex items-center gap-2"><svg class="w-4 h-4 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg> Profil & Identitas Siswa</h3>
            <div class="grid grid-cols-4 border border-slate-200 rounded-lg overflow-hidden mb-10 text-sm">
                <div class="bg-slate-50 p-3 font-semibold text-slate-600 border-b border-r border-slate-200">Nama Siswa</div>
                <div class="p-3 font-bold text-slate-800 border-b border-r border-slate-200">{{ $siswa['nama'] }}</div>
                <div class="bg-slate-50 p-3 font-semibold text-slate-600 border-b border-r border-slate-200">NISN</div>
                <div class="p-3 font-bold text-slate-800 border-b border-slate-200">{{ $siswa['nisn'] }}</div>

                <div class="bg-slate-50 p-3 font-semibold text-slate-600 border-b border-r border-slate-200">Sekolah</div>
                <div class="p-3 font-bold text-slate-800 border-b border-r border-slate-200">{{ $siswa['sekolah'] }}</div>
                <div class="bg-slate-50 p-3 font-semibold text-slate-600 border-b border-r border-slate-200">Kelas / Jenjang</div>
                <div class="p-3 font-bold text-slate-800 border-b border-slate-200">{{ $siswa['kelas'] }}</div>

                @if($siswa['sekolah'] === 'SMK')
                <div class="bg-slate-50 p-3 font-semibold text-slate-600 border-r border-slate-200 col-span-1">Kompetensi Keahlian</div>
                <div class="p-3 font-bold text-orange-600 col-span-3">{{ $siswa['jurusan'] }}</div>
                @endif
            </div>

            <!-- Progress Bar VAK -->
            <h3 class="text-xs font-bold text-slate-800 uppercase tracking-widest mb-3 flex items-center gap-2"><svg class="w-4 h-4 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg> Hasil Persentase Modalitas Sensorik (VAK)</h3>
            <div class="grid grid-cols-3 gap-6 mb-10">
                <div class="p-5 border-2 border-blue-100 bg-blue-50/50 rounded-xl">
                    <div class="flex justify-between items-end mb-4">
                        <span class="font-black text-blue-600 tracking-wide text-sm flex items-center gap-2"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg> VISUAL</span>
                        <span class="text-3xl font-black text-blue-600">{{ $persentase['visual'] }}%</span>
                    </div>
                    <div class="w-full bg-blue-100 rounded-full h-2.5 mb-2"><div class="bg-blue-500 h-2.5 rounded-full" style="width: {{ $persentase['visual'] }}%"></div></div>
                    <p class="text-[10px] text-slate-500 font-semibold">{{ $hasil['visual'] }} dari {{ $hasil['total'] }} Jawaban</p>
                </div>
                <div class="p-5 border-2 border-amber-100 bg-amber-50/50 rounded-xl">
                    <div class="flex justify-between items-end mb-4">
                        <span class="font-black text-amber-600 tracking-wide text-sm flex items-center gap-2"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z"></path></svg> AUDITORI</span>
                        <span class="text-3xl font-black text-amber-600">{{ $persentase['auditori'] }}%</span>
                    </div>
                    <div class="w-full bg-amber-100 rounded-full h-2.5 mb-2"><div class="bg-amber-500 h-2.5 rounded-full" style="width: {{ $persentase['auditori'] }}%"></div></div>
                    <p class="text-[10px] text-slate-500 font-semibold">{{ $hasil['auditori'] }} dari {{ $hasil['total'] }} Jawaban</p>
                </div>
                <div class="p-5 border-2 border-emerald-100 bg-emerald-50/50 rounded-xl">
                    <div class="flex justify-between items-end mb-4">
                        <span class="font-black text-emerald-600 tracking-wide text-sm flex items-center gap-2"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg> KINESTETIK</span>
                        <span class="text-3xl font-black text-emerald-600">{{ $persentase['kinestetik'] }}%</span>
                    </div>
                    <div class="w-full bg-emerald-100 rounded-full h-2.5 mb-2"><div class="bg-emerald-500 h-2.5 rounded-full" style="width: {{ $persentase['kinestetik'] }}%"></div></div>
                    <p class="text-[10px] text-slate-500 font-semibold">{{ $hasil['kinestetik'] }} dari {{ $hasil['total'] }} Jawaban</p>
                </div>
            </div>

            <!-- Kartu Banner Dominan -->
            <div class="bg-slate-900 rounded-xl p-6 mb-8 flex items-center gap-6 text-white shadow-md print:bg-slate-900 print:-webkit-print-color-adjust: exact;">
                <div class="w-12 h-12 rounded-lg bg-orange-500 flex items-center justify-center flex-shrink-0">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
                </div>
                <div>
                    <p class="text-xs font-semibold text-slate-400 tracking-wider uppercase mb-1">Gaya Belajar Dominan Siswa</p>
                    <h2 class="text-2xl font-black text-orange-400">Tipe {{ $gayaDominan }} ({{ $persentase[strtolower($gayaDominan)] ?? 0 }}%)</h2>
                </div>
            </div>

            <!-- Loading / Hasil AI -->
            <div wire:loading wire:target="generateAIResponse" class="w-full p-8 text-center bg-slate-50 rounded-xl border border-slate-200">
                <svg class="animate-spin h-8 w-8 text-orange-500 mx-auto mb-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
                <p class="text-slate-600 font-bold">AI sedang menyusun laporan khusus untukmu...</p>
            </div>

            <div wire:loading.remove wire:target="generateAIResponse">
                <!-- Analisis Utama -->
                <div class="border border-slate-200 rounded-xl p-6 mb-6 bg-slate-50/50">
                    <h4 class="text-sm font-bold text-slate-800 uppercase tracking-widest mb-3 flex items-center gap-2"><svg class="w-4 h-4 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg> Analisis Karakteristik & Kendala Pembelajaran</h4>
                    <p class="text-slate-600 leading-relaxed text-sm">{{ $aiResponse['analisis'] ?? 'Tidak ada analisis.' }}</p>
                </div>

                <!-- Grid Rekomendasi -->
                <div class="grid grid-cols-2 gap-6 mb-6">
                    <div class="border border-slate-200 rounded-xl p-6">
                        <h4 class="text-sm font-bold text-orange-700 uppercase tracking-widest mb-4 flex items-center gap-2"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg> Rekomendasi Strategi Belajar Mandiri</h4>
                        <ul class="space-y-3">
                            @foreach($aiResponse['strategi_mandiri'] ?? [] as $strategi)
                                <li class="flex items-start gap-2 text-sm text-slate-600"><div class="w-1.5 h-1.5 rounded-full bg-orange-500 mt-2 flex-shrink-0"></div> <span>{{ $strategi }}</span></li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="border border-slate-200 rounded-xl p-6">
                        <h4 class="text-sm font-bold text-orange-700 uppercase tracking-widest mb-4 flex items-center gap-2"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg> Rekomendasi Lingkungan Sekolah & Praktik</h4>
                        <ul class="space-y-3">
                            @foreach($aiResponse['lingkungan_sekolah'] ?? [] as $ling)
                                <li class="flex items-start gap-2 text-sm text-slate-600"><div class="w-1.5 h-1.5 rounded-full bg-orange-500 mt-2 flex-shrink-0"></div> <span>{{ $ling }}</span></li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="border border-slate-200 rounded-xl p-6">
                        <h4 class="text-sm font-bold text-orange-700 uppercase tracking-widest mb-4 flex items-center gap-2"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg> Rekomendasi Media Digital</h4>
                        <ul class="space-y-3">
                            @foreach($aiResponse['media_digital'] ?? [] as $media)
                                <li class="flex items-start gap-2 text-sm text-slate-600"><div class="w-1.5 h-1.5 rounded-full bg-orange-500 mt-2 flex-shrink-0"></div> <span>{{ $media }}</span></li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="border border-slate-200 rounded-xl p-6 bg-orange-50/50">
                        <h4 class="text-sm font-bold text-orange-800 uppercase tracking-widest mb-3 flex items-center gap-2"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg> Panduan Guru (Pembelajaran Berdiferensiasi)</h4>
                        <p class="text-slate-600 leading-relaxed text-sm">{{ $aiResponse['panduan_guru'] ?? 'Tidak ada panduan.' }}</p>
                    </div>
                </div>
            </div>

            <!-- Kolom Tanda Tangan -->
            <div class="mt-16 pt-8 border-t border-slate-200 grid grid-cols-2 text-center text-sm">
                <div>
                    <p class="text-slate-500 mb-16">Guru Bimbingan Konseling / Wali Kelas</p>
                    <p class="font-bold text-slate-800 underline decoration-slate-300 underline-offset-4">(........................................................)</p>
                    <p class="text-slate-400 mt-1 text-xs">NIP. -</p>
                </div>
                <div>
                    <p class="text-slate-500 mb-16">Siswa Terdiagnosa</p>
                    <p class="font-bold text-slate-800 underline decoration-slate-300 underline-offset-4 inline-block px-10">{{ $siswa['nama'] }}</p>
                    <p class="text-slate-400 mt-1 text-xs">Siswa Bersangkutan</p>
                </div>
            </div>
            
        </div>
    </div>
</div>