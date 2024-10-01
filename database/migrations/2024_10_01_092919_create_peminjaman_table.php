<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamanTable extends Migration
{
    public function up()
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->string('kode_buku'); // Kode buku
            $table->string('nisn'); // NISN
            $table->date('tanggal_pinjam'); // Tanggal peminjaman
            $table->date('tanggal_pengembalian')->nullable(); // Tanggal pengembalian
            $table->timestamps();

            $table->foreign('nisn')->references('nisn')->on('siswa')->onDelete('cascade');
            $table->foreign('kode_buku')->references('kode_buku')->on('buku')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('peminjaman');
    }
}
