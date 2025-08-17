@extends('layouts.master')
@section('content')
<h1>Data Akses</h1>
<a href="{{ route('akses.create') }}" class="btn btn-primary">Tambah Akses</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Akses</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        {{-- Loop data akses di sini --}}
    </tbody>
</table>
@endsection
