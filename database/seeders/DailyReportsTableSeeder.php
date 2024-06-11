<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DailyReportsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('daily_reports')->insert([
            [
                'company_id' => 1,
                'leader_id' => 1,
                'employee_id' => null,
                'date' => '2023-06-01',
                'content' => 'リーダーの日報1',
                'sales_count' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'company_id' => 1,
                'leader_id' => 1,
                'employee_id' => 1,
                'date' => '2023-06-01',
                'content' => '従業員の日報1',
                'sales_count' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'company_id' => 1,
                'leader_id' => 1,
                'employee_id' => 1,
                'date' => '2023-06-01',
                'content' => '従業員の日報2',
                'sales_count' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'company_id' => 2,
                'leader_id' => 2,
                'employee_id' => null,
                'date' => '2023-06-02',
                'content' => 'リーダーの日報2',
                'sales_count' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'company_id' => 2,
                'leader_id' => 2,
                'employee_id' => 1,
                'date' => '2023-06-02',
                'content' => '従業員の日報3',
                'sales_count' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'company_id' => 2,
                'leader_id' => 2,
                'employee_id' => 1,
                'date' => '2023-06-02',
                'content' => '従業員の日報4',
                'sales_count' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'company_id' => 3,
                'leader_id' => 3,
                'employee_id' => null,
                'date' => '2023-06-03',
                'content' => 'リーダーの日報3',
                'sales_count' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'company_id' => 3,
                'leader_id' => 3,
                'employee_id' => 1,
                'date' => '2023-06-03',
                'content' => '従業員の日報5',
                'sales_count' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'company_id' => 1,
                'leader_id' => 1,
                'employee_id' => 1,
                'date' => '2023-06-04',
                'content' => '従業員の日報6',
                'sales_count' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'company_id' => 2,
                'leader_id' => 2,
                'employee_id' => 1,
                'date' => '2023-06-04',
                'content' => '従業員の日報7',
                'sales_count' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
