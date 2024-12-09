<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MedicinesTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('medicines')->insert([
            [
                'name' => 'Paracetamol',
                'brand' => 'Generic',
                'dosage' => '500mg',
                'form' => 'Tablet',
                'price' => 5.00,
                'stock' => 100,
            ],
            [
                'name' => 'Amoxicillin',
                'brand' => 'Amox Pharma',
                'dosage' => '250mg',
                'form' => 'Capsule',
                'price' => 10.00,
                'stock' => 50,
            ],
            [
                'name' => 'Ibuprofen',
                'brand' => 'Advil',
                'dosage' => '200mg',
                'form' => 'Tablet',
                'price' => 8.00,
                'stock' => 75,
            ],
            [
                'name' => 'Cetirizine',
                'brand' => 'Zyrtec',
                'dosage' => '10mg',
                'form' => 'Tablet',
                'price' => 12.00,
                'stock' => 60,
            ],
            [
                'name' => 'Metformin',
                'brand' => 'Glucophage',
                'dosage' => '500mg',
                'form' => 'Tablet',
                'price' => 15.00,
                'stock' => 80,
            ],
            [
                'name' => 'Lisinopril',
                'brand' => 'Prinivil',
                'dosage' => '10mg',
                'form' => 'Tablet',
                'price' => 20.00,
                'stock' => 40,
            ],
            [
                'name' => 'Atorvastatin',
                'brand' => 'Lipitor',
                'dosage' => '20mg',
                'form' => 'Tablet',
                'price' => 25.00,
                'stock' => 30,
            ],
            [
                'name' => 'Omeprazole',
                'brand' => 'Prilosec',
                'dosage' => '20mg',
                'form' => 'Capsule',
                'price' => 18.00,
                'stock' => 90,
            ],
            [
                'name' => 'Amlodipine',
                'brand' => 'Norvasc',
                'dosage' => '5mg',
                'form' => 'Tablet',
                'price' => 22.00,
                'stock' => 55,
            ],
            [
                'name' => 'Simvastatin',
                'brand' => 'Zocor',
                'dosage' => '40mg',
                'form' => 'Tablet',
                'price' => 28.00,
                'stock' => 65,
            ]
        ]);
    }
}