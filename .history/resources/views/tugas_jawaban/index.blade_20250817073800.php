@extends('layouts.master')
@section('content')
<div class="container">
    <h1>Data Tugas Jawaban</h1>
    <a href="{{ route('tugas-jawaban.create') }}" class="btn btn-primary mb-3">Tambah Jawaban</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tugas</th>
                <th>Anggota</th>
                <th>Jawaban</th>
                <th>Nilai</th>
                <th>Catatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jawaban as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->id_tugas }}</td>
                <td>{{ $item->id_anggota }}</td>
                <td>{{ $item->jawaban }}</td>
                <td>{{ $item->nilai }}</td>
                <td>{{ $item->catatan }}</td>
                <td>
                    <a href="{{ route('tugas-jawaban.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('tugas-jawaban.destroy', $item->id) }}" method="POST" style="display:inline-block;">
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
