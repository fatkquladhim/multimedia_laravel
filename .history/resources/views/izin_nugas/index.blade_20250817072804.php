@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Data Izin Nugas</h1>
    <a href="{{ route('izin-nugas.create') }}" class="btn btn-primary mb-3">Tambah Izin Nugas</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Anggota</th>
                <th>Tanggal</th>
                <th>Alasan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($izin_nugas as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->id_anggota }}</td>
                <td>{{ $item->tanggal }}</td>
                <td>{{ $item->alasan }}</td>
                <td>
                    <a href="{{ route('izin-nugas.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('izin-nugas.destroy', $item->id) }}" method="POST" style="display:inline-block;">
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
