<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\KuisTest;
use App\Livewire\HasilReport;

Route::get('/hasil-report', HasilReport::class);
Route::get('/kuis/{jenjang?}', KuisTest::class);
Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return redirect('/admin/login');
})->name('login');
