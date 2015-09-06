<?php 
/**
* Assoc. Seeder
*/

require_once 'vendor/fzaninotto/faker/src/autoload.php';

class MovieTableSeeder extends Seeder {
	
	public function run() {
		
		$faker = Faker\Factory::create();

		//DB::table('movies')->truncate();
		for ($i = 0; $i < 30; $i++) {
			Movie::create([
				'name' => $faker->sentence(),
				'description' => $faker->paragraph(),
				'img_url' => $faker->sentence()
			]);
		}
		
	}
}