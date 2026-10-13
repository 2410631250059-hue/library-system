@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
    <h2>Daftar Buku</h2>
    <a href="{{ route('books.create') }}">Tambah Buku Baru</a>
    <br><br>

    @if(count($books) > 0)
        <table border="1" cellpadding="8" cellspacing="0">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Tahun</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                    <tr>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->year }}</td>
                        <td>{{ $book->stock }}</td>
                        <td>
                            <a href="{{ route('books.edit', $book) }}">Edit</a>
                            <form action="{{ route('books.destroy', $book) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Buku sedang habis/tidak tersedia.</p>
    @endif
@endsection