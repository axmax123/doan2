<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class donhang extends Model
{
    //
    protected $table = "donhang";
      protected $fillable = ['id','tenkhachhang','sodienthoai','email'];

	public $timestamps = true;
   

}
