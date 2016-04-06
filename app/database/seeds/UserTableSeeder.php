<?php
use Faker\Factory as Faker;
Use Colegio\Entities\User;
Use Colegio\Entities\Employee;

class UserTableSeeder extends Seeder{
	
	public function run()
	{	
		$faker = Faker::create();
		foreach(range(1,100) as $index)
		{	
			$firstname 	= 	$faker->firstname;
			$lastname 	=	$faker->lastname;

			$user = User::create([
				'name'			=>	$firstname,
				'lastname'		=>	$lastname,
				'email'			=>	$faker->email,
				'password'		=>	'123456',
				'profile_id'	=>	$faker->randomElement([1,2,3]),
			]);

			if($user->profile_id == 2){
				Employee::create([
					'user_id'		=>	$user->id,
					'job_id'		=>	$faker->randomElement([1,2,3]),
					'description'	=>	$faker->text(100),
					'available'		=> 	true,
					'slug'			=>	Str::slug($firstname . $lastname)
				]);
			}
		}
	}
}