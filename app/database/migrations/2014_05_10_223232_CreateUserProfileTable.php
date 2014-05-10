<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfileTable extends Migration {

	public function up()
	{
		Schema::create('user_profiles', function(Blueprint $t) 
		{
			$t->increments('id');
			$t->foreign('user_id')->references('id')->on('users');
			$t->string('first_name');
			$t->string('last_name');
			$t->string('nickname');
			$t->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('user_profiles');
	}

}
