<?php

class AuthController extends \BaseController {

	// Display login page

	public function index()
	{
		return View::make('auth.login');
	}

	// Try to login user

	public function store()
	{
		$data = Input::only('email', 'password');
		$auth = Auth::attempt($data);

		if( $auth ) return Redirect::to('/');

		return Redirect::back()->withInput()->withError('E-Mail or/and password is incorrect.');

	}


}
