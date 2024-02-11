<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('role_user')->insert([
            ['id' => 1, 'role_id' => 1, 'user_id' => 1],
            ['id' => 2, 'role_id' => 2, 'user_id' => 1],
        ]);
    }
}
