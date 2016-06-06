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
use App\polymorphisam;

class EloquentController extends BaseController {

    use AuthorizesRequests,
        AuthorizesResources,
        DispatchesJobs,
        ValidatesRequests;

    public function Continent() {

        $relation = Continent::find(1)->country;
           
        $relation = json_decode($relation);
        foreach ($relation as $key) {
            echo "<strong>Continent Id:</strong> ", $key->ContinentId, "|| <strong> Country Name:</strong>", $key->CountryName, "<br>";
        }
        echo "<br><br>";
        
        echo "<h1>Getting Country values on State Id:</h1>";
        echo "<strong>Country Id:</strong>", State::find(1)->Country->Id;
        echo "<strong>|| Country Name:</strong>", State::find(1)->Country->CountryName;
        echo "<br><br>";
        $belongs = Country::find(4)->Continent;
       // echo $belongs . "<br/>";
        $State = Country::find(1)->State;
        foreach ($State as $key) {
            echo "<strong> Id:</strong> ", $key->Id, " ||<strong> Country Name:</strong>", $key->StateName, "<br>";
        }
        echo "<br><br>";
        echo "<h1>Get All Cities in State :</h1>";
        $City = State::find(1)->City;
        foreach ($City as $key) {
            echo "<strong>State Id:</strong> ", $key->StateId, " ||<strong> City Name:</strong>", $key->CityName, "<br>";
        }
        
     
        echo Country::find(1)->OneContinent."<br/>";
      echo "<h3>Getting the States From Continents using HasManyMore</h3>";
       $through=Continent::find(3)->State;
       foreach ($through as $key) {
            echo "<strong>Country Id:</strong> ", $key->CountryId, " ||<strong> State Name:</strong>", $key->StateName," ||<strong> ContinentId:</strong>", $key->ContinentId, "<br>";
        }
        
        $through=  Country::find(4)->City;
       foreach ($through as $key) {
            echo "<strong>State Id:</strong> ", $key->StateId, " ||<strong> City Name:</strong>", $key->CityName," ||<strong> CountryId:</strong>", $key->CountryId, "<br>";
        
            
       }
       echo State::find(1)->Likable;
      // echo State::find(1)->Continent;
       
    }

}
