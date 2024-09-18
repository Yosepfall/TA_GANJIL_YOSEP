<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $primaryKey = 'kode_buku'; // Menyatakan kolom primary key
    public $incrementing = false; // Menyatakan bahwa kolom primary key bukan auto-increment
    protected $keyType = 'string'; // Tipe kolom primary key jika bukan integer
    protected $table = 'buku';

    protected $fillable = [
        'kode_buku',
        'judul',
        'penerbit',
        'tahun_terbit',
        'nama_file',
        'tipe_file',
        'ukuran_file',
        'data_gambar',
    ];
}
