<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([]);
        $this->call(CompaniesTableSeeder::class);
        $this->call(LeadersTableSeeder::class);
        $this->call(EmployeesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(DailyReportsTableSeeder::class);
    }
}
