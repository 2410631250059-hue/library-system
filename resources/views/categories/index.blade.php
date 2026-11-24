@extends('layouts.app')

@section('title', 'Kategori Buku')

@section('content')
    <h2>Kategori Buku</h2>

    <p><a href="{{ route('categories.create') }}">+ Tambah Kategori Baru</a></p>

    @if(session('success'))
        <div style="background-color: #d1fae5; color: #065f46; padding: 10px; margin-bottom: 15px;">
            {{ session('success') }}
        </div>
    @endif

    <table border="1" cellpadding="8" cellspacing="0" style="width: 50%; border-collapse: collapse;">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($categories as $index => $category)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Hapus kategori ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" style="text-align: center;">Belum ada data kategori.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection