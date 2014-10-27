<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_details', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('age');
			$table->string('address');
			$table->string('suburb');
			$table->string('postcode');
			$table->string('state');
			$table->string('company_name')->nullable();
			$table->string('contact_number');
			$table->boolean('subscribed');
			$table->integer('user_id')->unsigned()->index();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_details');
	}

}
