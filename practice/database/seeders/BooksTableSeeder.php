<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // デーブルクリア
        DB::table('books')->truncate();

        // 初期データ
        $books = [
                ['name' => 'PHP Book',
                'price' => 2200,
                'author' => 'PHPER'],
            ['name' => 'Laravel Book',
                'price' => 4000,
                'author' => null],
            ['name' => 'Python Book',
                'price' => 2800,
                'author' => 'Pythonista'],

        ];

        // 登録
        foreach ($books as $book) {
            \App\Models\Book::create($book);
        }
    }
}
