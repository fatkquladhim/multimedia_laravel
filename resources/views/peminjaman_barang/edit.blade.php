@extends('layouts.master')
@section('content')
<div class="container">
    <h1>Edit Peminjaman Barang</h1>
    <form action="{{ route('peminjaman-barang.update', $peminjaman->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="id_anggota" class="form-label">ID Anggota</label>
            <input type="text" name="id_anggota" class="form-control" value="{{ $peminjaman->id_anggota }}" required>
        </div>
        <div class="mb-3">
            <label for="id_alat" class="form-label">ID Alat</label>
            <input type="text" name="id_alat" class="form-control" value="{{ $peminjaman->id_alat }}" required>
        </div>
        <div class="mb-3">
            <label for="tanggal_pinjam" class="form-label">Tanggal Pinjam</label>
            <input type="date" name="tanggal_pinjam" class="form-control" value="{{ $peminjaman->tanggal_pinjam }}" required>
        </div>
        <div class="mb-3">
            <label for="tanggal_kembali" class="form-label">Tanggal Kembali</label>
            <input type="date" name="tanggal_kembali" class="form-control" value="{{ $peminjaman->tanggal_kembali }}">
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <input type="text" name="status" class="form-control" value="{{ $peminjaman->status }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('peminjaman-barang.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
