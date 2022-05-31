<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chitietdonhang extends Model
{
    
    protected $table = "chitietdonhang";

    public function chitietdonhang(){
    	return $this->hasMany('App\chitietdonhang','id');
    }

   public function donhang(){
   	return $this->belongTo('App\donhang','id_donhang','id');
   }
}
