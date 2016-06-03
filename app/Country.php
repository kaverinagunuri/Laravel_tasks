<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
   protected $table="Country";
        protected $primaryKey = "Id";
     protected $fillable = ['ContinentId','CountryName','CountryCode','CountryAlias','CountryDialCode','CreatedAt','IsActive'];
     public $timestamps=false;
     public function Continent() {
        return $this->belongsTo('App\Continent','ContinentId');
    }
     public function State() {
        return $this->hasMany('App\State');
    }
     public function City() {
        return $this->hasMany('App\City');
    }
    
}