<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            [
                'first_name' => 'John',
                'last_name' => 'Doe',
                'date_of_birth' => '2017-05-10',
                'parent_phone' => '1234567890',
                'class_id' => 21
            ],
            [
                'first_name' => 'Jane',
                'last_name' => 'Smith',
                'date_of_birth' => '2016-08-22',
                'parent_phone' => '0987654321',
                'class_id' => 22
            ],
            [
                'first_name' => 'Alice',
                'last_name' => 'Johnson',
                'date_of_birth' => '2015-11-15',
                'parent_phone' => '1122334455',
                'class_id' => 23
            ],
            [
                'first_name' => 'Bob',
                'last_name' => 'Brown',
                'date_of_birth' => '2014-02-20',
                'parent_phone' => '2233445566',
                'class_id' => 24
            ],
            [
                'first_name' => 'Charlie',
                'last_name' => 'Davis',
                'date_of_birth' => '2013-07-30',
                'parent_phone' => '3344556677',
                'class_id' => 25
            ],
            [
                'first_name' => 'Diana',
                'last_name' => 'Miller',
                'date_of_birth' => '2012-09-25',
                'parent_phone' => '4455667788',
                'class_id' => 26
            ],
            [
                'first_name' => 'Eve',
                'last_name' => 'Wilson',
                'date_of_birth' => '2011-12-05',
                'parent_phone' => '5566778899',
                'class_id' => 27
            ],
            [
                'first_name' => 'Frank',
                'last_name' => 'Moore',
                'date_of_birth' => '2010-03-18',
                'parent_phone' => '6677889900',
                'class_id' => 28
            ],
            [
                'first_name' => 'Grace',
                'last_name' => 'Taylor',
                'date_of_birth' => '2009-06-22',
                'parent_phone' => '7788990011',
                'class_id' => 29
            ],
            [
                'first_name' => 'Hank',
                'last_name' => 'Anderson',
                'date_of_birth' => '2008-10-10',
                'parent_phone' => '8899001122',
                'class_id' => 30
            ]
        ]);
    }
}
