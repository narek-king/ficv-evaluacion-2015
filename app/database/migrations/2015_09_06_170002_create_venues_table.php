<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVenuesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('venues', function($table) {
			$table->increments('id');
			$table->string('name');
			$table->text('description');
			$table->decimal('lat', 15, 12)->default(0);
    		$table->decimal('lng', 15, 12)->default(0);
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
		Schema::drop('venues');
	}

}
