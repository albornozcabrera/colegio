<?php

use Faker\Factory as Faker;
Use Colegio\Entities\Job;

class JobTableSeeder extends Seeder{

	public function run ()
	{
		Job::create([
			'id'	=>	1,
			'name'	=>	'Profesor',
			'slug'	=>	'profesor'
		]);
		Job::create([
			'id'	=>	2,
			'name'	=>	'Director',
			'slug'	=>	'director'
		]);
		Job::create([
			'id'	=>	3,
			'name'	=>	'Asistente',
			'slug'	=>	'asistente'
		]);				
	}
}