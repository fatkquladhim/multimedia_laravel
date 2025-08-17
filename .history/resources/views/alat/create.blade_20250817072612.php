@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Tambah Alat</h1>
    <form action="{{ route('alat.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Alat</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan</label>
            <textarea name="keterangan" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('alat.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
