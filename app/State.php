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
     public function State() {
        return $this->hasMany('App\State');
    }
     public function City() {
        return $this->hasMany('App\City');
    }
}
