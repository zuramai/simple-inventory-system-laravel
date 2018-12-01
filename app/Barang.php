<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    public function gudang(){
    	return $this->belongsTo('App\Gudang', 'gudang_id');
    }
}
