<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RentalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rentals')->insert([
            ['id' => 1, 'user_id' => 1, 'book_id' => 1, 'rental_date' => '2024-02-02', 'return_date' => '2024-02-15'],
            ['id' => 2, 'user_id' => 1, 'book_id' => 2, 'rental_date' => '2024-02-05', 'return_date' => '2024-02-18'],
        ]);
    }
}
