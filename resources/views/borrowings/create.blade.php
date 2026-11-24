@extends('layouts.app')

@section('title', 'Tambah Peminjaman')

@section('content')
    <h2>Form Peminjaman Buku</h2>

    @if($errors->any())
        <div style="background-color: #fee2e2; color: #991b1b; padding: 10px; margin-bottom: 15px;">
            <ul style="margin: 0;">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('borrowings.store') }}" method="POST">
        @csrf

        <div style="margin-bottom: 12px;">
            <label for="member_id">Pilih Anggota:</label><br>
            <select name="member_id" id="member_id" required style="padding: 5px; width: 300px;">
                <option value="">-- Pilih Anggota --</option>
                @foreach($members as $member)
                    <option value="{{ $member->id }}" {{ old('member_id') == $member->id ? 'selected' : '' }}>
                        {{ $member->member_code }} - {{ $member->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div style="margin-bottom: 12px;">
            <label for="book_id">Pilih Buku:</label><br>
            <select name="book_id" id="book_id" required style="padding: 5px; width: 300px;">
                <option value="">-- Pilih Buku --</option>
                @foreach($books as $book)
                    <option value="{{ $book->id }}" {{ old('book_id') == $book->id ? 'selected' : '' }}>
                        {{ $book->title }} (Stok: {{ $book->stock }})
                    </option>
                @endforeach
            </select>
        </div>

        <div style="margin-bottom: 15px;">
            <label for="quantity">Jumlah Pinjam:</label><br>
            <input type="number" name="quantity" id="quantity" value="{{ old('quantity', 1) }}" min="1" required style="padding: 5px; width: 100px;">
        </div>

        <button type="submit" style="padding: 6px 14px;">Simpan Transaksi</button>
        <a href="{{ route('borrowings.index') }}" style="margin-left: 10px;">Batal</a>
    </form>
@endsection