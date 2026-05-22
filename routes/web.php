<?php

use App\Http\Controllers\BelajarController;
use Illuminate\Support\Facades\Route;

// 1. Jalur awal pas pertama kali web dibuka (Data default masih kosong)
Route::get('/', function () {
    return view('dashboard', [
        'pesan' => 'Silakan isi form di bawah untuk menampilkan data.',
        'username' => 'Belum diisi',
        'nim' => 'Belum diisi'
    ]);
});

// 2. Jalur POST buat nangkep kiriman dari tombol "Tampilkan di Tabel"
Route::post('/proses', [BelajarController::class, 'proses']);

// 3. Jalur lama lo yang pake URL (biarin aja buat cadangan latihan)
Route::get('/user/{username}&{nim}', [BelajarController::class, 'index']);
