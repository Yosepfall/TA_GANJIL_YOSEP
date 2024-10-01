<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $table = 'peminjaman';

    protected $fillable = [
        'kode_buku',
        'nisn',
        'tanggal_pinjam',
        'tanggal_pengembalian',
    ];

    // Relasi ke buku
    public function buku()
    {
        return $this->belongsTo(Buku::class, 'kode_buku', 'kode_buku');
    }

    // Relasi ke member
    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'nisn');
    }
}
