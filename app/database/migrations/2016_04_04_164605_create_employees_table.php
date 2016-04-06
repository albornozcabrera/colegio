<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('employees', function (Blueprint $employee)
		{
			$employee->integer('user_id')->unsigned();
			$employee->foreign('user_id')->references('id')->on('users');
			$employee->integer('job_id')->unsigned();
			$employee->foreign('job_id')->references('id')->on('jobs');
			$employee->text('description');
			$employee->boolean('available');
			$employee->string('slug');

			$employee->timestamps();

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('employees');
	}

}
