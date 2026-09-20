<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = [
            ['id' => 1, 'judul' => 'Pemrograman PHP Dasar', 'penulis' => 'Budi Santoso', 'tahun_terbit' => 2021],
            ['id' => 2, 'judul' => 'Laravel 13 untuk Pemula', 'penulis' => 'Siti Aminah', 'tahun_terbit' => 2023],
            ['id' => 3, 'judul' => 'Perancangan Basis Data', 'penulis' => 'Eko Prasetyo', 'tahun_terbit' => 2020],
            ['id' => 4, 'judul' => 'Algoritma dan Struktur Data', 'penulis' => 'Rian Hidayat', 'tahun_terbit' => 2019],
            ['id' => 5, 'judul' => 'Pemrograman Berorientasi Objek', 'penulis' => 'Dewi Lestari', 'tahun_terbit' => 2022]
        ];

        return view('books.index', compact('books'));
    }

    public function show($id)
    {
        return view('books.show', compact('id'));
    }
}
