<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sanpham extends Model
{
    //
    protected $table = "sanpham";
   protected $fillable = ['id','tensanpham','giasanpham','hinhanhsanpham','motasanpham','idsanpham'];

    public $timestamps = true;
}
