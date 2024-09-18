<?php 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaTable extends Migration
{
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->string('nisn', 10)->primary();
            $table->string('nama', 100);
            $table->text('alamat');
            $table->string('no_telp', 15);
            $table->string('kode_kelas', 10);
            $table->foreign('kode_kelas')->references('kode_kelas')->on('kelas');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('siswa');
    }
}
