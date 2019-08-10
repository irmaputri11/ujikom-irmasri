<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kartu_pendaftaran extends Model
{
    protected $fillable = [
        'kartu_barkode','petugas_kode','peminjam_kode',
        'katu_tgl_pembuatan','kartu_tgl_akhir','kartu_status_aktif'
    ];
    public $timestamps = true;

    public function petugas()
    {
        return $this->belongsTo('App\petugas','petugas_kode');
    }

    public function peminjam()
    {
        return $this->belongsTo('App\peminjam','peminjam_kode');
    }
}
