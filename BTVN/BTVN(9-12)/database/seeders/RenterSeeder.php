<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('renters')->insert([
            [
                'name' => 'Nguyễn Văn A',
                'phone_number' => '0987654321',
                'email' => 'nva@gmail.com',
            ],
            [
                'name' => 'Trần Thị B',
                'phone_number' => '0912345678',
                'email' => 'ttb@gmail.com',
            ],
            [
                'name' => 'Lê Văn C',
                'phone_number' => '0901234567',
                'email' => 'lvc@gmail.com',
            ],
            [
                'name' => 'Phạm Thị D',
                'phone_number' => '0934567890',
                'email' => 'ptd@gmail.com',
            ],
            [
                'name' => 'Nguyễn Thị E',
                'phone_number' => '0945678901',
                'email' => 'nte@gmail.com',
            ]
        ]);
    }
}
