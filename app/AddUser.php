<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddUser extends Model
{
      protected $table="Registration";
        protected $primaryKey = "Id";
     protected $fillable = ['Full_name','Address','City','State','Email','Mobile','Password'];
     public $timestamps=false;
}
