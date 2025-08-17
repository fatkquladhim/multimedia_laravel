@extends('layouts.master')
@section('content')
<div class="container">
    <h1>Data Anggota</h1>
    <a href="{{ route('anggota.create') }}" class="btn btn-primary mb-3">Tambah Anggota</a>
    <table class="table table-bordered">
         <thead>
                            <tr class="bg-gradient-to-r from-blue-50 to-purple-50">
                                <th class="px-3 py-2 md:px-6 md:py-4 text-left font-semibold text-gray-700 uppercase tracking-wider">No</th>
                                <th class="px-3 py-2 md:px-6 md:py-4 text-left font-semibold text-gray-700 uppercase tracking-wider">Nama</th>
                                <th class="px-3 py-2 md:px-6 md:py-4 text-left font-semibold text-gray-700 uppercase tracking-wider">Divisi</th>
                                <th class="px-3 py-2 md:px-6 md:py-4 text-center font-semibold text-gray-700 uppercase tracking-wider">Aksi</th>
                            </tr>
                        </thead>
        <tbody>
            @foreach($anggota as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->email }}</td>
                <td>
                    <a href="{{ route('anggota.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('anggota.destroy', $item->id) }}" method="POST" style="display:inline-block;">
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
