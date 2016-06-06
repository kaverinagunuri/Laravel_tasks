<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    protected $table="Continent";
        protected $primaryKey = "Id";
     protected $fillable = ['ContinentName','ContinentCode','CreatedAt','IsActive'];
     public $timestamps=false;
     public function country() {
        return $this->hasMany('App\Country','ContinentId');
    }
     public function State() {
        return $this->hasManyThrough('App\State','App\Country','ContinentId','CountryId');
    }
     public function City() {
        return $this->hasMany('App\City');
    }
     public function morphisam(){
        return $this->morphMany('App\polymorphisam','Likable');
 
    }
    
   
}
