@extends('layouts.app')

@section('title', 'Daftar Peminjaman')

@section('content')
    <h2>Daftar Transaksi Peminjaman</h2>

    <p><a href="{{ route('borrowings.create') }}">+ Tambah Peminjaman Baru</a></p>

    @if(session('success'))
        <div style="background-color: #d1fae5; color: #065f46; padding: 10px; margin-bottom: 15px;">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div style="background-color: #fee2e2; color: #991b1b; padding: 10px; margin-bottom: 15px;">
            {{ session('error') }}
        </div>
    @endif

    <table border="1" cellpadding="8" cellspacing="0" style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr>
                <th>No</th>
                <th>Anggota</th>
                <th>Buku Dipinjam</th>
                <th>Tgl Pinjam</th>
                <th>Jatuh Tempo</th>
                <th>Tgl Kembali</th>
                <th>Petugas</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($borrowings as $index => $borrowing)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $borrowing->member->name }} ({{ $borrowing->member->member_code }})</td>
                    <td>
                        <ul style="margin: 0; padding-left: 18px;">
                            @foreach($borrowing->details as $detail)
                                <li>{{ $detail->book->title }} ({{ $detail->quantity }} pcs)</li>
                            @endforeach
                        </ul>
                    </td>
                    <td>{{ $borrowing->borrowing_date }}</td>
                    <td>{{ $borrowing->due_date }}</td>
                    <td>{{ $borrowing->return_date ?? '-' }}</td>
                    <td>{{ $borrowing->user->name }}</td>
                    <td><strong>{{ strtoupper($borrowing->status) }}</strong></td>
                    <td>
                        @if($borrowing->status === 'borrowed')
                            <form action="{{ route('borrowings.return', $borrowing->id) }}" method="POST">
                                @csrf
                                <button type="submit" onclick="return confirm('Konfirmasi pengembalian buku?')">
                                    Kembalikan
                                </button>
                            </form>
                        @else
                            <span>Selesai</span>
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="9" style="text-align: center;">Belum ada data transaksi peminjaman.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection