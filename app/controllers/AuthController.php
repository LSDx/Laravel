<?php

class AuthController extends BaseController {

	/**
	 * Display login page.
	 *
	 * @return Response
	 */

	public function index()
	{
		return View::make('auth.login');
	}

	/**
	 * Login user, if data's correct, otherwise redirect back with error,
	 *
	 * @return Response
	 */

	public function store()
	{
		$data = Input::only('email', 'password');
		$auth = Auth::attempt($data);

		if( $auth ) return Redirect::to('/');

		return Redirect::back()->withInput()->withError('E-Mail or/and password is incorrect.');

	}

	/**
	 * Logout user.
	 *
	 * @return Response
	 */

	public function destroy() 
	{
		Auth::logout();
		return Redirect::to('/');
	}


}
