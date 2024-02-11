<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            ['id' => 1, 'rolename' => 'admin'],
            ['id' => 2, 'rolename' => 'user'],
            ['id' => 3, 'rolename' => 'editor'],
            ['id' => 4, 'rolename' => 'contributor']
        ]);
    }
}
