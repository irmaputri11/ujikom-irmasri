<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    protected $fillable = [
        'peminjaman_kode','peminjaman_nama','peminjaman_alamat',
        'peminjaman_telp','peminjaman_foto'
    ];
    public $timestamps = true;

    
    public function peminjaman()
    {
    	return $this->belongsTo('App\peminjaman');
    }
}
