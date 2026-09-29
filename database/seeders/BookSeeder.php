<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::create([
            'title' => 'Pemrograman PHP',
            'author' => 'Andi',
            'year' => 2024,
            'stock' => 5,
        ]);

        Book::create([
            'title' => 'Laravel untuk Pemula',
            'author' => 'Budi',
            'year' => 2025,
            'stock' => 10,
        ]);

        Book::create([
            'title' => 'Basis Data',
            'author' => 'Cici',
            'year' => 2023,
            'stock' => 8,
        ]);

        Book::create([
            'title' => 'Struktur Data',
            'author' => 'Dedi',
            'year' => 2022,
            'stock' => 12,
        ]);

        Book::create([
             'title' => 'Jaringan Komputer',
             'author' => 'Eka',
             'year' => 2024,
            'stock' => 7,
         ]);
    }
}