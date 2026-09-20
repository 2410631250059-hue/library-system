@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h2>{{ $title }}</h2>
    <p>{{ $description }}</p>

    @if($isOpen)
        <p><strong>Status Perpustakaan:</strong> Layanan Perpustakaan Sedang Buka.</p>
    @else
        <p><strong>Status Perpustakaan:</strong> Perpustakaan Tutup.</p>
    @endif

    <h3>Ringkasan Sistem</h3>
    <ul>
        <li>Jumlah Buku: {{ $totalBooks }}</li>
        <li>Jumlah Kategori: {{ $totalCategories }}</li>
        <li>Jumlah Member: {{ $totalMembers }}</li>
    </ul>
@endsection