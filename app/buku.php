<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    protected $fillable = [
        'buku_kode','kategori_kode','penerbit_kode',
        'buku_judul','buku_jumlah','buku_dikripsi','buku_pengarang',
        'buku_tahun_terbit'

    ];
    public $timestamps = true;

    public function penerbit()
    {
        return $this->belongsTo('App\penerbit','penerbit_kode');
    }

    public function kategori()
    {
        return $this->belongsTo('App\kategori','kategori_kode');
    }

}
