<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uploads extends Model
{
    protected $table="FileUpload";
        protected $primaryKey = "Id";
     protected $fillable = ['File','Type','Size','Email'];
     public $timestamps=false;
}
