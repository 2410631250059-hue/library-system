@extends('layouts.app')

@section('title', 'Daftar Anggota')

@section('content')
    <h2>Daftar Anggota Perpustakaan</h2>

    <p><a href="{{ route('members.create') }}">+ Tambah Anggota Baru</a></p>

    @if(session('success'))
        <div style="background-color: #d1fae5; color: #065f46; padding: 10px; margin-bottom: 15px;">
            {{ session('success') }}
        </div>
    @endif

    <table border="1" cellpadding="8" cellspacing="0" style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Anggota</th>
                <th>Nama</th>
                <th>No. Telepon</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($members as $index => $member)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $member->member_code }}</td>
                    <td>{{ $member->name }}</td>
                    <td>{{ $member->phone ?? '-' }}</td>
                    <td>{{ $member->address ?? '-' }}</td>
                    <td>
                        <form action="{{ route('members.destroy', $member->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Hapus anggota ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" style="text-align: center;">Belum ada data anggota.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection