@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
    <h2>Daftar Buku</h2>
    
    @if(count($books) > 0)
        <ul>
            @foreach($books as $book)
                <li>
                    <strong>
                        <a href="/books/{{ $book['id'] }}">{{ $book['judul'] }}</a>
                    </strong> - Penulis: {{ $book['penulis'] }} (Tahun: {{ $book['tahun_terbit'] }})
                </li>
            @endforeach
        </ul>
    @else
        <p>Buku sedang habis/tidak tersedia.</p>
    @endif
@endsection