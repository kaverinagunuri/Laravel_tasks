<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddUser extends Model
{
      protected $table="Registration";
        protected $primaryKey = "Id";
     protected $fillable = ['FullName','Address','City','State','Email','Mobile','Password','CreditCard','Token'];
     public $timestamps=false;
    
}
