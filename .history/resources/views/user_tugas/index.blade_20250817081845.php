@extends('layouts.master')
@section('content')
<h1>Data User Tugas</h1>
<a href="{{ route('user_tugas.create') }}" class="btn btn-primary">Tambah User Tugas</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama User</th>
            <th>Nama Tugas</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        {{-- Loop data user tugas di sini --}}
    </tbody>
</table>
@endsection
