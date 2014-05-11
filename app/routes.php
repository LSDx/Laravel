<?php

// When user isn't logged in

Route::group(['before' => 'guest'], function() 
{
	Route::resource('login', 'AuthController', ['only' => ['index', 'store']]);
	Route::resource('register', 'RegisterController', ['only' => ['index', 'store']]);
});

// User is logged in

Route::group(['before' => 'auth'], function() 
{

	Route::resource('/', 'HomeController', ['only' => ['index']]);

	// Logout

	Route::get('logout', ['as' => 'logout', 'uses' => 'AuthController@destroy']);

});