<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penerbit extends Model
{
    protected $fillable = [
        'penerbit_kode','penerbit_nama',
        'penerbit_alamat','penerbit_telp'
    ];
    public $timestamps = true;

    public function buku()
    {
        return $this->hasMany('App\buku','penerbit_kode');
    }
}
