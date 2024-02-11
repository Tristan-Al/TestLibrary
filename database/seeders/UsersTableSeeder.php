<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            ['id' => 1, 'username' => 'tristan', 'password' => Hash::make('Tristan.12'), 'phone' => '950121212', 'created_at' => '2024-02-02'],
            ['id' => 2, 'username' => 'heriberto', 'password' => Hash::make('Heriberto.12'), 'phone' => '950123456', 'created_at' => '2024-02-03'],
        ]);
    }
}
