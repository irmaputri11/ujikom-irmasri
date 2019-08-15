<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class peminjamen extends Model
{
    protected $fillable = [
        'peminjaman_kode','petugas_kode','peminjam_kode','peminjaman_tgl',
        'peminjaman_tgl_hrs_kembali'
    ];
    public $timestamps = true;

    
    public function peminjaman()
    {
    	return $this->belongsTo('App\peminjaman','peminjaman_kode');
    }

    public function petugas()
    {
    	return $this->belongsTo('App\petugas','petugas_kode');
    }

    public function peminjam()
    {
    	return $this->belongsTo('App\peminjam','peminjam_kode');
    }
}
