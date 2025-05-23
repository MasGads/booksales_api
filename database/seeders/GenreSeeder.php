<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    public function run()
    {
        Genre::insert([
            ['name' => 'Fantasy'],
            ['name' => 'Science Fiction'],
            ['name' => 'Mystery'],
            ['name' => 'Romance'],
            ['name' => 'Horror'],
        ]);
    }
}
