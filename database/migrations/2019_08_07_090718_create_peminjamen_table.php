<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeminjamenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjamens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('peminjaman_kode')->unique();
            $table->unsignedBigInteger('petugas_kode');
            $table->foreign('petugas_kode')->references('id')->on('petugas')->onDelete('cascade');
            $table->unsignedBigInteger('peminjam_kode');
            $table->foreign('peminjam_kode')->references('id')->on('peminjams')->onDelete('cascade');
            $table->date('peminjaman_tgl');
            $table->date('peminjaman_tgl_hrs_kembali');
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
        Schema::dropIfExists('peminjaman');
    }
}
