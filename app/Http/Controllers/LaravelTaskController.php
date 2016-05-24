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
        session()->regenerate();


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
            $Full_name = Input::get('Full_name');
            $Address = Input::get('Address');
            $City = Input::get('City');
            $state = Input::get('state');
            $Email = Input::get('Email');
            $Mobile = Input::get('Mobile');

            DB::table('Registration')->where('Id', session('id'))->update([
                'Full_name' => $Full_name,
                'Address' => $Address,
                'City' => $City,
                'State' => $state,
                'Mobile' => $Mobile,
                'Email' => $Email
            ]);
            echo "success";
        }
    }

}
