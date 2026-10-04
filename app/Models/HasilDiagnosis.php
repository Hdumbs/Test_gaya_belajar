<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilDiagnosis extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nisn',
        'sekolah',
        'kelas',
        'jurusan',
        'skor_visual',
        'skor_auditori',
        'skor_kinestetik',
        'gaya_dominan',
        'ai_response',
    ];

    protected $casts = [
        // Mengubah format string JSON dari database menjadi Array secara otomatis
        'ai_response' => 'array',
    ];
}