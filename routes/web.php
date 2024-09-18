<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

// Route Index
Route::get('/', [BookController::class, 'index']);


// Route untuk menampilkan daftar buku
Route::get('/buku', [BookController::class, '.buku.index'])->name('buku.index');

// Route untuk menampilkan form tambah buku
Route::get('/buku/create', [BookController::class, 'create'])->name('buku.create');

// Route untuk menyimpan buku baru
Route::post('/buku', [BookController::class, 'store'])->name('buku.store');

// Route untuk menampilkan detail buku berdasarkan kode_buku
Route::get('/buku/{kode_buku}', [BookController::class, 'show'])->name('buku.detail_buku');


