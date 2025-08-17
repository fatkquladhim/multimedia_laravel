@extends('layouts.master')
@section('content')
<h1>Tambah Akun</h1>
<form action="{{ route('akun.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nama" class="form-label">Nama Akun</label>
        <input type="text" class="form-control" id="nama" name="nama" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
