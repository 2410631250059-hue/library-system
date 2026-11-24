@extends('layouts.app')

@section('title', 'Tambah Anggota')

@section('content')
    <h2>Tambah Anggota Baru</h2>

    @if($errors->any())
        <div style="background-color: #fee2e2; color: #991b1b; padding: 10px; margin-bottom: 15px;">
            <ul style="margin: 0;">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('members.store') }}" method="POST">
        @csrf

        <div style="margin-bottom: 12px;">
            <label for="member_code">Kode Anggota:</label><br>
            <input type="text" name="member_code" id="member_code" value="{{ old('member_code') }}" placeholder="Contoh: M001" required style="padding: 5px; width: 300px;">
        </div>

        <div style="margin-bottom: 12px;">
            <label for="name">Nama Lengkap:</label><br>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required style="padding: 5px; width: 300px;">
        </div>

        <div style="margin-bottom: 12px;">
            <label for="phone">No. Telepon:</label><br>
            <input type="text" name="phone" id="phone" value="{{ old('phone') }}" style="padding: 5px; width: 300px;">
        </div>

        <div style="margin-bottom: 15px;">
            <label for="address">Alamat:</label><br>
            <textarea name="address" id="address" rows="3" style="padding: 5px; width: 300px;">{{ old('address') }}</textarea>
        </div>

        <button type="submit" style="padding: 6px 14px;">Simpan</button>
        <a href="{{ route('members.index') }}" style="margin-left: 10px;">Batal</a>
    </form>
@endsection