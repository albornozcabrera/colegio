<?php
use Illuminate\Database\Seeder;
class UserTableSeeder extends Seeder {
    
    public function run() {
        \DB::table('users')->insert(array(
            'name' => 'Brain',
            'email' => 'balbornoz@gmail.com',
            'password' => \hash::make('secret')
        ));
    }
}

