<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKartuPendaftaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kartu_pendaftarans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kartu_barkode');
            $table->string('petugas_kode');
            $table->string('peminjaman_kode');
            $table->date('kartu_tgl_pembuatan');
            $table->date('kartu_tgl_akhir');
            $table->boolean('kartu_status_aktif');
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
        Schema::dropIfExists('kartu_pendaftarans');
    }
}
