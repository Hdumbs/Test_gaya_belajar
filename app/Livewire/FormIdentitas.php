<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\StudentSmp;
use App\Models\StudentSmk;

class FormIdentitas extends Component
{
    public $nama = '';
    public $nisn = '';
    public $kelas = '';
    public $nama_sekolah = 'Skye Digipreneur';
    public $jenjang = '';
    public $jurusan = '';

public function submit()
    {
        // 1. Validasi Dasar
        $rules = [
            'nama' => 'required|string|max:255',
            'kelas' => 'required|string|max:50',
            'nama_sekolah' => 'required|string|max:255',
            'jenjang' => 'required|in:smp,smk',
        ];

        // 2. Validasi Dinamis untuk NISN Unique & Jurusan
        if ($this->jenjang === 'smp') {
            // Cek duplikat NISN di database SMP
            $rules['nisn'] = 'required|numeric|unique:mysql_smp.students,nisn';
        } elseif ($this->jenjang === 'smk') {
            // Cek duplikat NISN di database SMK
            $rules['nisn'] = 'required|numeric|unique:mysql_smk.students,nisn';
            $rules['jurusan'] = 'required|string|max:100';
        } else {
            $rules['nisn'] = 'required|numeric';
        }

        // 3. Pesan Error Kustom
        $messages = [
            'nisn.unique' => 'NISN ini sudah terdaftar! Silakan gunakan NISN yang lain.',
            'jenjang.required' => 'Pilih jenjang pendidikan terlebih dahulu.',
        ];

        // Eksekusi Validasi
        $this->validate($rules, $messages);

        // Proses simpan data
        if ($this->jenjang === 'smp') {
            StudentSmp::create([
                'nama' => $this->nama,
                'nisn' => $this->nisn,
                'kelas' => $this->kelas,
            ]);
        } else {
            StudentSmk::create([
                'nama' => $this->nama,
                'nisn' => $this->nisn,
                'kelas' => $this->kelas,
                'jurusan' => $this->jurusan,
            ]);
        }

        session()->put('siswa', [
            'nama' => $this->nama,
            'nisn' => $this->nisn,
            'kelas' => $this->kelas,
            'sekolah' => $this->jenjang === 'smk' ? 'SMK' : 'SMP',
            'jurusan' => $this->jurusan ?? '-'
        ]);

        return redirect()->to('/kuis/' . $this->jenjang);
    }
    public function render()
    {
        return view('livewire.form-identitas');
    }
}
