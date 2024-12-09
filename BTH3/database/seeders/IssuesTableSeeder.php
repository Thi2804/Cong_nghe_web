<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IssuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("issues")->insert([
            [
                'computer_id' => 1,
                'reported_by'=> 'Nguyễn Văn A',
                'reported_date'=> '2024-12-09',
                'description'=> 'Máy không khởi động được', 
                'urgency'=> 'Low',
                'status'=> 'Open'
            ]
        ,
            [
                'computer_id' => 2,
                'reported_by'=> 'Trần Thị B',
                'reported_date'=> '2024-12-10',
                'description'=> 'Màn hình xanh',
                'urgency'=> 'High',
                'status'=> 'In Progress'
            ],
            [
                'computer_id' => 3,
                'reported_by'=> 'Lê Văn C',
                'reported_date'=> '2024-12-11',
                'description'=> 'Không kết nối được mạng',
                'urgency'=> 'Medium',
                'status'=> 'Open'
            ],
            [
                'computer_id' => 4,
                'reported_by'=> 'Phạm Thị D',
                'reported_date'=> '2024-12-12',
                'description'=> 'Lỗi phần mềm',
                'urgency'=> 'Low',
                'status'=> 'Resolved'
            ],
            [
                'computer_id' => 5,
                'reported_by'=> 'Ngô Văn E',
                'reported_date'=> '2024-12-13',
                'description'=> 'Máy chạy chậm',
                'urgency'=> 'Medium',
                'status'=> 'Open'
            ],
            [
                'computer_id' => 6,
                'reported_by'=> 'Đỗ Thị F',
                'reported_date'=> '2024-12-14',
                'description'=> 'Không in được',
                'urgency'=> 'High',
                'status'=> 'In Progress'
            ],
            [
                'computer_id' => 7,
                'reported_by'=> 'Hoàng Văn G',
                'reported_date'=> '2024-12-15',
                'description'=> 'Lỗi ổ cứng',
                'urgency'=> 'High',
                'status'=> 'Open'
            ],
            [
                'computer_id' => 8,
                'reported_by'=> 'Vũ Thị H',
                'reported_date'=> '2024-12-16',
                'description'=> 'Không nhận USB',
                'urgency'=> 'Low',
                'status'=> 'Resolved'
            ],
            [
                'computer_id' => 9,
                'reported_by'=> 'Nguyễn Văn I',
                'reported_date'=> '2024-12-17',
                'description'=> 'Lỗi bàn phím',
                'urgency'=> 'Medium',
                'status'=> 'In Progress'
            ],
            [
                'computer_id' => 10,
                'reported_by'=> 'Trần Thị J',
                'reported_date'=> '2024-12-18',
                'description'=> 'Không nhận chuột',
                'urgency'=> 'Low',
                'status'=> 'Open'
            ]
        ]);
    }
}
