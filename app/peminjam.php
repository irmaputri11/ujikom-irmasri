<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class peminjam extends Model
{
    protected $fillable = [
        'peminjaman_kode','peminjaman_nama','peminjaman_alamat',
        'peminjaman_telp','peminjaman_foto'
    ];
    public $timestamps = true;

    public function peminjaman()
    {
        return $this->hasMany('App\peminjaman','peminjama_kode');
    }
    public function kartu_pendaftarans()
    {
        return $this->hasMany('App\kartu_pendaftaran','peminjam_kode');
    }
    public function detail_pinjam()
    {
        return $this->hasMany('App\detail_pinjam','peminjam_kode');
    }
}
