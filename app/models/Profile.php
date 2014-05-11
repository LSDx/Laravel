<?php

class Profile extends Eloquent {


	protected $fillable = ['user_id', 'first_name', 'last_name', 'nickname'];

	protected $table = 'profiles';

	public function user() 
	{
		return $this->belongsTo('User');
	}


}