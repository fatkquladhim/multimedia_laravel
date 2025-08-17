@extends('layouts.master')
@section('content')
<h1>Data Akun</h1>
<a href="{{ route('akun.create') }}" class="btn btn-primary">Tambah Akun</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Akun</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        {{-- Loop data akun di sini --}}
    </tbody>
</table>
@endsection
