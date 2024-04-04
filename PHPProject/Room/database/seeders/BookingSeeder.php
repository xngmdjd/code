<?php

namespace Database\Seeders;

use App\Models\Booking;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i =0; $i < 50; $i++){
            Booking::create([
                'CustomerID' => $faker->numberBetween(1,49),
                'RoomID' => $faker->numberBetween(1, 49),
            ]);
        }

    }
}
