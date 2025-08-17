@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Tambah Peminjaman Barang</h1>
    <form action="{{ route('peminjaman-barang.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="id_anggota" class="form-label">ID Anggota</label>
            <input type="text" name="id_anggota" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="id_alat" class="form-label">ID Alat</label>
            <input type="text" name="id_alat" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="tanggal_pinjam" class="form-label">Tanggal Pinjam</label>
            <input type="date" name="tanggal_pinjam" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="tanggal_kembali" class="form-label">Tanggal Kembali</label>
            <input type="date" name="tanggal_kembali" class="form-control">
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <input type="text" name="status" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('peminjaman-barang.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
