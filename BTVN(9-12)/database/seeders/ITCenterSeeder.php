<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItCenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('it_centers')->insert([
            [
                'name' => 'Trung tâm Tin học ABC',
                'location' => '456 Đường Y, TP.HCM',
                'contact_email' => 'contact@abc.com',
            ],
            [
                'name' => 'Trung tâm Tin học XYZ',
                'location' => '123 Đường Z, Hà Nội',
                'contact_email' => 'contact@xyz.com',
            ],
            [
                'name' => 'Trung tâm Tin học 123',
                'location' => '789 Đường A, Đà Nẵng',
                'contact_email' => 'info@123.com',
            ],
            [
                'name' => 'Trung tâm Tin học DEF',
                'location' => '101112 Đường B, Cần Thơ',
                'contact_email' => 'info@def.com',
            ]
        ]);
    }
}
