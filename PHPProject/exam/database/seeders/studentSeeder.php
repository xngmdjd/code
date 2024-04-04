<?php

namespace Database\Seeders;

use App\Http\Controllers\StudentController;
use App\Models\Student;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class studentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 50; $i++) {
            Student::create([
                'first_name' => $faker->firstName(),
                'last_name' => $faker->lastName(),
                'date_of_birth' => $faker->dateTimeBetween('-10years','-2years'),
                'parent_phone' => $faker->phoneNumber(),
                'class_id' => $faker->numberBetween('1','20'),
            ]);
        }
    }
}
