@extends('layouts.master')
@section('content')
<h1>Tambah Portfolio</h1>
<form action="{{ route('portfolio.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nama" class="form-label">Nama Portfolio</label>
        <input type="text" class="form-control" id="nama" name="nama" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
