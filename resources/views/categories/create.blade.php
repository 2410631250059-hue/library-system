@extends('layouts.app')

@section('title', 'Tambah Kategori')

@section('content')
    <h2>Tambah Kategori Baru</h2>

    @if($errors->any())
        <div style="background-color: #fee2e2; color: #991b1b; padding: 10px; margin-bottom: 15px;">
            <ul style="margin: 0;">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf

        <div style="margin-bottom: 15px;">
            <label for="name">Nama Kategori:</label><br>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required style="padding: 5px; width: 300px;">
        </div>

        <button type="submit" style="padding: 6px 14px;">Simpan</button>
        <a href="{{ route('categories.index') }}" style="margin-left: 10px;">Batal</a>
    </form>
@endsection