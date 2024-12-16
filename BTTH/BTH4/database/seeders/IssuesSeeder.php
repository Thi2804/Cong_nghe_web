<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class IssuesSeeder extends Seeder
{

    public function run(): void
    {
        $faker = Faker::create();
        $computerIds = DB::table('computers')->pluck('id')->toArray();
        $issues = [];

        for ($i = 0; $i < 100; $i++) {
            $issues[] = [
                'computer_id' => $faker->randomElement($computerIds),
                'reported_by' => $faker->name,
                'reported_date' => $faker->dateTimeBetween('-1 year', 'now'),
                'description' => $faker->sentence(10),
                'urgency' => $faker->randomElement(['Low', 'Medium', 'High']),
                'status' => $faker->randomElement(['Open', 'In Progress', 'Resolved']),
            ];
        }
        DB::table('issues')->insert($issues);
    }
}
