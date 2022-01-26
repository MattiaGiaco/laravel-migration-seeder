<?php

use App\Voyage;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class VoyagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 100; $i++) { 
            $newVoyage = new Voyage();
            $newVoyage->country = $faker->country();
            $newVoyage->city = $faker->city();
            $newVoyage->hotel = $faker->name();
            $newVoyage->price_per_night = $faker->numberBetween(10, 400);
            $newVoyage->review = $faker->numberBetween(1, 10);
            $newVoyage->save();
        }
    }
}
