<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GambarBuku extends Model
{
    use HasFactory;

    protected $table = 'gambar_buku';
    
    protected $fillable = [
        'kode_buku',
        'nama_file',
        'tipe_file',
        'ukuran_file',
        'data_gambar',
    ];
}
