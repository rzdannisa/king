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

// Route::get('/', 'WelcomeController@index');

// Route::get('home', 'HomeController@index');

// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);

    Route::get('/','WelcomeController@index');
    Route::get('/taskline','TaskLineController@store');
    Route::get('/note',['as'=>'note','uses'=>'NoteController@index']);
    Route::get('/home',['as'=>'beranda','uses'=>'BerandaController@index']); 
    Route::get('/task',['as'=>'task','uses'=>'TaskController@index']);
    Route::get('/file',['as'=>'file','uses'=>'FileController@index']);
    Route::get('/taskbook',['as'=>'taskbook','uses'=>'TaskBookController@index']);
    Route::post('/savetaskbook', 'TaskBookController@create');
    Route::post('/savetask', 'TaskController@create');
    Route::post('/savenote', 'NoteController@create');
    Route::post('/savefile', 'FileController@create');
    Route::get('/viewtask/{id}', 'TaskController@store');
    Route::get('/edittask/{id}', 'TaskController@edit');
    Route::get('/edittaskbook/{id}', 'TaskBookController@edit');
    Route::get('/viewtaskbook/{id}', 'TaskBookController@store');
    Route::post('/updatetask', 'TaskController@update');
    Route::post('/updatetaskbook', 'TaskBookController@update');
    Route::get('/deletetask/{id}', 'TaskController@destroy');
    Route::get('/deletefile/{id}', 'FileController@destroy');
    Route::get('/deletetaskbook/{id}', 'TaskBookController@destroy');
    Route::post('/updatenote', 'NoteController@update');
    Route::get('/deletenote/{id}', 'NoteController@destroy');
    Route::get('/viewnote/{id}', 'NoteController@store');
    Route::get('/editnote/{id}', 'NoteController@edit');
    Route::get('/viewfile/{id}', 'FileController@store');
    Route::get('/deletefile/{id}', 'FileController@destroy');
    Route::get('/alltask', 'BerandaController@recaptask');
    Route::get('/calendar', 'BerandaController@calendar');
    Route::get('/notification', 'ActivityController@index');
    Route::get('/index', 'BerandaController@home');
    Route::post('/addevent', 'EventController@create');
    Route::get('/login','Auth\AuthController@getLogin');
    Route::post('/login','Auth\AuthController@postLogin');
    Route::get('/register','Auth\AuthController@getRegister');
    Route::post('/registerr','Auth\AuthController@postRegister');
    Route::get('/logout','Auth\AuthController@getLogout');
    Route::get('/profile/{id}', 'UserController@index');
    Route::get('/editprofile/{id}', 'UserController@create');
    Route::post('/updateprofile', 'UserController@update');
    Route::get('/sendemail', 'InviteController@index');
    Route::get('/alltaskpdf/', 'TaskController@showpdf');
    Route::get('/downloadtaskpdf', 'TaskController@downloadtaskpdf');
    Route::post('/savesendemail', 'InviteController@sendEmail');


Route::get('/images/{filename}',
    function ($filename)
{
    $path = storage_path() . '/' . $filename;

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});