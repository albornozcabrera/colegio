<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('customer', function (Blueprint $employee) {
            $employee->integer('id')->unsigned();
            $employee->text('description');
            $employee->boolean('available');
            $employee->string('slug');
            $employee->integer('user_id')->unsigned();
            $employee->foreign('user_id')->references('id')->on('users');
            $employee->integer('typeCustomer_id')->unsigned();
            $employee->foreign('typeCustomer_id')->references('id')->on('typeCustomer');

            $employee->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('customer');
    }

}
