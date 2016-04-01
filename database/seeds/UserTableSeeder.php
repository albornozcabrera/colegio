<?php
use Illuminate\Database\Seeder;
use colegio\Entities\User;

class UserTableSeeder extends Seeder {
    
    public function run() 
    {
    	$this->createAdmin();
    }

    private function createAdmin()
    {
    	User::create([
    		'name'	=>	'Bryan Valdez',
    		'email' =>	'ibryan.valdez@gmail.com',
    		'password'	=>	bcrypt('admin')
    	]);
    }
}

