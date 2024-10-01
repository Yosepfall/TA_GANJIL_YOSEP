<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PeminjamanController;



// Route Index
Route::get('/', [BookController::class, 'index']);


// Route untuk menampilkan daftar buku
Route::get('/buku', [BookController::class, 'index'])->name('index');

// Route untuk menampilkan form tambah buku
Route::get('/buku/create', [BookController::class, 'create'])->name('buku.create');

// Route untuk menyimpan buku baru
Route::post('/buku', [BookController::class, 'store'])->name('buku.store');

// Route untuk menampilkan detail buku berdasarkan kode_buku
Route::get('/buku/{kode_buku}', [BookController::class, 'show'])->name('buku.detail_buku');

// routes/web.php
// routes/web.php
Route::get('/login', function () {
    return view('welcome'); // Form login
})->name('login.form');

Route::post('/login', [AuthController::class, 'login'])->name('login');

// routes/web.php
Route::get('buku/{kode_buku}', [PeminjamanController::class, 'showPinjamForm'])->name('buku.pinjam');
// Route untuk menyimpan peminjaman

Route::post('/peminjaman', [PeminjamanController::class, 'store'])->name('peminjaman.store');
Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman.index'); // Halaman peminjaman
