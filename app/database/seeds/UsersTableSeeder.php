<?php


class UsersTableSeeder extends Seeder {

	/**
	  * Insert random users in database, to work with them in the future. 
	  *
	  * @uses Faker
	  * @return void
	**/

	public function run()
	{

		$count = 10; // How many user will be generated
		$password = 'testpass'; // Password for all generated users

		$this->command->info('Deleting all existing user and their profiles ... ');

		DB::statement('SET foreign_key_checks = 0');
		DB::table('profiles')->truncate();
		DB::table('users')->truncate();
		DB::statement('SET foreign_key_checks = 1');

		$faker = Faker\Factory::create('en_US'); // Create new Faker instance

		// Add faker providers

		$faker->addProvider( new Faker\Provider\Internet($faker) );
    	$faker->addProvider( new Faker\Provider\en_US\Person($faker) );

		for($i = 1; $i <= $count; $i++)
		{

			$user = [
				'email' => $faker->email,
				'password' => Hash::make($password),
				'remember_token' => ''
			];

			$createdUser = User::create($user);

			$profile = [
				'user_id' => $createdUser['id'],
				'first_name' => $faker->firstName,
				'last_name' => $faker->lastName,
				'nickname' => $faker->userName
			];

			Profile::create($profile);

		}

		$this->command->info('User profiles generated!');		

	}


}