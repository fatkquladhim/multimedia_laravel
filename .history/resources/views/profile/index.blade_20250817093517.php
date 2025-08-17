@extends('layouts.master')
@section('content')
<div class="container">
    <h1>Data Profile</h1>
    <a href="{{ route('profile.create') }}" class="btn btn-primary mb-3">Tambah Profile</a>
    <table class="table table-bordered">
        
        <tbody>
            @foreach($profiles as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->id_anggota }}</td>
                <td>{{ $item->foto }}</td>
                <td>{{ $item->bio }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->no_hp }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->tanggal_lahir }}</td>
                <td>
                    <a href="{{ route('profile.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('profile.destroy', $item->id) }}" method="POST" style="display:inline-block;">
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
