<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration {

	public function up()
	{
		Schema::create('profiles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->unsignedInteger('user_id');

			$table->foreign('user_id')
				  ->references('id')
				  ->on('users')
				  ->onDelete('cascade')
				  ->onUpdate('cascade');

			$table->string('first_name');
			$table->string('last_name');
			$table->string('nickname');
			$table->timestamps();

		});
	}


	public function down()
	{
		Schema::drop('profiles');
	}

}
