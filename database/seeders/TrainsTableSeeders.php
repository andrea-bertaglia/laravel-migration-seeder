<?php

namespace Database\Seeders;

use Faker;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker\Factory::create('it_IT');
        $newTrain = new Train();
        $newTrain->company = $faker->randomElement(['Trenitalia', 'Italo', 'Trenord', 'OBB']);
        $newTrain->departure_station = $faker->city();
        $newTrain->arrival_station = $faker->city();
        $newTrain->departure_time = $faker->dateTimeInInterval('-1 week', '+1 week');
        $newTrain->arrival_time = $faker->dateTimeInInterval('-1 week', '+1 week');
        $newTrain->train_code = $faker->numberBetween(1000, 9999);
        $newTrain->number_of_carriages = $faker->numberBetween(1, 12);
        $newTrain->cancelled = $faker->numberBetween(0, 1);
        $newTrain->save();
    }
}
