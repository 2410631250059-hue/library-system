@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h2>Dashboard Perpustakaan</h2>

    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <div>
            <strong>Logged in as:</strong> {{ auth()->user()->name }} (<em>{{ auth()->user()->role }}</em>)
        </div>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </div>

    @can('manage-users')
        <div style="background-color: #e2e8f0; padding: 10px; margin-bottom: 15px; border-radius: 5px;">
            <strong>[Menu Khusus Admin]</strong> <a href="#">Kelola Pengguna</a>
        </div>
    @endcan

    <div style="display: flex; gap: 15px; flex-wrap: wrap; margin-top: 20px;">
        <div style="border: 1px solid #ccc; padding: 15px; border-radius: 5px; min-width: 150px;">
            <h4>Total Kategori</h4>
            <p style="font-size: 24px; font-weight: bold;">{{ $totalCategories }}</p>
        </div>

        <div style="border: 1px solid #ccc; padding: 15px; border-radius: 5px; min-width: 150px;">
            <h4>Total Buku</h4>
            <p style="font-size: 24px; font-weight: bold;">{{ $totalBooks }}</p>
        </div>

        <div style="border: 1px solid #ccc; padding: 15px; border-radius: 5px; min-width: 150px;">
            <h4>Total Anggota</h4>
            <p style="font-size: 24px; font-weight: bold;">{{ $totalMembers }}</p>
        </div>

        <div style="border: 1px solid #ccc; padding: 15px; border-radius: 5px; min-width: 150px;">
            <h4>Total Peminjaman</h4>
            <p style="font-size: 24px; font-weight: bold;">{{ $totalBorrowings }}</p>
        </div>

        <div style="border: 1px solid #ccc; padding: 15px; border-radius: 5px; min-width: 150px;">
            <h4>Sedang Dipinjam</h4>
            <p style="font-size: 24px; font-weight: bold;">{{ $activeBorrowings }}</p>
        </div>
    </div>
@endsection