@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Edit Legalisasi Laptop</h1>
    <form action="{{ route('legalisasi-laptop.update', $legalisasi->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="id_anggota" class="form-label">ID Anggota</label>
            <input type="text" name="id_anggota" class="form-control" value="{{ $legalisasi->id_anggota }}" required>
        </div>
        <div class="mb-3">
            <label for="merk" class="form-label">Merk</label>
            <input type="text" name="merk" class="form-control" value="{{ $legalisasi->merk }}" required>
        </div>
        <div class="mb-3">
            <label for="serial_number" class="form-label">Serial Number</label>
            <input type="text" name="serial_number" class="form-control" value="{{ $legalisasi->serial_number }}" required>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <input type="text" name="status" class="form-control" value="{{ $legalisasi->status }}">
        </div>
        <div class="mb-3">
            <label for="tanggal_legalisasi" class="form-label">Tanggal Legalisasi</label>
            <input type="date" name="tanggal_legalisasi" class="form-control" value="{{ $legalisasi->tanggal_legalisasi }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('legalisasi-laptop.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
