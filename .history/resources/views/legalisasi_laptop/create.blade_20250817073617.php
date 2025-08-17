@extends('layouts.master')
@section('content')
<div class="container">
    <h1>Tambah Legalisasi Laptop</h1>
    <form action="{{ route('legalisasi-laptop.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="id_anggota" class="form-label">ID Anggota</label>
            <input type="text" name="id_anggota" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="merk" class="form-label">Merk</label>
            <input type="text" name="merk" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="serial_number" class="form-label">Serial Number</label>
            <input type="text" name="serial_number" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <input type="text" name="status" class="form-control">
        </div>
        <div class="mb-3">
            <label for="tanggal_legalisasi" class="form-label">Tanggal Legalisasi</label>
            <input type="date" name="tanggal_legalisasi" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('legalisasi-laptop.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
