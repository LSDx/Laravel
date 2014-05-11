<?php

class UserTableSeeder extends Seeder {
	
	public function run()
    {
        DB::table('users')->delete();
        DB::table('profiles')->delete();

        User::create([
        	'email' => 'user@test.com',
        	'password' => Hash::make('12345'),
        	'remember_token' => '',
        ]);

        Profile::create([
        	'user_id' => 1,
        	'first_name' => 'Myname', 
        	'last_name' => 'Mysurname',
        	'nickname' => 'Mynickname',
        ]);

    }

}