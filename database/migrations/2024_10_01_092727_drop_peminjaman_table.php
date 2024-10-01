<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropPeminjamanTable extends Migration
{
    public function up()
    {
        Schema::dropIfExists('peminjaman');
    }

    public function down()
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->string('kode_buku');
            $table->string('nisn');
            $table->date('tanggal_pinjam');
            $table->date('tanggal_pengembalian')->nullable();
            $table->timestamps();
            $table->foreign('nisn')->references('nisn')->on('siswa')->onDelete('cascade');
            $table->foreign('kode_buku')->references('kode_buku')->on('buku')->onDelete('cascade');
        });
    }
}
