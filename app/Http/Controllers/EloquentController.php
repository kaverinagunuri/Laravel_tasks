<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use App\Continent;
use App\Country;
use App\State;
use App\City;
use App\Currency;
class EloquentController extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;
public function Continent() {
 
 $relation=  Continent::find(1)->country;
 //echo $relation."<br/>";
 $relation=  json_decode($relation);
 foreach ($relation as $value)
 {
     echo $value->Id."<br/>";
 }
 echo City::find(2)->Continent;
}

    
}
