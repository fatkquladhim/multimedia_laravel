@extends('layouts.master')
@section('content')
<h1>Tambah Akses</h1>
<form action="{{ route('akses.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nama" class="form-label">Nama Akses</label>
        <input type="text" class="form-control" id="nama" name="nama" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
