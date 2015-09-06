<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlaysTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('plays', function($table) {
			$table->increments('id');
			$table->integer('movie_id')->unsigned();
			$table->integer('venue_id')->unsigned();
			$table->foreign('movie_id')->references('id')->on('movies');
			$table->foreign('venue_id')->references('id')->on('venues');
			$table->timestamp('start');
			$table->timestamp('end');
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
		Schema::drop('plays');
	}

}
