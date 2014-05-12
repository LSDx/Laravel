<?php

class Profile extends Eloquent {


	protected $fillable = ['user_id', 'first_name', 'last_name', 'nickname'];

	protected $table = 'profiles';

	/**
	 * One to One
	 * One Profile has One User
	 * @return void
	 */

	public function user() 
	{
		return $this->belongsTo('User');
	}


}