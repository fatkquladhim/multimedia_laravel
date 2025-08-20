@extends('layouts.master')
@section('content')
<div class="container">
    <h1>Tambah Izin nugas</h1>
    <form action="{{ route('izin-nugas.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="id_anggota" class="form-label">Nama Anggota</label>
            <select name="id_anggota" class="form-control" required>
                <option value="">-- Pilih Anggota --</option>
                @foreach($anggota as $a)
                    <option value="{{ $a->id }}">{{ $a->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="jam_izin" class="form-label">Jam Izin</label>
            <input type="time" name="jam_izin" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="jam_selesai_izin" class="form-label">Jam Kembali</label>
            <input type="time" name="jam_selesai_izin" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="alasan" class="form-label">Alasan</label>
            <textarea name="alasan" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('izin-nugas.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
