<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sales')->insert([
        [
            'medicine_id' => 1, 
            'quantity' => 10,
            'sale_date' => now(),
            'customer_phone' => '0123456789',
        ],
        [
            'medicine_id' => 2, 
            'quantity' => 5,
            'sale_date' => now(),
            'customer_phone' => '0987654321',
        ],
        [
            'medicine_id' => 3, 
            'quantity' => 7,
            'sale_date' => now(),
            'customer_phone' => '0112233445',
        ],
        [
            'medicine_id' => 4, 
            'quantity' => 12,
            'sale_date' => now(),
            'customer_phone' => '0223344556',
        ],
        [
            'medicine_id' => 5, 
            'quantity' => 8,
            'sale_date' => now(),
            'customer_phone' => '0334455667',
        ],
        [
            'medicine_id' => 6, 
            'quantity' => 15,
            'sale_date' => now(),
            'customer_phone' => '0445566778',
        ],
        [
            'medicine_id' => 7, 
            'quantity' => 9,
            'sale_date' => now(),
            'customer_phone' => '0556677889',
        ],
        [
            'medicine_id' => 8, 
            'quantity' => 6,
            'sale_date' => now(),
            'customer_phone' => '0667788990',
        ],
        [
            'medicine_id' => 9, 
            'quantity' => 11,
            'sale_date' => now(),
            'customer_phone' => '0778899001',
        ],
        [
            'medicine_id' => 10, 
            'quantity' => 4,
            'sale_date' => now(),
            'customer_phone' => '0889900112',
        ]
    ]);
    }
}
