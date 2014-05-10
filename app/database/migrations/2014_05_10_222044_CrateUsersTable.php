<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrateUsersTable extends Migration {


	public function up()
	{
		Schema::create('users', function(Blueprint $t) 
		{
			$t->increments('id');
			$t->string('email');
			$t->string('password');
			$t->string('remember_token');
			$t->timestamps();
		});
	}


	public function down()
	{
		Schema::drop('users');
	}

}
