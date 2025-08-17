@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Data Keuangan</h1>
    <a href="{{ route('keuangan.create') }}" class="btn btn-primary mb-3">Tambah Keuangan</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tanggal</th>
                <th>Keterangan</th>
                <th>Pemasukan</th>
                <th>Pengeluaran</th>
                <th>Saldo</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($keuangan as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->tanggal }}</td>
                <td>{{ $item->keterangan }}</td>
                <td>{{ $item->pemasukan }}</td>
                <td>{{ $item->pengeluaran }}</td>
                <td>{{ $item->saldo }}</td>
                <td>
                    <a href="{{ route('keuangan.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('keuangan.destroy', $item->id) }}" method="POST" style="display:inline-block;">
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
