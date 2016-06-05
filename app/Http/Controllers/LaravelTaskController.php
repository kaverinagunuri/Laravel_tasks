<?php

namespace App\Http\Controllers;

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

//-----------------------Registration Form-----------------------------//
    public function Register() {
        session()->regenerate();

        return view('registration.register');
    }

    public function RegForm() {
        session()->regenerate();

        $FullName = Input::get('FullName');
        $Address = Input::get('Address');
        $City = Input::get('City');
        $state = Input::get('state');


        session(['FullName' => $FullName, 'Address' => $Address, 'City' => $City, 'state' => $state]);

        return view('registration.RegForm-2');
    }

    public function submitform() {
        session()->regenerate();

        $Email = Input::get('Email');
        $Mobile = Input::get('Mobile');
        session(['Email' => $Email, 'Mobile' => $Mobile]);
        $data['FullName'] = Session::get('FullName');
        $data['Address'] = Session::get('Address');
        $data['City'] = Session::get('City');
        $data['state'] = Session::get('state');
        $data['Email'] = Session::get('Email');
        $data['Mobile'] = Session::get('Mobile');


        return view('registration.confirm', ['Userdata' => $data]);
    }

    public function Onconfirm() {
        $info = null;
        $FullName = Input::get('FullName');
        $Address = Input::get('Address');
        $City = Input::get('City');
        $state = Input::get('state');
        $Email = Input::get('Email');
        $object = new LaravelTaskController();
        $message = $object->generatePassword($FullName, $City, $state);


        $validator = Validator::make(Input::all(), array(
                    'Email' => 'required|max:50|email',
                    'FullName' => 'required|max:50|min:3',
                    'City' => 'required|min:6',
                    'Mobile' => 'required|numeric|digits:10',
                    'Address' => 'required',
                        )
        );
        if ($validator->fails()) {
            return Redirect::route('LteRegister')
                            ->withErrors($validator)
                            ->withInput();
        } else {


            $FullName = Input::get('FullName');
            $Address = Input::get('Address');
            $City = Input::get('City');
            $state = Input::get('state');
            $Email = Input::get('Email');
            $Mobile = Input::get('Mobile');
            $message = md5($message);

            $user = AddUser::create(['FullName' => $FullName, 'Address' => $Address, 'City' => $City, 'State' => $state, 'Email' => $Email, 'Mobile' => $Mobile, 'Password' => $message]);
            if ($user) {
                $info.="successfully registered";
            } else {
                $info.="There is a problem in registration.Please try Again!";
            }
        }

        return view('registration.register', ['message' => $info]);
    }

    //-----------------------OTP Generate Function-----------------------------//
    function generatePassword($FullName, $City, $state) {
        $info = null;
        $message = null;
        $ldate = new DateTime;
        $hours = $ldate->format('H:i');

        $hours = explode(":", $hours);
        $hours = implode("", $hours);

        $spcl_char = '!@#$%&*()_=+]}[{;:,<.>?|';
        $spcl_char = str_shuffle($spcl_char);
        $spcl_char = substr($spcl_char, 0, 5);


        $FullName = strtolower($FullName);
        $City = strtolower($City);
        $state = strtolower($state);
        $string = $City . $state;
        $com = $string . $FullName;
        $com = str_split($com);
        $alphabets = str_split("abcdefghijklmnopqrstvuwxyz");
        $string = str_split($string);
        $name = str_split($FullName);
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

    //-----------------------Login-----------------------------//

    public function Login() {
        session()->regenerate();

        return view('layouts.login');
    }

    //----------------------Dash Board-----------------------------//
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
            $object = new LaravelTaskController();
            $logs = $object->LogDetails($request);

            return view('login.logdetails', ['logs' => $logs]);
        } else {
            $error = "invalid credentials";
            return view('layouts.login', ['error' => $error]);
        }
    }

    public function Dashboard(Request $request) {
        $object = new LaravelTaskController();
        $logs = $object->LogDetails($request);

        return view('login.logdetails', ['logs' => $logs]);
    }

    //----------------------Log Details-----------------------------//

    public function LogDetails($request) {
        session()->regenerate();
        Session::get('Email');
        $ipAddress = $_SERVER['REMOTE_ADDR'];
        if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)) {
            $ipAddress = array_pop(explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']));
        }

        $user['useragent'] = $request->server('HTTP_USER_AGENT');
        $input['ip'] = $request->ip();

        $u_agent = $_SERVER['HTTP_USER_AGENT'];
        $bname = 'Unknown';
        $platform = 'Unknown';
        $version = "";

        if (preg_match('/linux/i', $u_agent)) {
            $platform = 'linux';
        } elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
            $platform = 'mac';
        } elseif (preg_match('/windows|win32/i', $u_agent)) {
            $platform = 'windows';
        }

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

        $known = array('Version', $ub, 'other');
        $pattern = '#(?<browser>' . join('|', $known) .
                ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
        if (!preg_match_all($pattern, $u_agent, $matches)) {
            
        }

        $i = count($matches['browser']);
        if ($i != 1) {

            if (strripos($u_agent, "Version") < strripos($u_agent, $ub)) {
                $version = $matches['version'][0];
            } else {
                $version = $matches['version'][1];
            }
        } else {
            $version = $matches['version'][0];
        }

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
        return $browserDetails;
    }

    //----------------------Update Panel-----------------------------//

    public function UpdateProfile() {
        session()->regenerate();
        $value = null;
        $browserDetails = AddUser::select('FullName', 'Address', 'City', 'State', 'Email', 'Mobile', 'CreditCard')->where('Email', Session::get('Email'))->first();

        return view('login.update', ['info' => $browserDetails]);
    }

    public function onupdate() {
        session()->regenerate();

        $FullName = Input::get('Full_name');
        $Address = Input::get('Address');
        $City = Input::get('City');
        $state = Input::get('state');
        $Email = Input::get('Email');
        $Mobile = Input::get('Mobile');
        $card = Input::get('credit');
        $card = Crypt::encrypt($card);

        $update = AddUser::where('Email', Session::get('Email'))->update([
            'FullName' => $FullName,
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

    //----------------------View Profile Panel-----------------------------//



    public function viewProfile() {
        session()->regenerate();
        $value = AddUser::select('CreditCard')->where('Email', Session::get('Email'))->get();
        $value = json_decode(json_encode($value));
        foreach ($value as $i) {
            global $result;
            $result = $i->CreditCard;
            $result = Crypt::decrypt($result);
        }

        $getdata = AddUser::select('FullName', 'Address', 'City', 'State', 'Mobile', 'Email')->where('Email', Session::get('Email'))->get();
        $getdata = json_decode(json_encode($getdata), true);
        foreach ($getdata as $data) {
            return view('layouts.ViewProfile', ['temp' => $data, 'results' => $result]);
        }
    }

    //----------------------Change Password-----------------------------//


    public function ChangePassword() {
        session()->regenerate();
        $Email = AddUser::select('Email')->where('Email', Session::get('Email'))->first();
        $Email = json_decode(json_encode($Email), TRUE);

        return view('login.changepassword', ['Email' => $Email]);
    }

    public function password() {
        session()->regenerate();
        $password = Input::get('Password');
        $password = md5($password);
        $update = AddUser::where('Email', Session::get('Email'))->update([
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

    //----------------------Log Out Session-----------------------------//

    public function logout() {
        session()->regenerate();
        session(['Id' => null, 'Email' => null]);
        return Redirect::route('LteLogin')
                        ->with('logout', 'sucessfully logged out');
    }

    //----------------------File Upload-----------------------------//

    public function FileUpload() {
        return view('FileUpload.fileupload');
    }

    public function upload() {
        $input = Input::file('file');

        $file_name = $input->getClientOriginalName();
        $file_size = $input->getClientSize();
        $file_type = $input->getClientMimeType();




        $input->move("images", $input->getClientOriginalName());

        Uploads::create(['File' => $file_name, 'Type' => $file_type, 'Size' => $file_size, 'Email' => Session::get('Email')]);
    }

    //---------------------  File Uploads In DataTables  -----------------------------//

    public function FileDataTables() {
        $output_array = [];
        session()->regenerate();
        $get_file = Uploads::select('Id', 'File', 'Type', 'Size')
                        ->where('Email', Session::get('Email'))->get();

        $data = $get_file;

        return view('FileUpload.uploadfiles', ['data' => $data]);
    }

    //----------------------Forgot Password-----------------------------//

    public function Forgot() {
        return view('login.Forgot');
    }

    public function ForgotPassword() {
        session()->regenerate();

        $Email = Input::get('Email');
        session(['Email' => $Email]);
        $dbpwd = AddUser::select('Id', 'FullName', 'Address', 'City', 'State')->where('Email', $Email)->first();
        if ($dbpwd) {
            $name = $dbpwd['FullName'];
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

    //----------------------TimeZone-----------------------------//


    public function timezonetables() {

        function timezone_list() {
            static $timezones = null;

            if ($timezones === null) {
                $timezones = [];
                $offsets = [];
                $now = new DateTime();
                $Id = TimeZone::select('Id')->count();
                if ($Id == 0) {
                    foreach (DateTimeZone::listIdentifiers() as $timezone) {
                        $time = $now->setTimezone(new DateTimeZone($timezone));
                        $time = json_decode(json_encode($time), true);

                        $offsets[] = $offset = $now->getOffset();


                        TimeZone::create(['Name' => format_timezone_name($timezone), 'Offset' => format_GMT_offset($offset), 'Time' => $time['date']]);
                        $timezones[$timezone] = '(' . format_GMT_offset($offset) . ') ' . format_timezone_name($timezone);
                    }
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

        $timezone = timezone_list();



        return view('TimeZone.TimeZone');
    }

    //----------------------TimeZone Ajax Pagination-----------------------------//

    public function timezone(Request $request) {
        $lenght = $request->input('length');
        ;
        $start = $request->input('start');
        $search = $request->input('search');
        $order = $request->input('order');
        $column = $request->input('columns');

        $ajax = TimeZone::select('*')->limit($lenght)->offset($start)->get();
        $ajax = json_encode($ajax);
        $count = TimeZone::count();
        echo "{\"recordsTotal\":" . $count . ",\"recordsFiltered\":" . $count . ", \"data\":" . $ajax . "}";
    }

    //----------------------TimeZone Operations-----------------------------//

    public function view($data) {
        $view = TimeZone::select('*')->where('Id', $data)->get();
        return view('TimeZone.DbView', ['view' => $view]);
    }

    public function edit($data) {
        $edit = TimeZone::select('*')->where('Id', $data)->get();

        return view('TimeZone.DbEdit', ['edit' => $data]);
    }

    public function OnEditTable() {
        $ID = Input::get('Id');
        $Name = Input::get('Name');
        $Offset = Input::get('Offset');
        $Time = Input::get('Time');



        $update = TimeZone::where('Id', $ID)->update(['Name' => $Name, 'Offset' => $Offset, 'Time' => $Time]);
        if ($update) {
            return Redirect::route('timezonetables')
                            ->with('edit', 'Successfully Updated');
        } else {
            return Redirect::route('timezonetables')
                            ->with('edit', 'Problem in Updation');
        }
    }

    public function delete($data) {

        $delete = TimeZone::select('*')->where('Id', $data)->delete();
        if ($delete) {
            return Redirect::route('timezonetables')
                            ->with('delete', 'Successfully delete');
        } else {
            return Redirect::route('timezonetables')
                            ->with('delete', 'Problem in deletion');
        }
    }

    //----------------------Daatabase Tables to Excel Format-----------------------------//

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

    //----------------------DataBase Tables to PDF Format-----------------------------//

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
            $excel->sheet('mySheet', function($sheet) use ($users) {
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
