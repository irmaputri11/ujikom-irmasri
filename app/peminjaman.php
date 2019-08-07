<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    public function peminjaman(){
    	return $this->belongsTo('App\peminjaman');
    }
}
