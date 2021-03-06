<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrateUsersTable extends Migration {


	public function up()
	{
		Schema::create('users', function(Blueprint $table) 
		{
			$table->increments('id');
			$table->string('email');
			$table->string('password');
			$table->string('remember_token');
			$table->timestamps();
		});
	}


	public function down()
	{
		Schema::drop('users');
	}

}
