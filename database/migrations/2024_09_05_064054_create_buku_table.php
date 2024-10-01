<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukuTable extends Migration
{
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->string('kode_buku', 20)->primary();
            $table->string('judul', 100);
            $table->string('penerbit', 100);
            $table->year('tahun_terbit');
            $table->string('nama_file', 255)->nullable();
            $table->string('tipe_file', 50)->nullable();
            $table->integer('ukuran_file')->nullable();
            $table->binary('data_gambar')->nullable(); // Menambahkan kolom data_gambar
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('buku');
    }
}
