<?php

class HomeController extends BaseController {


	public function index()
	{
		$user = Auth::user();

		return View::make('home', compact('user'));
	}

}
