<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->command->info('Seeding movies...');
		$this->call('MovieTableSeeder');

		$this->command->info('Seeding venues...');
		$this->call('VenueTableSeeder');
	}

}
