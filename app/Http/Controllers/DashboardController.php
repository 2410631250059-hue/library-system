<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Library System Dashboard',
            'description' => 'Selamat datang di Sistem Informasi Perpustakaan Sederhana.',
            'totalBooks' => 5,
            'totalMembers' => 5,
            'totalCategories' => 5,
            'isOpen' => true
        ];

        return view('dashboard.index', $data);
    }
}
