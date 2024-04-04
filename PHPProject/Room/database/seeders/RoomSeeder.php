<?php

namespace Database\Seeders;

use App\Models\Room;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Laravel\Prompts\Table;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $availability=['availability','occupied','under maintenance'];
        $type=['standard','deluxe','suite'];
        $faker = Faker::create();
        for ($i = 0; $i < 50; $i++) {
            Room::create([
                'RoomNumber' => $faker->buildingNumber(),
                'RoomType' => $faker->randomElement($type),
                'Availability' => $faker->randomElement($availability),
            ]);
        }
    }
}
