<?php

use Faker\Factory as Faker;
Use Colegio\Entities\Profile;

class ProfileTableSeeder extends Seeder{

	public function run ()
	{
		Profile::create([
			'id'	=>	1,
			'name'	=>	'Administrator',
			'slug'	=>	'administrator'
		]);
		Profile::create([
			'id'	=>	2,
			'name'	=>	'Employee',
			'slug'	=>	'employee'
		]);
		Profile::create([
			'id'	=>	3,
			'name'	=>	'Client',
			'slug'	=>	'client'
		]);				
	}
}