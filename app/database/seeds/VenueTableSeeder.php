<?php 
/**
* Assoc. Seeder
*/

require_once 'vendor/fzaninotto/faker/src/autoload.php';

class VenueTableSeeder extends Seeder {
	
	public function run() {
		
		$faker = Faker\Factory::create('es_ES');

		for ($i = 0; $i < 5; $i++) {
			Venue::create([
				'name' => $faker->catchPhrase(),
				'description' => $faker->paragraph(),
				'lat' => $faker->latitude(),
				'lng' => $faker->longitude()
			]);
		}
		
	}
}