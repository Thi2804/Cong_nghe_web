<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ComputersSeeder extends Seeder
{

    public function run(): void
    {
        $faker = Faker::create();
        $computers = [];

        for ($i = 0; $i < 10; $i++) {
            $computers[] = [
                'computer_name' => $faker->unique()->word . '-' . $faker->numberBetween(1, 100),
                'model' => $faker->word . ' ' . $faker->numberBetween(1000, 9999),
                'operating_system' => $faker->randomElement(['Windows 10 Pro', 'Ubuntu 20.04', 'macOS Monterey']),
                'processor' => $faker->randomElement(['Intel Core i5', 'Intel Core i7', 'AMD Ryzen 5']),
                'memory' => $faker->numberBetween(8, 64), // RAM từ 8 đến 64 GB
                'available' => $faker->boolean,
            ];
        }
        DB::table('computers')->insert($computers);
    }
}
