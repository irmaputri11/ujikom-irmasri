<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $fillable = [
        'kategori_kode','kategori_nama'
    ];
    public $timestamps = true;

    public function buku()
    {
        return $this->hasMany('App\buku','kategori_kode');
    }
}
