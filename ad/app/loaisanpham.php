<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loaisanpham extends Model
{
    //
    protected $table = "loaisanpham";
   protected $fillable = ['id','tensanpham','hinhanhloaisanpham'];
    public $timestamps = false;
}
