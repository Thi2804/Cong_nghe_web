<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('classes')->insert([
            ['grade_level' => 'Pre-K', 'room_number' => 'W1A'],
            ['grade_level' => 'Pre-K', 'room_number' => 'W1B'],
            ['grade_level' => 'Kindergarten', 'room_number' => 'K2A'],
            ['grade_level' => 'Kindergarten', 'room_number' => 'K2B'],
            ['grade_level' => 'Pre-K', 'room_number' => '1A'],
            ['grade_level' => 'Pre-K', 'room_number' => '1B'],
            ['grade_level' => 'Kindergarten', 'room_number' => '2A'],
            ['grade_level' => 'Kindergarten', 'room_number' => '2B'],
            ['grade_level' => 'Kindergarten', 'room_number' => '3A'],
            ['grade_level' => 'Kindergarten', 'room_number' => '3B']
        ]);
    }
}
