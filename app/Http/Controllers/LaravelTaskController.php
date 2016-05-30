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
use Illuminate\Http\Request;
use App\Uploads;
use App\Logs;
use Illuminate\Support\Facades\Crypt;
use DateTimeZone;
use App\TimeZone;
use Excel;
use PDF;
class LaravelTaskController extends BaseController {

    use AuthorizesRequests,
        AuthorizesResources,
        DispatchesJobs,
        ValidatesRequests;

    public function adminlte() {
        session()->regenerate();
        Session::destroy();
        return view('layouts.index');
    }

    public function LteRegister() {
        session()->regenerate();
        Session::destroy();
        return view('registration.register');
    }

    public function LteLogin() {
        session()->regenerate();

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


        return view('registration.confirm', ['Userdata' => $data]);
    }

    public function Onconfirm() {
        $info = null;
        $Full_name = Input::get('Full_name');
        $Address = Input::get('Address');
        $City = Input::get('City');
        $state = Input::get('state');
        $Email = Input::get('Email');
        $object = new LaravelTaskController();
        $message = $object->generatePassword($Full_name, $City, $state);
        echo $message;

        $validator = Validator::make(Input::all(), array(
                    'Email' => 'required|max:50|email',
                    'Full_name' => 'required|max:20|min:3',
                    'City' => 'required|min:6',
                    'Mobile' => 'required|numeric|digits:10',
                    'Address' => 'required'
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
            $message = md5($message);

            $user = AddUser::create(['Full_name' => $Full_name, 'Address' => $Address, 'City' => $City, 'State' => $state, 'Email' => $Email, 'Mobile' => $Mobile, 'Password' => $message]);
            if ($user) {
                $info.="successfully registered";
            } else {
                $info.="There is a problem in registration.Please try Again!";
            }
        }

        return view('registration.register', ['message' => $info]);
    }

    public function loggedin(Request $request) {
        session()->regenerate();

        $Email = Input::get('Email');
        session(['Email' => $Email]);
        $password = Input::get('Password');
        $hashpassword = md5($password);

        $dbpwd = AddUser::select('Password', 'Id')->where('Email', $Email)->first();
        $dbpwd = json_decode(json_encode($dbpwd), true);
        session(['Id' => $dbpwd['Id']]);

        if ($hashpassword == $dbpwd['Password']) {
            $ipAddress = $_SERVER['REMOTE_ADDR'];
            if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)) {
                $ipAddress = array_pop(explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']));
            }

            $user['useragent'] = $request->server('HTTP_USER_AGENT');
            $input['ip'] = $request->ip();
            // print_r($user);
            //print_r($input);
            $u_agent = $_SERVER['HTTP_USER_AGENT'];
            $bname = 'Unknown';
            $platform = 'Unknown';
            $version = "";
            //First get the platform?
            if (preg_match('/linux/i', $u_agent)) {
                $platform = 'linux';
            } elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
                $platform = 'mac';
            } elseif (preg_match('/windows|win32/i', $u_agent)) {
                $platform = 'windows';
            }

            // Next get the name of the useragent yes seperately and for good reason
            if (preg_match('/MSIE/i', $u_agent) && !preg_match('/Opera/i', $u_agent)) {
                $bname = 'Internet Explorer';
                $ub = "MSIE";
            } elseif (preg_match('/Firefox/i', $u_agent)) {
                $bname = 'Mozilla Firefox';
                $ub = "Firefox";
            } elseif (preg_match('/Chrome/i', $u_agent)) {
                $bname = 'Google Chrome';
                $ub = "Chrome";
            } elseif (preg_match('/Safari/i', $u_agent)) {
                $bname = 'Apple Safari';
                $ub = "Safari";
            } elseif (preg_match('/Opera/i', $u_agent)) {
                $bname = 'Opera';
                $ub = "Opera";
            } elseif (preg_match('/Netscape/i', $u_agent)) {
                $bname = 'Netscape';
                $ub = "Netscape";
            }

            // finally get the correct version number
            $known = array('Version', $ub, 'other');
            $pattern = '#(?<browser>' . join('|', $known) .
                    ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
            if (!preg_match_all($pattern, $u_agent, $matches)) {
                // we have no matching number just continue
            }

            // see how many we have
            $i = count($matches['browser']);
            if ($i != 1) {
                //we will have two since we are not using 'other' argument yet
                //see if version is before or after the name
                if (strripos($u_agent, "Version") < strripos($u_agent, $ub)) {
                    $version = $matches['version'][0];
                } else {
                    $version = $matches['version'][1];
                }
            } else {
                $version = $matches['version'][0];
            }

            // check if we have a number
            if ($version == null || $version == "") {
                $version = "?";
            }

            $u = array(
                'userAgent' => $u_agent,
                'name' => $bname,
                'version' => $version,
                'platform' => $platform,
                'pattern' => $pattern
            );
            $yourbrowser = ['userAgent' => $u_agent, 'name' => $bname, 'version' => $version, 'platform' => $platform, 'pattern' => $pattern];
            $jsonDetails = json_encode($yourbrowser);

            Logs::create(['UserAgent' => $jsonDetails,
                'IpAddress' => $input['ip'],
                'BrowserName' => $yourbrowser['name'],
                'Version' => $yourbrowser['version'],
                'Platform' => $yourbrowser['platform'],
                'Email' => Session::get('Email'),
            ]);
            $browserDetails = Logs::select('UserAgent', 'IpAddress', 'BrowserName', 'Version', 'Platform', 'updated_at')->where('Email', Session::get('Email'))->orderBy('updated_at', 'desc')->take(5)->get();

//($browserDetails);

            return view('login.logdetails', ['logs' => $browserDetails]);

            //return Redirect::route('adminlte');
        } else {
            $error = "invalid credentials";
            return view('layouts.login', ['error' => $error]);
        }
    }

    public function UpdateProfile() {
        session()->regenerate();
        $value = null;
        $browserDetails = AddUser::select('Full_name', 'Address', 'City', 'State', 'Email', 'Mobile', 'CreditCard')->where('Email', Session::get('Email'))->first();
        $value = $browserDetails['CreditCard'];

        $card = Crypt::decrypt($value);
        echo $card;

        return view('login.update', ['info' => $browserDetails, 'credit' => $card]);
    }

    public function onupdate() {
        session()->regenerate();
        //  echo Session::get('Id');
        $Full_name = Input::get('Full_name');
        $Address = Input::get('Address');
        $City = Input::get('City');
        $state = Input::get('state');
        $Email = Input::get('Email');
        $Mobile = Input::get('Mobile');
        $card = Input::get('credit');
        $card = Crypt::encrypt($card);

        $update = AddUser::where('Id', Session::get('Id'))->update([
            'Full_name' => $Full_name,
            'Address' => $Address,
            'City' => $City,
            'State' => $state,
            'Email' => $Email,
            'Mobile' => $Mobile,
            'CreditCard' => $card
        ]);
        if ($update) {
            return Redirect::route('UpdateProfile')
                            ->with('update', 'Successfully Updated');
        } else {
            return Redirect::route('UpdateProfile')
                            ->with('update', 'Problem in updating');
        }
    }

    public function ChangePassword() {
        session()->regenerate();
        $password = AddUser::select('Password')->where('Id', Session::get('Id'))->first();
        $password = json_decode(json_encode($password), TRUE);
        return view('login.changepassword', ['password' => $password]);
    }

    public function password() {
        session()->regenerate();
        $password = Input::get('Password');
        $password = md5($password);
        $update = AddUser::where('Id', Session::get('Id'))->update([
            'Password' => $password,
        ]);
        if ($update) {
            return Redirect::route('ChangePassword')
                            ->with('password', 'Successfully Updated');
        } else {
            return Redirect::route('ChangePassword')
                            ->with('password', 'Problem in updating.Try again later!');
        }
    }

    public function logout() {
        session()->regenerate();
        session(['Id' => null, 'Email' => null]);
        return Redirect::route('LteLogin')
                        ->with('logout', 'sucessfully logged out');
    }

    public function FileUpload() {
        return view('FileUpload.fileupload');
    }

    public function maps() {
        return view('layouts.location');
    }

    public function upload() {
        $input = Input::file('file');

        $file_name = $input->getClientOriginalName();
        $file_size = $input->getClientSize();
        $file_type = $input->getClientMimeType();




        $input->move("images", $input->getClientOriginalName());

        Uploads::create(['File' => $file_name, 'Type' => $file_type, 'Size' => $file_size, 'Email' => Session::get('Email')]);
    }

    public function json() {
        $output_array = [];
        session()->regenerate();
        $get_file = Uploads::select('Id', 'File', 'Type', 'Size')
                        ->where('Email', Session::get('Email'))->get();
        // $get_file = json_decode(json_encode($get_file), TRUE);

        $data = $get_file;
        //$get_file= json_encode($get_file);
        return view('FileUpload.uploadfiles', ['data' => $data]);
    }

    public function Forgot() {
        return view('login.Forgot');
    }

    public function ForgotPassword() {
        session()->regenerate();

        $Email = Input::get('Email');
        session(['Email' => $Email]);
        $dbpwd = AddUser::select('Id', 'Full_name', 'Address', 'City', 'State')->where('Email', $Email)->first();
        if ($dbpwd) {
            $name = $dbpwd['Full_name'];
            $Address = $dbpwd['Address'];
            $City = $dbpwd['City'];
            $State = $dbpwd['State'];
            $object = new LaravelTaskController();
            $message = $object->generatePassword($name, $City, $State);
            echo $message;
            if ($message) {
                $password = md5($message);
                AddUser::where('Email', $Email)->update(['Password' => $password]);
                return Redirect::route('LteLogin')
                                ->with('password', 'Successfully Updated.Mail send to your respective Email ID');
            } else {
                return Redirect::route('LteLogin')
                                ->with('password', 'Problem in updating.Try again later!');
            }
        }
    }

    function generatePassword($Full_name, $City, $state) {
        $info = null;
        $message = null;
        $ldate = new DateTime;
        $hours = $ldate->format('H:i');

        $hours = explode(":", $hours);
        $hours = implode("", $hours);

        $spcl_char = '!@#$%&*()_=+]}[{;:,<.>?|';
        $spcl_char = str_shuffle($spcl_char);
        $spcl_char = substr($spcl_char, 0, 5);


        $Full_name = strtolower($Full_name);
        $City = strtolower($City);
        $state = strtolower($state);
        $string = $City . $state;
        $com = $string . $Full_name;
        $com = str_split($com);
        $alphabets = str_split("abcdefghijklmnopqrstvuwxyz");
        $string = str_split($string);
        $name = str_split($Full_name);
        $arr = null;
        $ex = null;
        $count = 0;
        for ($x = 0; $x < count($string); $x++) {
            $count = 0;
            for ($y = 0; $y < count($name); $y++) {
                if ($string[$x] == $name[$y]) {
                    $count = 1;
                }
            }
            if ($count == 0) {
                $arr.= $string[$x];
            }
        }

        if (strlen($arr) < 11) {
            $length = strlen($arr);
            for ($x = 0; $x < count($alphabets); $x++) {
                $count = 0;
                for ($y = 0; $y < count($com); $y++) {
                    if ($alphabets[$x] == $com[$y]) {
                        $count = 1;
                    }
                }
                if ($count == 0) {
                    $ex.= $alphabets[$x];
                }
                if (strlen($ex) + $length == 11) {
                    $x = count($alphabets);
                }
            }
        }

        $string = $arr . $ex;

        $upper = strtoupper(substr($string, 0, 2));
        $rand = str_shuffle($spcl_char . $hours . $upper);
        $str = str_shuffle(substr($string, 2, 9));


        $message = substr($str, 0, 4) . $rand . substr($str, 4, 5);
        $Email = Input::get('Email');

        $val = Mail::raw($message, function ($message)use($Email) {

                    $message->from('kaveri.nagunuri@karmanya.co.in', 'kaveri');
                    $message->to($Email)->subject("Generated Password");
                });
        return $message;
    }

    public function timezone() {

        function timezone_list() {
            static $timezones = null;

            if ($timezones === null) {
                $timezones = [];
                $offsets = [];
                $now = new DateTime();

                foreach (DateTimeZone::listIdentifiers() as $timezone) {
                   $time= $now->setTimezone(new DateTimeZone($timezone));
                   $time=  json_decode(json_encode($time),true);
                // echo $time['date'];
                    $offsets[] = $offset = $now->getOffset();
                    TimeZone::create(['Name' => format_timezone_name($timezone), 'Offset' => format_GMT_offset($offset),'Time'=>$time['date']]);
                    $timezones[$timezone] = '(' . format_GMT_offset($offset) . ') ' . format_timezone_name($timezone);
                }
            }

            return $timezones;
        }

        function format_GMT_offset($offset) {
            $hours = intval($offset / 3600);
            $minutes = abs(intval($offset % 3600 / 60));
            return 'GMT' . ($offset ? sprintf('%+03d:%02d', $hours, $minutes) : '');
        }

        function format_timezone_name($name) {
            $name = str_replace('/', ', ', $name);
            $name = str_replace('_', ' ', $name);
            $name = str_replace('St ', 'St. ', $name);
            return $name;
        }

// Uso
        $timezone = timezone_list();
//echo '<pre>';
//    print_r($timezone);
//echo '</pre>';
        $data = TimeZone::select(['Id', 'Name', 'Offset','Time'])->get();

        return view('layouts.TimeZone', ['data' => $data]);
    }
    public function excelReg() {
       $users = AddUser::select('*')->get();
Excel::create('Register', function($excel) use($users) {
    $excel->sheet('Register', function($sheet) use($users) {
        $sheet->fromArray($users);
    });
})->export('xls');

        
    }
    public function excelLogs() {
         $users = Logs::select('*')->get();
Excel::create('Logs', function($excel) use($users) {
    $excel->sheet('Logs', function($sheet) use($users) {
        $sheet->fromArray($users);
    });
})->export('xls');


        
    }
    public function excelFile() {
         $users = Uploads::select('*')->get();
Excel::create('FileUpload', function($excel) use($users) {
    $excel->sheet('FileUpload', function($sheet) use($users) {
        $sheet->fromArray($users);
        
    });
})->export('xls');

        
    }
    public function excelTimeZone() {
         $users = TimeZone::select('*')->get();
Excel::create('TimeZone', function($excel) use($users) {
    $excel->sheet('TimeZone', function($sheet) use($users) {
        $sheet->fromArray($users);
    });
})->export('xls');

        
    }
 public function PDFReg() {
       $users = AddUser::select('*')->get();
Excel::create('Register', function($excel) use($users) {
    $excel->sheet('Register', function($sheet) use($users) {
        $sheet->fromArray($users);
        $sheet->setPaper('4A0');
        $sheet->setOrientation('landscape');
    });
})->export('pdf');

        
    }
    public function PDFLogs() {
         $users = Logs::select('*')->get();
	Excel::create('Logs', function($excel) use ($users) {
		$excel->sheet('mySheet', function($sheet) use ($users)
	    {
			$sheet->fromArray($users);
	    });
	   })->setPaper('a2')->setOrientation('landscape')->setWarnings(false)->download('pdf');
 
        
    }
    public function PDFFile() {
         $users = Uploads::select('*')->get();
Excel::create('FileUpload', function($excel) use($users) {
    $excel->sheet('FileUpload', function($sheet) use($users) {
        $sheet->fromArray($users);
    });
})->export('pdf');

        
    }
    public function PDFTimeZone() {
         $users = TimeZone::select('*')->get();
Excel::create('TimeZone', function($excel) use($users) {
    $excel->sheet('TimeZone', function($sheet) use($users) {
        $sheet->fromArray($users);
    });
})->export('pdf');

        
    }

}
