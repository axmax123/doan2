<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
 protected $table = "user";
   protected $fillable = ['id','name','email','email_verified_at','password','remember_token'];
    
}
