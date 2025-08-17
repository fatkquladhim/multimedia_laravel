@extends('layouts.master')
@section('content')
<div class="container">
    <h1>Data Penyewaan Barang</h1>
    <a href="{{ route('penyewaan-barang.create') }}" class="btn btn-primary mb-3">Tambah Penyewaan</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Anggota</th>
                <th>Alat</th>
                <th>Tanggal Sewa</th>
                <th>Tanggal Kembali</th>
                <th>Biaya</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($penyewaan as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->id_anggota }}</td>
                <td>{{ $item->id_alat }}</td>
                <td>{{ $item->tanggal_sewa }}</td>
                <td>{{ $item->tanggal_kembali }}</td>
                <td>{{ $item->biaya }}</td>
                <td>{{ $item->status }}</td>
                <td>
                    <a href="{{ route('penyewaan-barang.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('penyewaan-barang.destroy', $item->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
