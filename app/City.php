<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table="City";
        protected $primaryKey = "Id";
     protected $fillable = ['StateId','CityName','CreatedAt','IsActive'];
     public $timestamps=false;
     public function Country() {
        return $this->belongsTo('App\Country','CountryId');
    }
     
     public function State() {
        return $this->belongsTo('App\City','StateId');
    }
     public function Continent(){
        return $this->hasOne('App\Continent','Id');
    }
}
