<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run()
    {
        Book::insert([
            ['title' => 'Harry Potter and the Sorcerer\'s Stone', 'author_id' => 1, 'publication_year' => 1997],
            ['title' => 'A Game of Thrones', 'author_id' => 2, 'publication_year' => 1996],
            ['title' => 'The Hobbit', 'author_id' => 3, 'publication_year' => 1937],
            ['title' => 'Murder on the Orient Express', 'author_id' => 4, 'publication_year' => 1934],
            ['title' => 'The Shining', 'author_id' => 5, 'publication_year' => 1977],
        ]);
    }
}
