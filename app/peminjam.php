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
        return $this->hasMany('App\peminjaman','id_peminjaman','peminjaman_kode');
    }
}
