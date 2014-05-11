<?php

class RegisterController extends BaseController {

	/**
	 * Display registration page
	 *
	 * @return Response
	 */

	public function index()
	{
		return View::make('auth.register');
	}

	/**
	 * Validate register data and store in database
	 *
	 * @return Response
	 */

	public function store()
	{
		
		// Validate all registration data

		$rules = [
			'email' => 'required|email|unique:users',
			'password' => 'required|min:4|confirmed',
			'first_name' => 'required|min:3|alpha',
			'last_name' => 'min:3|alpha',
			'nickname' => 'required|between:3,25|unique:profiles|alpha_num'
		];

		$valid = Validator::make(Input::all(), $rules);

		if( $valid->fails() ) return Redirect::back()->withInput()->withErrors($valid);

		// Create user

		$user = new User;

		$user->email = Input::get('email');
		$user->password = Hash::make( Input::get('password') );
		$user->remember_token = '';

		$user->save();

		// Create profile for user

		$profile = new Profile;

		$profile->user_id = $user->id;
		$profile->first_name = Input::get('first_name');
		$profile->last_name = Input::get('last_name');
		$profile->nickname = Input::get('nickname');

		$profile->save();

		// Login user and redirect to homepage

		Auth::attempt(Input::only('email', 'password'));

		return Redirect::to('/');

	}


}
