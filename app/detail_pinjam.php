<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detail_pinjam extends Model
{
    protected $fillable = [
        'peminjaman_kode','buku_kode','detail_tgl_kembali',
        'detail_denda','detail_status_kembali'

    ];
    public $timestamps = true;

    public function peminjaman()
    {
        return $this->belongsTo('App\peminjaman','peminjaman_kode');
    }

    public function buku()
    {
        return $this->belongsTo('App\buku','buku_kode');
    }
}
