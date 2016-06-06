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
    public function OneContinent() {
        return $this->hasOne('App\Continent','Id','ContinentId');
        
    }
     public function State() {
        return $this->hasMany('App\State','CountryId');
    }
     public function City() {
        return $this->hasManyThrough('App\City','App\State','CountryId','StateId');
    }
     public function morphisam(){
        return $this->morphMany('App\polymorphisam','Likable');
 
    }
    
    
}
