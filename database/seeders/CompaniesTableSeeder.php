<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            [
                'name' => 'Acme Inc.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Globex Corporation',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Stark Industries',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Wayne Enterprises',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Umbrella Corporation',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
