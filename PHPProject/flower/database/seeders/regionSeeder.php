<?php

namespace Database\Seeders;

use App\Models\Region;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class regionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $name = ['Asia','Africa', 'Europe'];
        $faker = Faker::create();
        for ($i = 0; $i < 50; $i++) {
            Region::create([
                'flower_id' => $faker->numberBetween(1,49),
                'region_name' => $faker->randomElement($name),
            ]);

        }
    }
}
