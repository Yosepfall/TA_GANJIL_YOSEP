<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BookController extends Controller
{
    // Menampilkan daftar buku
    public function index()
    {
        // Retrieve all books
        $buku = Buku::all();

        // Return view with books data
        return view('index', compact('buku'));
    }

    // Menampilkan form untuk menambahkan buku baru
    public function create()
    {
        return view('buku.create');
    }

    // Menyimpan buku baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'kode_buku' => 'required|unique:buku|max:20',
            'judul' => 'required|max:100',
            'penerbit' => 'required|max:100',
            'tahun_terbit' => 'required|digits:4',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $file = $request->file('gambar');
        $dataGambar = $file ? file_get_contents($file->getRealPath()) : null;

        Buku::create([
            'kode_buku' => $request->kode_buku,
            'judul' => $request->judul,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'nama_file' => $file ? $file->getClientOriginalName() : null,
            'tipe_file' => $file ? $file->getClientMimeType() : null,
            'ukuran_file' => $file ? $file->getSize() : null,
            'data_gambar' => $dataGambar
        ]);

        return redirect()->route('buku.index')
            ->with('success', 'Buku berhasil ditambahkan');
    }


    // Menampilkan detail buku berdasarkan kode_buku
    // Menampilkan detail buku berdasarkan kode_buku
    public function show($kode_buku)
    {
        $buku = Buku::find($kode_buku);
        if (!$buku) {
            return redirect()->route('buku.detail_buku')
                ->with('error', 'Buku tidak ditemukan');
        }

        // Menyediakan data gambar untuk tampilan
        return view('buku.detail_buku', [
            'buku' => $buku,
            'gambar' => $buku->data_gambar // Menyediakan gambar binary
        ]);
    }
}
