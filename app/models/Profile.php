<?php

class Profile extends Eloquent {


	protected $fillable = ['user_id', 'first_name', 'last_name', 'nickname'];

	protected $table = 'profiles';

	/**
	 * Each profile has one user, so we need relationship between them.
	 *
	 * @return void
	 */

	public function user() 
	{
		return $this->belongsTo('User');
	}


}