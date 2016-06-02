<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Socialite;
use App\AddUser;

class SocialiteController extends BaseController {

    use AuthorizesRequests,
        AuthorizesResources,
        DispatchesJobs,
        ValidatesRequests;

    public function facebook() {

        return Socialite::driver('facebook')->Redirect('facebook/callback');
    }

    public function facebookCallback() {
        session()->regenerate();
        $user = Socialite::driver('facebook')->user();
        $object=new SocialiteController();
       $login=$object->UserDetails($user);
       if($login)
       return Redirect::route('Dashboard');
    }

    public function google() {

        return Socialite::driver('google')->Redirect();
    }

    public function googleCallback() {
         session()->regenerate();
        $user = Socialite::driver('google')->user();
         $object=new SocialiteController();
       $login=$object->UserDetails($user);
       if($login)
       return Redirect::route('Dashboard');
       
    }

    public function LinkedIn() {

        return Socialite::driver('linkedin')->Redirect('linkedIn/callback');
    }

    public function LinkedInCallback() {
        session()->regenerate();
        $user = Socialite::driver('linkedin')->user();
       $object=new SocialiteController();
       $login=$object->UserDetails($user);
       if($login)
       return Redirect::route('Dashboard');
    }
    
    
    public function UserDetails($user){
         $token = $user->getId();

        $FullName = $user->getName();
        $Email = $user->getEmail();
        session(['Email' => $Email]);
        $RetriveEmail = AddUser::where('Email', $Email)->count();

        if ($RetriveEmail == 0) {
            $FbUser = AddUser::create(['Full_name' => $FullName, 'Email' => $Email, 'Token' => $token]);
          
                return $FbUser;
        }
        else {
            $RetriveEmail = AddUser::where('Email', $Email)->get();
          if($RetriveEmail[0]['Token']==$token)
              return "success";
          else{
                $LoginUser = AddUser::where('Email', $Email)->update(['Token' => $token]);
 
                return $LoginUser;
          }
    }
    }

}
