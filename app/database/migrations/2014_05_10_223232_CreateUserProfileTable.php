<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfileTable extends Migration {

	public function up()
	{
		Schema::create('user_profiles', function(Blueprint $table) 
		{
			$table->increments('id');
			$table->foreign('user_id')->references('id')->on('users')
			  ->onUpdate('cascade')->onDelete('cascade');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('nickname');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('user_profiles');
	}

}
