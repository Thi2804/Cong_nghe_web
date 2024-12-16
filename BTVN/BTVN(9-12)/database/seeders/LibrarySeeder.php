<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class LibrarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('libraries')->insert([
            [
                'name' => 'Thư viện IT Đại học ABC',
                'address' => '123 Đường X, Hà Nội',
                'contact_number' => '0123456789'
            ],
            [
                'name' => 'Thư viện Khoa học Đại học DEF',
                'address' => '456 Đường Y, TP.HCM',
                'contact_number' => '0987654321'
            ],
            [
                'name' => 'Thư viện Đại học GHI',
                'address' => '789 Đường Z, Đà Nẵng',
                'contact_number' => '1112223333'
            ],
            [
                'name' => 'Thư viện Đại học JKL',
                'address' => '101112 Đường A, Cần Thơ',
                'contact_number' => '4445556666'
            ],
            [
                'name' => 'Thư viện Đại học MNO',
                'address' => '131415 Đường B, Hải Phòng',
                'contact_number' => '7778889990'
            ],
            [
                'name' => 'Thư viện Đại học PQR',
                'address' => '161718 Đường C, Nha Trang',
                'contact_number' => '9990001111'
            ],
            [
                'name' => 'Thư viện Đại học STU',
                'address' => '192021 Đường D, Vinh',
                'contact_number' => '2223334444'
            ],
            [
                'name' => 'Thư viện Đại học VWX',
                'address' => '232425 Đường E, Quy Nhơn',
                'contact_number' => '5556667777'
            ],
            [
                'name' => 'Thư viện Đại học YZ',
                'address' => '262728 Đường F, Huế',
                'contact_number' => '8889990000'
            ]
        ]);
    }
}
