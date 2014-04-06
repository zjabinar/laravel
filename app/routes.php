<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('login', array('uses' => 'UserController@showLogin'));
Route::post('login', array('uses' => 'UserController@doLogin'));
Route::get('logout', array('uses' => 'UserController@doLogout'));

Route::get('/', function()
{
	return View::make('users.main');
	
});


Route::get('email', function()
{
	return View::make('users.mail');
});

Route::post('email_send', function()
{
	
			
	$data['email'] = Input::get('email');
	$data['msg'] = Input::get('msg');
	Mail::send('emails.welcome', $data, function($message) {  
		$message->to(Input::get('email'), 'ZALDY')->subject('Email using Laravel!'); 
	});

	return View::make('users.mail_send');
});



Route::resource('users', 'UserController');




