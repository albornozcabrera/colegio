<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $user)
		{ 
			$user->increments('id');

			$user->string('name');
			$user->string('lastname');
			$user->string('email');
			$user->string('password');
			$user->integer('profile_id')->unsigned();
			$user->foreign('profile_id')->references('id')->on('profiles');

			$user->timestamps();

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}


}