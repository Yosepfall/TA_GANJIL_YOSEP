<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPengembalianTable extends Migration
{
    public function up()
    {
        Schema::create('detail_pengembalian', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pengembalian');
            $table->string('kode_buku', 20);
            $table->integer('jumlah');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('detail_pengembalian');
    }
}
