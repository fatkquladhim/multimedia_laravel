@extends('layouts.master')
@section('content')
<div class="container">
    <h1>Edit Legalisasi Laptop</h1>
    <form action="{{ route('legalisasi-laptop.update', $legalisasi->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="id_anggota" class="form-label">Nama Anggota</label>
            <select name="id_anggota" class="form-control" required>
                <option value="">-- Pilih Anggota --</option>
                @foreach($anggota as $a)
                    <option value="{{ $a->id }}" {{ $legalisasi->id_anggota == $a->id ? 'selected' : '' }}>
                        {{ $a->nama }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="merk" class="form-label">Merk Laptop</label>
            <input type="text" name="merk" class="form-control" value="{{ $legalisasi->merk }}" required>
        </div>
        <div class="mb-3">
            <label for="tipe" class="form-label">Tipe</label>
            <input type="text" name="tipe" class="form-control" value="{{ $legalisasi->tipe }}" required>
        </div>
        <div class="mb-3">
            <label for="serial_number" class="form-label">Serial Number</label>
            <input type="text" name="serial_number" class="form-control" value="{{ $legalisasi->serial_number }}" required>
        </div>
        <div class="mb-3">
            <label for="bukti" class="form-label">Bukti</label>
            <input type="file" name="bukti" class="form-control">
            @if($legalisasi->bukti)
                <a href="{{ asset('storage/' . $legalisasi->bukti) }}" target="_blank">Lihat Bukti</a>
            @endif
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <input type="text" name="status" class="form-control" value="{{ $legalisasi->status }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('legalisasi-laptop.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
