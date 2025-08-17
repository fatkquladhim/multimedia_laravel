@extends('layouts.master')
@section('content')
<h1>Data Portfolio</h1>
<a href="{{ route('portfolio.create') }}" class="btn btn-primary">Tambah Portfolio</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Portfolio</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        {{-- Loop data portfolio di sini --}}
    </tbody>
</table>
@endsection
