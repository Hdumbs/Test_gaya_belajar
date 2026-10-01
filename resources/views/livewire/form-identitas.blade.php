<div class="max-w-4xl mx-auto p-8 bg-white rounded-xl shadow-[0_4px_20px_-4px_rgba(0,0,0,0.05)] border border-gray-100 mt-10">

    <!-- Header -->
    <div class="mb-8 pb-6 border-b border-gray-100">
        <span class="text-[#f08a0d] font-bold text-xs tracking-widest uppercase mb-2 flex items-center gap-1">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
            Langkah 1 dari 2
        </span>
        <h2 class="text-3xl font-extrabold text-slate-800 mb-2">Formulir Identitas Siswa</h2>
        <p class="text-slate-500">Lengkapi data pribadi dan pilih jenjang pendidikan untuk menampilkan instrumen test yang relevan.</p>
    </div>

    @if (session()->has('message'))
        <div class="p-4 mb-6 text-sm text-green-800 font-medium rounded-lg bg-green-50 border border-green-200">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="submit" class="space-y-6">

        <!-- Grid Input -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Nama Lengkap -->
            <div>
                <label class="block text-xs font-bold text-slate-700 mb-2 uppercase tracking-wide">Nama Lengkap Siswa *</label>
                <input type="text" wire:model="nama" placeholder="Contoh: Bon" class="w-full border border-gray-300 text-slate-800 rounded-lg shadow-sm focus:ring-2 focus:ring-[#f08a0d] focus:border-[#f08a0d] p-3 transition-colors">
                @error('nama') <span class="text-red-500 text-xs font-semibold mt-1 block">{{ $message }}</span> @enderror
            </div>

            <!-- NIS / NISN -->
            <div>
                <label class="block text-xs font-bold text-slate-700 mb-2 uppercase tracking-wide">NIS *</label>
                <input type="text" wire:model="nisn" placeholder="Contoh: 0081234567" class="w-full border border-gray-300 text-slate-800 rounded-lg shadow-sm focus:ring-2 focus:ring-[#f08a0d] focus:border-[#f08a0d] p-3 transition-colors">
                @error('nisn') <span class="text-red-500 text-xs font-semibold mt-1 block">{{ $message }}</span> @enderror
            </div>

            <!-- Kelas -->
            <div>
                <label class="block text-xs font-bold text-slate-700 mb-2 uppercase tracking-wide">Kelas *</label>
                <input type="text" wire:model="kelas" placeholder="Contoh: IX A / XI PPLG 1" class="w-full border border-gray-300 text-slate-800 rounded-lg shadow-sm focus:ring-2 focus:ring-[#f08a0d] focus:border-[#f08a0d] p-3 transition-colors">
                @error('kelas') <span class="text-red-500 text-xs font-semibold mt-1 block">{{ $message }}</span> @enderror
            </div>

            <!-- Nama Sekolah -->
            <div>
                <label class="block text-xs font-bold text-slate-700 mb-2 uppercase tracking-wide">Nama Sekolah *</label>
                <input type="text" wire:model="nama_sekolah" placeholder="Skye Digipreneur" class="w-full border border-gray-300 text-slate-800 rounded-lg shadow-sm focus:ring-2 focus:ring-[#f08a0d] focus:border-[#f08a0d] p-3 transition-colors">
                @error('nama_sekolah') <span class="text-red-500 text-xs font-semibold mt-1 block">{{ $message }}</span> @enderror
            </div>
        </div>

<!-- Custom Radio Cards untuk Jenjang Pendidikan -->
        <div class="pt-4">
            <label class="block text-xs font-bold text-slate-700 mb-3 uppercase tracking-wide">Jenjang Pendidikan *</label>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                <!-- Card SMP -->
                <label class="relative cursor-pointer">
                    <input type="radio" wire:model.live="jenjang" value="smp" class="peer sr-only">
                    <!-- Kontrol warna teks sekarang ada di parent div ini -->
                    <div class="p-5 border-2 border-slate-200 rounded-xl text-slate-800 peer-checked:bg-slate-900 peer-checked:border-slate-900 peer-checked:text-white hover:border-slate-400 transition-all flex items-center gap-4 shadow-sm">

                        <!-- Bulatan -->
                        <div class="w-5 h-5 rounded-full border-2 border-slate-400 peer-checked:border-white flex items-center justify-center transition-all flex-shrink-0">
                            <!-- Titik Putih -->
                            <div class="w-2.5 h-2.5 bg-white rounded-full hidden peer-checked:block"></div>
                        </div>

                        <div>
                            <!-- Hapus text-slate-800 di sini agar mengikuti parent -->
                            <h4 class="font-bold text-base transition-colors">SMP</h4>
                            <!-- Pakai opacity-70 agar otomatis membaur dengan latar -->
                            <p class="text-sm opacity-70 transition-colors">Kuesioner Konseptual & Dasar</p>
                        </div>
                    </div>
                </label>

                <!-- Card SMK -->
                <label class="relative cursor-pointer">
                    <input type="radio" wire:model.live="jenjang" value="smk" class="peer sr-only">
                    <!-- Kontrol warna teks sekarang ada di parent div ini -->
                    <div class="p-5 border-2 border-slate-200 rounded-xl text-slate-800 peer-checked:bg-slate-900 peer-checked:border-slate-900 peer-checked:text-white hover:border-slate-400 transition-all flex items-center gap-4 shadow-sm">

                        <!-- Bulatan -->
                        <div class="w-5 h-5 rounded-full border-2 border-slate-400 peer-checked:border-white flex items-center justify-center transition-all flex-shrink-0">
                            <!-- Titik Putih -->
                            <div class="w-2.5 h-2.5 bg-white rounded-full hidden peer-checked:block"></div>
                        </div>

                        <div>
                            <!-- Hapus text-slate-800 di sini agar mengikuti parent -->
                            <h4 class="font-bold text-base transition-colors">SMK</h4>
                            <!-- Pakai opacity-70 agar otomatis membaur dengan latar -->
                            <p class="text-sm opacity-70 transition-colors">Kuesioner Vokasi & Praktik Lab</p>
                        </div>
                    </div>
                </label>
            </div>
            @error('jenjang') <span class="text-red-500 text-xs font-semibold mt-2 block">{{ $message }}</span> @enderror
        </div>

        <!-- CONDITIONAL INPUT JURUSAN MUNCUL JIKA SMK DIPILIH -->
        @if ($jenjang === 'smk')
        <div class="pt-4 transition-all duration-300 ease-in-out">
            <label class="block text-xs font-bold text-slate-700 mb-2 uppercase tracking-wide">Jurusan / Kompetensi Keahlian (Khusus SMK) *</label>
            <input type="text" wire:model="jurusan" placeholder="Contoh: PPLG, Bisnis Retail, Teknik Otomotif, Tata Boga" class="w-full border border-gray-300 text-slate-800 rounded-lg shadow-sm focus:ring-2 focus:ring-[#f08a0d] focus:border-[#f08a0d] p-3 transition-colors">
            @error('jurusan') <span class="text-red-500 text-xs font-semibold mt-1 block">{{ $message }}</span> @enderror
        </div>
        @endif

        <!-- Tombol Submit -->
        <div class="mt-8 pt-4 flex justify-end">
            <button type="submit" class="bg-[#f08a0d] hover:bg-[#db7d0b] text-white font-bold py-3.5 px-8 rounded-lg shadow-md transition duration-200 flex items-center gap-2">
                Mulai Tes
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </button>
        </div>
     </form>
</div>
