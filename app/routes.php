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


Route::get('login', array('uses' => 'UserController@showLogin'));
//Route::post('login', array('uses' => 'UserController@doLogin'));


Route::get('logout', array('uses' => 'UserController@doLogout'));


Route::post('login', function()
{
	// validate the info, create rules for the inputs
			$rules = array(
				'username'    => 'required', // make sure the email is an actual email
				'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
			);

			// run the validation rules on the inputs from the form
			$validator = Validator::make(Input::all(), $rules);
		
			// if the validator fails, redirect back to the form
			if ($validator->fails()) {

				return Redirect::to('login')
					->withErrors($validator) // send back all errors to the login form
					->withInput(Input::except('username')); // send back the input (not the password) so that we can repopulate the form
			} else {

				// create our user data for the authentication
				$userdata = array(
					'username' 	=> Input::get('username'),
					'password' 	=> Input::get('password')
				);

				// attempt to do the login
				if (Auth::attempt($userdata)) {

					// validation successful!
					// redirect them to the secure section or whatever
					return View::make('users.private');
				} else {	 	

					// validation not successful, send back to form	
					return Redirect::to('login');

				}

			}
	
});
