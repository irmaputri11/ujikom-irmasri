<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class petugas extends Model
{
    protected $fillable = [
        'petugas_kode','petugas_nama'
    ];
    public $timestamps = true;

    public function peminjaman()
    {
        return $this->hasMany('App\peminjaman','petugas_kode');
    }
    public function kartu_pendaftaran()
    {
        return $this->hasMany('App\kartu_pendaftaran','petugas_kode');
    }
    
}
