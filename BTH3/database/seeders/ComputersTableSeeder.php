<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComputersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('computers')->insert([
            [
            'computer_name' => 'Lab1-PC1',
            'model' => 'Dell Optiplex 7010',
            'operating_system' => 'Windows 10 Pro',
            'processor' => 'Intel Core i5-3470',
            'memory' => 8,
            'available' => true
            ],
            [
            'computer_name' => 'Lab1-PC2',
            'model' => 'HP EliteDesk 800 G1',
            'operating_system' => 'Windows 10 Pro',
            'processor' => 'Intel Core i5-4570',
            'memory' => 8,
            'available' => true
            ],
            [
            'computer_name' => 'Lab1-PC3',
            'model' => 'Lenovo ThinkCentre M93p',
            'operating_system' => 'Windows 10 Pro',
            'processor' => 'Intel Core i5-4570',
            'memory' => 8,
            'available' => true
            ],
            [
            'computer_name' => 'Lab1-PC4',
            'model' => 'Acer Veriton X2631G',
            'operating_system' => 'Windows 10 Pro',
            'processor' => 'Intel Core i3-4130',
            'memory' => 4,
            'available' => true
            ],
            [
            'computer_name' => 'Lab1-PC5',
            'model' => 'Dell Optiplex 3020',
            'operating_system' => 'Windows 10 Pro',
            'processor' => 'Intel Core i3-4150',
            'memory' => 4,
            'available' => true
            ],
            [
            'computer_name' => 'Lab1-PC6',
            'model' => 'HP ProDesk 600 G1',
            'operating_system' => 'Windows 10 Pro',
            'processor' => 'Intel Core i5-4590',
            'memory' => 8,
            'available' => true
            ],
            [
            'computer_name' => 'Lab1-PC7',
            'model' => 'Lenovo ThinkCentre M73',
            'operating_system' => 'Windows 10 Pro',
            'processor' => 'Intel Core i3-4130',
            'memory' => 4,
            'available' => true
            ],
            [
            'computer_name' => 'Lab1-PC8',
            'model' => 'Acer Veriton M4630G',
            'operating_system' => 'Windows 10 Pro',
            'processor' => 'Intel Core i5-4590',
            'memory' => 8,
            'available' => true
            ],
            [
            'computer_name' => 'Lab1-PC9',
            'model' => 'Dell Optiplex 9020',
            'operating_system' => 'Windows 10 Pro',
            'processor' => 'Intel Core i7-4770',
            'memory' => 16,
            'available' => true
            ],
            [
            'computer_name' => 'Lab1-PC10',
            'model' => 'HP EliteDesk 800 G2',
            'operating_system' => 'Windows 10 Pro',
            'processor' => 'Intel Core i7-6700',
            'memory' => 16,
            'available' => true
            ]
        ]);
    }
}
