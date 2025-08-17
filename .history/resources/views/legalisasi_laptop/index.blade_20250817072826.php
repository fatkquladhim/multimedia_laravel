@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Data Legalisasi Laptop</h1>
    <a href="{{ route('legalisasi-laptop.create') }}" class="btn btn-primary mb-3">Tambah Legalisasi</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Anggota</th>
                <th>Merk</th>
                <th>Serial Number</th>
                <th>Status</th>
                <th>Tanggal Legalisasi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($legalisasi as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->id_anggota }}</td>
                <td>{{ $item->merk }}</td>
                <td>{{ $item->serial_number }}</td>
                <td>{{ $item->status }}</td>
                <td>{{ $item->tanggal_legalisasi }}</td>
                <td>
                    <a href="{{ route('legalisasi-laptop.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('legalisasi-laptop.destroy', $item->id) }}" method="POST" style="display:inline-block;">
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
