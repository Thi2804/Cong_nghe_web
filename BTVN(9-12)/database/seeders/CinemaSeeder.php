<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CinemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cinemas')->insert([
            [
                'name' => 'CGV Vincom',
                'location' => 'Vincom Center, Hà Nội',
                'total_seats' => 300,
            ],
            [
                'name' => 'Lotte Cinema',
                'location' => 'Lotte Mart, TP.HCM',
                'total_seats' => 350,
            ],
            [
                'name' => 'BHD Star Cineplex',
                'location' => 'BHD Cinemas, Đà Nẵng',
                'total_seats' => 200,
            ],
            [
                'name' => 'Galaxy Cinema',
                'location' => 'Galaxy Mall, Cần Thơ',
                'total_seats' => 250,
            ]
        ]);
    }
}
