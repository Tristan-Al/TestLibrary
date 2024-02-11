<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('authors')->insert([
            ['id' => 1, 'surnames' => 'Benigni', 'name' => 'Roberto', 'nationality' => 'italiana', 'gender' => 'M', 'age' => 30],
            ['id' => 2, 'surnames' => 'Meyer', 'name' => 'Stephenie', 'nationality' => 'estadounidense', 'gender' => 'F', 'age' => 43],
            ['id' => 3, 'surnames' => 'Descartes', 'name' => 'Rene', 'nationality' => 'francesa', 'gender' => 'M', 'age' => 48],
            ['id' => 4, 'surnames' => 'Shakespeare', 'name' => 'William', 'nationality' => 'britanica', 'gender' => 'M', 'age' => 34],
            ['id' => 5, 'surnames' => 'Hemingway', 'name' => 'Ernest', 'nationality' => 'estadounidense', 'gender' => 'M', 'age' => 51],
            ['id' => 6, 'surnames' => 'Larsson', 'name' => 'Stieg', 'nationality' => 'sueca', 'gender' => 'M', 'age' => 46],
            ['id' => 7, 'surnames' => 'Follet', 'name' => 'Ken', 'nationality' => 'estadounidense', 'gender' => 'M', 'age' => 50],
            ['id' => 8, 'surnames' => 'Kepler', 'name' => 'Lars', 'nationality' => 'sueca', 'gender' => 'M', 'age' => 38],
            ['id' => 9, 'surnames' => 'Neville', 'name' => 'Katherine', 'nationality' => 'estadounidense', 'gender' => 'F', 'age' => 41],
            ['id' => 10, 'surnames' => 'Connelly', 'name' => 'Michael', 'nationality' => 'estadounidense', 'gender' => 'M', 'age' => 52],
            ['id' => 11, 'surnames' => 'Sierra', 'name' => 'Javier', 'nationality' => 'española', 'gender' => 'M', 'age' => 49],
            ['id' => 12, 'surnames' => 'Brown', 'name' => 'Dan', 'nationality' => 'estadounidense', 'gender' => 'M', 'age' => 56],
            ['id' => 13, 'surnames' => 'Kostova', 'name' => 'Elizabeth', 'nationality' => 'estadounidense', 'gender' => 'F', 'age' => 55],
            ['id' => 14, 'surnames' => 'Connelly', 'name' => 'Michael', 'nationality' => 'estadounidense', 'gender' => 'M', 'age' => 48],
            ['id' => 15, 'surnames' => 'Ruiz Zafon', 'name' => 'Carlos', 'nationality' => 'española', 'gender' => 'M', 'age' => 62],
            ['id' => 16, 'surnames' => 'Hawkins', 'name' => 'Paula', 'nationality' => 'zimbabuense', 'gender' => 'F', 'age' => 45],
        ]);
    }
}
