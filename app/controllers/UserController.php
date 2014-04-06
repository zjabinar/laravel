<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::all();
		return View::make('users.index', compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('users.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, User::$rules);
		if ($validation->passes())
		{
		$user = User::find($id);
			$user = new User;
			$user->username = Input::get('username');
			$user->password = Hash::make( Input::get('password'));
			$user->name = Input::get('name');
			$user->phone = Input::get('phone');
			$user->email = Input::get('email');
			$user->save();
			return Redirect::route('users.index');
		}

		return Redirect::route('users.create')
		->withInput()
		->withErrors($validation)
		->with('message', 'There were validation errors.');
		
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		if ($id="email")
		{
			return View::make('users.mail');
		}
		
	}

	public function main()
	{
		return View::make('users.main');
	}

	public function mail()
	{
		return View::make('users.mail');
	}
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//return "showing id: $id";
		$user = User::find($id);
		if (is_null($user))
		{
		return Redirect::route('users.index');
		}
		return View::make('users.edit', compact('user'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = Input::all();
		$validation = Validator::make($input, User::$rules);
		if ($validation->passes())
		{
		$user = User::find($id);
			$user->username = Input::get('username');
			$user->password = Hash::make( Input::get('password'));
			$user->name = Input::get('name');
			$user->phone = Input::get('phone');
			$user->email = Input::get('email');
			$user->save();
			return Redirect::route('users.index');
		}
		return Redirect::route('users.edit', $id)
		->withInput()
		->withErrors($validation)
		->with('message', 'There were validation errors.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//return 'deleting';
		 User::find($id)->delete();
		 return Redirect::route('users.index');

	}


public function showLogin()
	{
		// show the form
		return View::make('users.login');
	}

public function doLogout()
	{
		Auth::logout(); // log the user out of our application
		return Redirect::to('login'); // redirect the user to the login screen
	}

public function doLogin()
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



	}

}