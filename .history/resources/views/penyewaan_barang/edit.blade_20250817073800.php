@extends('layouts.master')
@section('content')
<div class="container">
    <h1>Edit Penyewaan Barang</h1>
    <form action="{{ route('penyewaan-barang.update', $penyewaan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="id_anggota" class="form-label">ID Anggota</label>
            <input type="text" name="id_anggota" class="form-control" value="{{ $penyewaan->id_anggota }}" required>
        </div>
        <div class="mb-3">
            <label for="id_alat" class="form-label">ID Alat</label>
            <input type="text" name="id_alat" class="form-control" value="{{ $penyewaan->id_alat }}" required>
        </div>
        <div class="mb-3">
            <label for="tanggal_sewa" class="form-label">Tanggal Sewa</label>
            <input type="date" name="tanggal_sewa" class="form-control" value="{{ $penyewaan->tanggal_sewa }}" required>
        </div>
        <div class="mb-3">
            <label for="tanggal_kembali" class="form-label">Tanggal Kembali</label>
            <input type="date" name="tanggal_kembali" class="form-control" value="{{ $penyewaan->tanggal_kembali }}">
        </div>
        <div class="mb-3">
            <label for="biaya" class="form-label">Biaya</label>
            <input type="number" name="biaya" class="form-control" value="{{ $penyewaan->biaya }}">
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <input type="text" name="status" class="form-control" value="{{ $penyewaan->status }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('penyewaan-barang.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
