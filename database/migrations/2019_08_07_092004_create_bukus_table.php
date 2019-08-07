<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBukusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bukus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('buku_kode');
            $table->string('kategori_kode');
            $table->string('penerbit_kode');
            $table->string('buku_judul');
            $table->integer('buku_jumlah');
            $table->string('buku_diskripsi');
            $table->string('buku_pengarang');
            $table->integer('buku_tahun_terbit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bukus');
    }
}
