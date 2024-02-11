<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            ['id' => 1, 'title' => 'Luna Nueva', 'category' => 'fantasia', 'author_id' => 2, 'description' => 'Escrito por Stephanie', 'price' => 21.10],
            ['id' => 2, 'title' => 'Crepusculo', 'category' => 'fantasia', 'author_id' => 2, 'description' => 'Un amor peligroso', 'price' => 21.10],
            ['id' => 3, 'title' => 'Hamlet', 'category' => 'tragedia', 'author_id' => 4, 'description' => 'Escrito por Shakespeare', 'price' => 14.20],
            ['id' => 4, 'title' => 'La reina en el paraiso de las corrientes de aire', 'category' => 'novela', 'author_id' => 6, 'description' => 'Trilogía de Stieg', 'price' => 17.45],
            ['id' => 5, 'title' => 'El viejo y el mar', 'category' => 'ficcion', 'author_id' => 5, 'description' => 'Escrito por Hemingway', 'price' => 15.90],
            ['id' => 6, 'title' => 'Discurso del metodo', 'category' => 'filosofia', 'author_id' => 3, 'description' => 'Escrito por Descartes', 'price' => 12.60],
            ['id' => 7, 'title' => 'La vida es bella', 'category' => 'historica', 'author_id' => 1, 'description' => 'Escrito por Roberto Benigni', 'price' => 11.50],
            ['id' => 8, 'title' => 'La chica que soñaba con una cerilla y un bidon de gasolina', 'category' => 'novela', 'author_id' => 6, 'description' => 'Trilogía de Stieg', 'price' => 17.45],
            ['id' => 9, 'title' => 'Los pilares de la tierra', 'category' => 'narrativa', 'author_id' => 7, 'description' => 'Escrito por Ken Follet', 'price' => 19.50],
            ['id' => 10, 'title' => 'El hipnotista', 'category' => 'policiaca', 'author_id' => 8, 'description' => 'Escrito por Lars Kepler', 'price' => 18.12],
            ['id' => 11, 'title' => 'El ocho', 'category' => 'intriga', 'author_id' => 9, 'description' => 'Escrito por Katherine Neville', 'price' => 16.75],
            ['id' => 12, 'title' => 'Luna Funesta', 'category' => 'ficcion', 'author_id' => 10, 'description' => 'Escrito por Michael Connelly', 'price' => 18.21],
            ['id' => 13, 'title' => 'Eclipse', 'category' => 'fantasia', 'author_id' => 2, 'description' => 'Unos dicen que el mundo sucumbirá en el fuego', 'price' => 21.10],
            ['id' => 14, 'title' => 'Los hombres que no amaban a las mujeres', 'category' => 'novela', 'author_id' => 6, 'description' => 'Trilogía de Stieg', 'price' => 17.45],
            ['id' => 15, 'title' => 'Amanecer', 'category' => 'fantasia', 'author_id' => 2, 'description' => 'Un amor peligroso', 'price' => 21.10],
            ['id' => 16, 'title' => 'El hombre de arena', 'category' => 'policiaca', 'author_id' => 8, 'description' => 'El inspector Joona Linna', 'price' => 16.70],
        ]);
    }
}
