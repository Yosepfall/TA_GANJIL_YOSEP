<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $primaryKey = 'nisn';
    protected $fillable = ['nisn', 'nama', 'alamat', 'no_telp', 'kode_kelas'];
}
