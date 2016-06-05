<?php

//-----------------------Registration------------------------//
Route::get('/', array(
    'as' => 'LteRegister',
    'uses' => 'LaravelTaskController@Register'
));


Route::post('Registration-2', array(
    'as' => 'form2',
    'uses' => 'LaravelTaskController@RegForm'
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

//-----------------------Login------------------------//

Route::get('Login', array(
    'as' => 'LteLogin',
    'uses' => 'LaravelTaskController@Login'
));

Route::post('loggedin', array(
    'as' => 'loggedin',
    'uses' => 'LaravelTaskController@loggedin'
));

//-----------------------Update Profile------------------------//

Route::get('UpdateProfile', array(
    'as' => 'UpdateProfile',
    'uses' => 'LaravelTaskController@UpdateProfile'
));

Route::post('Update', array(
    'as' => 'onupdate',
    'uses' => 'LaravelTaskController@onupdate'
));

//-----------------------View Profile------------------------//

Route::get('viewProfile', array(
    'as' => 'viewProfile',
    'uses' => 'LaravelTaskController@viewProfile'
));

//-----------------------Change Password------------------------//

Route::get('ChangePassword', array(
    'as' => 'ChangePassword',
    'uses' => 'LaravelTaskController@ChangePassword'
));

Route::post('ChangePassword', array(
    'as' => 'password',
    'uses' => 'LaravelTaskController@password'
));

//-----------------------Log Out------------------------//

Route::get('logout', array(
    'as' => 'logout',
    'uses' => 'LaravelTaskController@logout'
));

//-----------------------File Upload-----------------------//

Route::get('FileUpload', array(
    'as' => 'FileUpload',
    'uses' => 'LaravelTaskController@FileUpload'
));
Route::post('upload', array(
    'as' => 'upload',
    'uses' => 'LaravelTaskController@upload'
));

//-----------------------USer Location------------------------//

Route::get('maps', array(
    'as' => 'maps',
    'uses' => 'LaravelTaskController@maps'
));
//-----------------------Files Data TAbles-----------------------//


Route::get('FileDataTables', array(
    'as' => 'FileDataTables',
    'uses' => 'LaravelTaskController@FileDataTables'
));

//-----------------------Forgot Password-----------------------//

Route::get('Forgot', array(
    'as' => 'Forgot',
    'uses' => 'LaravelTaskController@Forgot'
));

Route::post('ForgotPassword', array(
    'as' => 'ForgotPassword',
    'uses' => 'LaravelTaskController@ForgotPassword'
));

//-----------------------Time Zone-----------------------//
Route::get('timezonetables',array(
    'as'=>'timezonetables',
    'uses'=>'LaravelTaskController@timezonetables'
));

Route::get('timezone', array(
    'as' => 'timezone',
    'uses' => 'LaravelTaskController@timezone'
));

Route::get('/edit/{data}', array(
    'as' => 'edit',
    'uses' => 'LaravelTaskController@edit'
));
Route::get('/delete/{data}', array(
    'as' => 'delete',
    'uses' => 'LaravelTaskController@delete'
));
Route::get('/view/{data}', array(
    'as' => 'view',
    'uses' => 'LaravelTaskController@view'
));
Route::post('OnEditTable',array(
    'as'=>'OnEditTable',
    'uses'=>'LaravelTaskController@OnEditTable'
));


//-----------------------DataBase Tables To Excel Format-----------------------//


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



//-----------------------DataBase Tables To Pdf Format-----------------------//

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


//-----------------------Dash Board-----------------------//

Route::get('Dashboard', array(
    'as' => 'Dashboard',
    'uses' => 'LaravelTaskController@Dashboard'
));

//-----------------------Login Through Facebook-----------------------//

Route::get('facebook', array(
    'as' => 'facebook',
    'uses' => 'SocialiteController@facebook'
));


Route::get('facebook/callback', array(
    'as' => 'facebook/callback',
    'uses' => 'SocialiteController@facebookCallback'));


//-----------------------Login Through Google-----------------------//

Route::get('google', array(
    'as' => 'google',
    'uses' => 'SocialiteController@google'
));


Route::get('google/callback', array(
    'as' => 'google/callback',
    'uses' => 'SocialiteController@googleCallback'));


//-----------------------Login Through linkedIn-----------------------//

Route::get('LinkedIn', array(
    'as' => 'linkedin',
    'uses' => 'SocialiteController@LinkedIn'
));


Route::get('linkedIn/callback', array(
    'as' => 'linkedIn/callback',
    'uses' => 'SocialiteController@LinkedInCallback'));



//---------------Eloquent Relaionship------------------//

Route::get('relation', array(
    'as' => 'relation',
    'uses' => 'EloquentController@Continent'));
