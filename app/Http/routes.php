<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

Route::get('/', function () {
    return view('welcome');
});
Route::get('Preview', array(
    'as' => 'adminlte',
    'uses' => 'LaravelTaskController@adminlte'
));
Route::get('Register', array(
    'as' => 'LteRegister',
    'uses' => 'LaravelTaskController@LteRegister'
));
Route::get('Login', array(
    'as' => 'LteLogin',
    'uses' => 'LaravelTaskController@LteLogin'
));
Route::post('Registration-2', array(
    'as' => 'form2',
    'uses' => 'LaravelTaskController@form2'
));
Route::post('Confirmation', array(
    'as' => 'submitform',
    'uses' => 'LaravelTaskController@submitform'
));
Route::post('Submission', array(
    'as' => 'Onconfirm',
    'uses' => 'LaravelTaskController@Onconfirm'
));
Route::get('Registration-2', array(
    'as' => 'back',
    'uses' => 'LaravelTaskController@form2'
));
Route::post('loggedin', array(
    'as' => 'loggedin',
    'uses' => 'LaravelTaskController@loggedin'
));
Route::get('UpdateProfile', array(
    'as' => 'UpdateProfile',
    'uses' => 'LaravelTaskController@UpdateProfile'
));
Route::get('ChangePassword', array(
    'as' => 'ChangePassword',
    'uses' => 'LaravelTaskController@ChangePassword'
));
Route::post('Update', array(
    'as' => 'onupdate',
    'uses' => 'LaravelTaskController@onupdate'
));
Route::post('ChangePassword', array(
    'as' => 'password',
    'uses' => 'LaravelTaskController@password'
));
Route::get('logout', array(
    'as' => 'logout',
    'uses' => 'LaravelTaskController@logout'
));
Route::get('FileUpload', array(
    'as' => 'FileUpload',
    'uses' => 'LaravelTaskController@FileUpload'
));
Route::get('maps', array(
    'as' => 'maps',
    'uses' => 'LaravelTaskController@maps'
));
Route::post('upload', array(
    'as' => 'upload',
    'uses' => 'LaravelTaskController@upload'
));
Route::get('json', array(
    'as' => 'json',
    'uses' => 'LaravelTaskController@json'
));
Route::get('Forgot', array(
    'as' => 'Forgot',
    'uses' => 'LaravelTaskController@Forgot'
));

Route::post('ForgotPassword', array(
    'as' => 'ForgotPassword',
    'uses' => 'LaravelTaskController@ForgotPassword'
));
Route::get('timezone', array(
    'as' => 'timezone',
    'uses' => 'LaravelTaskController@timezone'
));
Route::get('excelReg', array(
    'as' => 'excelReg',
    'uses' => 'LaravelTaskController@excelReg'
));
Route::get('excelLogs', array(
    'as' => 'excelLogs',
    'uses' => 'LaravelTaskController@excelLogs'
));
Route::get('excelFile', array(
    'as' => 'excelFile',
    'uses' => 'LaravelTaskController@excelFile'
));
Route::get('excelTimeZone', array(
    'as' => 'excelTimeZone',
    'uses' => 'LaravelTaskController@excelTimeZone'
));
Route::get('PDFReg', array(
    'as' => 'PDFReg',
    'uses' => 'LaravelTaskController@PDFReg'
));
Route::get('PDFlLogs', array(
    'as' => 'PDFLogs',
    'uses' => 'LaravelTaskController@PDFLogs'
));
Route::get('PDFFile', array(
    'as' => 'PDFFile',
    'uses' => 'LaravelTaskController@PDFFile'
));
Route::get('PDFTimeZone', array(
    'as' => 'PDFTimeZone',
    'uses' => 'LaravelTaskController@PDFTimeZone'
));
Route::get('/dataTimeZone/{data}', array(
   'as' => 'dataTimeZone',
   'uses' => 'AdminController@dataTimeZone'
));
