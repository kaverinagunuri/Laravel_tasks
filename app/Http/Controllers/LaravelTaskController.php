<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

//namespace App\Http\Controllers\Redirect;

use File;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Translation\FileLoader;
use Illuminate\Contracts\Filesystem\Factory;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\AddUser;
Use Illuminate\Support\Facades\Hash;
use DateTime;
use Mail;

class LaravelTaskController extends BaseController {

    use AuthorizesRequests,
        AuthorizesResources,
        DispatchesJobs,
        ValidatesRequests;

    public function adminlte() {
        return view('layouts.index');
    }

    public function LteRegister() {
        return view('registration.register');
    }

    public function LteLogin() {
        return view('layouts.login');
    }

    public function form2() {
        session()->regenerate();
  
    $Full_name = Input::get('Full_name');
        $Address = Input::get('Address');
        $City = Input::get('City');
        $state = Input::get('state');
        
          
        session(['Full_name' => $Full_name, 'Address' => $Address, 'City' => $City, 'state' => $state]);

        return view('registration.form2');
    }

    public function submitform() {
        session()->regenerate();

        $Email = Input::get('Email');
        $Mobile = Input::get('Mobile');
        session(['Email' => $Email, 'Mobile' => $Mobile]);
        $data['Full_name'] = Session::get('Full_name');
        $data['Address'] = Session::get('Address');
        $data['City'] = Session::get('City');
        $data['state'] = Session::get('state');
        $data['Email'] = Session::get('Email');
        $data['Mobile'] = Session::get('Mobile');
        

        return view('registration.confirm',['Userdata'=>$data]);
    }

    public function Onconfirm() {
        $info=null;
        $message=null;
     $ldate = new DateTime;
  $hours=$ldate->format('H:i');
 
  $hours=  explode(":", $hours);
 $hours=  implode("", $hours);

 $spcl_char = '!@#$%&*()_=+]}[{;:,<.>?|';
 $spcl_char=  str_shuffle($spcl_char);
 $spcl_char=  substr($spcl_char, 0,5);
   $Full_name = Input::get('Full_name');
        $Address = Input::get('Address');
        $City = Input::get('City');
        $state = Input::get('state');
        $Email = Input::get('Email');
        
        $Full_name=  strtolower($Full_name);
        $City=  strtolower($City);
        $state=  strtolower($state);
        $string=$City.$state;
    $com=$string.$Full_name;
    $com=  str_split($com);
    $alphabets=str_split("abcdefghijklmnopqrstvuwxyz");
    $string=  str_split($string);
    $name=  str_split($Full_name);
    $arr=null;
    $ex=null;
    $count=0;
    for($x=0;$x<count($string);$x++){
        $count=0;
        for($y=0;$y<count($name);$y++){
            if($string[$x]==$name[$y]){
                $count=1;
            }
        }
        if($count==0){
           $arr.= $string[$x];
        }
        
    }
    
    if(strlen($arr)<11){
        $length=  strlen($arr);
         for($x=0;$x<count($alphabets);$x++){
        $count=0;
        for($y=0;$y<count($com);$y++){
            if($alphabets[$x]==$com[$y]){
                $count=1;
            }
        }
        if($count==0){
           $ex.= $alphabets[$x];
        }
    if(strlen($ex)+$length==11){
        $x=  count($alphabets);
    }    
    }
    
    }
 
    $string=$arr.$ex;
   
    $upper= strtoupper(substr($string,0,2));
 $rand=  str_shuffle($spcl_char.$hours.$upper);
   $str=  str_shuffle(substr($string,2,9));
  
  
$message= substr($str,0,4).$rand.substr($str,4,5);
   


        $validator = Validator::make(Input::all(), array(
                    'Email' => 'required|max:50|email',
                    'Full_name' => 'required|max:20|min:3',
                    'City' => 'required|min:6',
                    'Mobile' => 'required|numeric|digits:10',
                    'Address'=>'required'
            
                        )
        );
        if ($validator->fails()) {
            return Redirect::route('LteRegister')
                            ->withErrors($validator)
                            ->withInput();
        } else {
              $Email = Input::get('Email');
           
               $val= Mail::raw($message, function ($message)use($Email) {

                    $message->from('kaveri.nagunuri@karmanya.co.in', 'kaveri');
                    $message->to($Email)->subject("Generated Password");
                });
               if($val){
            
            $info.="Mails sent successfully";
        }
        else{
            $info.="Mails could not be sent please try again ";
        }
        
            $Full_name = Input::get('Full_name');
            $Address = Input::get('Address');
            $City = Input::get('City');
            $state = Input::get('state');
            $Email = Input::get('Email');
            $Mobile = Input::get('Mobile');
             $message=md5($message);
        
             $user = AddUser::create(['Full_name' => $Full_name,'Address'=>$Address,'City'=>$City,'State'=>$state,'Email'=>$Email,'Mobile'=>$Mobile,'Password'=>$message]);
             if($user)
             {
                 $info.="successfully registered";
             }
             else{
                 $info.="There is a problem in registration.Please try Again!";
             }
            
        }
        return view('registration.register',['message'=>$info]);
    }
    public function loggedin() {
      $Email=Input::get('Email');
     
      $password=Input::get('Password');
      $hashpassword=md5($password);
      
      $dbpwd=  AddUser::select('Password')->where('Email',$Email)->first();
      $dbpwd=  json_decode(json_encode($dbpwd),true);
      
      
     if($hashpassword==$dbpwd['Password'])
     {
        return Redirect::route('adminlte');
     }
      
    }
    public function LogDetails() {
        echo "hai";
    }
    
    

}
