<?php

class HomeController extends BaseController {

	/**
	 * Display home page
	 *
	 * @return view
	 */

	public function index()
	{
		return View::make('home');
	}

}
