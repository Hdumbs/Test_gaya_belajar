<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hasil_diagnoses', function (Blueprint $table) {
            $table->id();
        
            // Data Siswa
            $table->string('nama');
            $table->string('nisn')->nullable();
            $table->string('sekolah');
            $table->string('kelas');
            $table->string('jurusan')->nullable(); // Khusus SMK
        
            // Data Skor VAK
            $table->integer('skor_visual');
            $table->integer('skor_auditori');
            $table->integer('skor_kinestetik');
            $table->string('gaya_dominan');
        
            // Output AI dari Gemini
            $table->json('ai_response')->nullable(); 
        
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hasil_diagnoses');
    }
};
