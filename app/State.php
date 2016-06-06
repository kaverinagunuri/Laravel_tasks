<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table="State";
        protected $primaryKey = "Id";
     protected $fillable = ['CountryId','StateName','StateCode','CreatedAt','IsActive'];
     public $timestamps=false;
     public function Country() {
        return $this->belongsTo('App\Country','CountryId');
    }
     
     public function City() {
        return $this->hasMany('App\City','StateId');
    }
    
    public function Continent(){
        return $this->belongsToThrough(
           'App\Continent','App\Country', 
           'ContinentId','CountryId'
        );
    }
    public function morphisam(){
        return $this->morphMany('App\polymorphisam','Likable');
 
    }
}
