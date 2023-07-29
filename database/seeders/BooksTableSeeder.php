<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('books')->insert([
        //     'title'=> 'Primeiro Livro',
        //     'description'=> 'Descrição do primeiro livro'
        // ]);

        // 50 registros
        Book::factory()->count(50)->create();
    }
}
