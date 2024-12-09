<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaptopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('laptops')->insert([
            [
                'brand' => 'Dell',
                'model' => 'Inspiron 15 3000',
                'specifications' => 'i5, 8GB RAM, 256GB SSD',
                'rental_status' => true,
                'renter_id' => 1
            ],
            [
                'brand' => 'HP',
                'model' => 'Pavilion x360',
                'specifications' => 'i7, 16GB RAM, 512GB SSD',
                'rental_status' => false,
                'renter_id' => 2
            ],
            [
                'brand' => 'Acer',
                'model' => 'Swift 3',
                'specifications' => 'Ryzen 5, 8GB RAM, 512GB SSD',
                'rental_status' => true,
                'renter_id' => 2
            ],
            [
                'brand' => 'Lenovo',
                'model' => 'ThinkPad X1 Carbon',
                'specifications' => 'i7, 16GB RAM, 1TB SSD',
                'rental_status' => true,
                'renter_id' => 3
            ],
            [
                'brand' => 'Asus',
                'model' => 'ZenBook 14',
                'specifications' => 'i5, 8GB RAM, 256GB SSD',
                'rental_status' => false,
                'renter_id' => 4
            ]
        ]);
    }
}
