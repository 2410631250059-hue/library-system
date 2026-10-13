@extends('layouts.app')

@section('title', 'Edit Buku')

@section('content')
    <h2>Edit Buku</h2>

    <form action="{{ route('books.update', $book) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Judul Buku:</label><br>
            <input type="text" name="title" value="{{ $book->title }}" required>
        </div>
        <div>
            <label>Penulis:</label><br>
            <input type="text" name="author" value="{{ $book->author }}" required>
        </div>
        <div>
            <label>Tahun:</label><br>
            <input type="number" name="year" value="{{ $book->year }}" required>
        </div>
        <div>
            <label>Stok:</label><br>
            <input type="number" name="stock" value="{{ $book->stock }}" required>
        </div>
        <br>
        <button type="submit">Update</button>
    </form>
@endsection