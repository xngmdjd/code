<?php

namespace Database\Seeders;

use App\Models\Classes;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class classSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $type=['LV1','LV2','LV3','LV4','LV5'];
        $room=['VH1','VH2','VH3','VH4','VH5','VH6','VH7','VH8'];
        $faker = Faker::create();
        for ($i = 0; $i < 20; $i++) {
            Classes::create([
                'grade_level' => $faker->randomElement($type),
                'room_number' => $faker->randomElement($room),
            ]);
        }
    }
}
