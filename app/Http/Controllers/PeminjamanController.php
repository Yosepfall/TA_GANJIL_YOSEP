<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;
use App\Models\Buku;
use App\Models\Siswa;

class PeminjamanController extends Controller
{
    public function showPinjamForm($kode_buku)
    {
        // Mencari buku berdasarkan kode
        $buku = Buku::where('kode_buku', $kode_buku)->first();

        // Cek apakah buku ditemukan
        if (!$buku) {
            return redirect()->route('buku.index')->with('error', 'Buku tidak ditemukan.');
        }

        // Mengembalikan view dengan data buku
        return view('peminjaman.form', compact('buku'));
    }
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'kode_buku' => 'required',
            'nisn' => 'required',
            'tanggal_pinjam' => 'required|date',
        ]);


        // Simpan data peminjaman ke database
        Peminjaman::create([
            'kode_buku' => $request->kode_buku,
            'nisn' => $request->nisn,
            'tanggal_pinjam' => $request->tanggal_pinjam,
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('peminjaman.form')->with('success', 'Buku berhasil dipinjam!');
    }
}
