<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class peminjam extends Model
{
    protected $fillable = [
        'peminjam_kode','peminjam_nama','peminjam_alamat',
        'peminjam_telp','peminjam_foto'
    ];
    public $timestamps = true;

    public function peminjaman()
    {
        return $this->hasMany('App\peminjaman','peminjama_kode');
    }
    public function kartu_pendaftaran()
    {
        return $this->hasMany('App\kartu_pendaftaran','peminjam_kode');
    }
    public function detail_pinjam()
    {
        return $this->hasMany('App\detail_pinjam','peminjam_kode');
    }
}
