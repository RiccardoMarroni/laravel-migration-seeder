<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
       for ($i = 0; $i < 50; $i++) {
            $new_train = new Train();
            $new_train->company = $faker->word();
            $new_train->platform = $faker->numberBetween(1, 20);
            $new_train->departure_time= $faker->dateTimeBetween('-1 week', '+1 week');
            $new_train->arrival_time = $faker->dateTimeBetween('-1 week', '+1 week');
            $new_train->departure_station = $faker->city();
            $new_train->arrival_station = $faker->city();
            $new_train->carriages_number = $faker->numberBetween(1, 20);     
            $new_train->train_code = $faker->bothify('??-######');
            $new_train->on_time = $faker->numberBetween(0, 1);
            $new_train->cancelled = $faker->numberBetween(0, 1);
            $new_train->save();
        }
    }
}