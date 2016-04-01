<?php
use Illuminate\Database\Seeder;
use colegio\Entities\Person;
use Faker\Factory as Faker;
use Faker\Generator;


class PersonTableSeeder extends Seeder {
    
    public function run() 
    {
    	$faker = Faker::create();

        foreach(range(1, 100) as $index)
        {

			$person = Person::create([
                'name'          =>$faker->firstname,
                'last_name'     =>$faker->lastName,
                'adress'        =>$faker->text(100),
                'dni'           =>$faker->randomElement([1,2,3]),           
                'gender'        =>$faker->randomElement(['male','female']),
                'email'         =>$faker->email,
			]);

        }   
    }

    private function createAdmin()
    {
    	// User::create([
    	// 	'name'	=>	'bvaldez',
    	// 	'password'	=>	bcrypt('admin')
    	// ]);
    }

    protected function createMultiple() {

    }    
}

