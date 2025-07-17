<?php

namespace Database\Seeders;

use App\Models\Appointment;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
         foreach (range(1, 10) as $i) {
            Appointment::create([
                'name' => $faker->name,
                'phone' => $faker->phoneNumber,
                'date' => $faker->dateTimeBetween('+0 days', '+10 days')->format('Y-m-d'),
                'time' => $faker->time('H:i'),
                'complaint' => $faker->sentence,
                'status' => 'pending',
            ]);
        }
    }
}
