@extends('layouts.master')
@section('content')
<div class="container">
    <h1>Edit Izin Malam</h1>
    <form action="{{ route('izin-malam.update', $izin_malam->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="id_anggota" class="form-label">Nama Anggota</label>
            <select name="id_anggota" class="form-control" required>
                <option value="">-- Pilih Anggota --</option>
                @foreach($anggota as $a)
                    <option value="{{ $a->id }}" {{ $izin_malam->id_anggota == $a->id ? 'selected' : '' }}>{{ $a->nama }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" value="{{ $izin_malam->tanggal }}" required>
        </div>
        <div class="mb-3">
            <label for="jam_izin" class="form-label">Jam Izin</label>
            <input type="time" name="jam_izin" class="form-control" value="{{ $izin_malam->jam_izin }}" required>
        </div>
        <div class="mb-3">
            <label for="jam_selesai_izin" class="form-label">Jam Kembali</label>
            <input type="time" name="jam_selesai_izin" class="form-control" value="{{ $izin_malam->jam_selesai_izin }}" required>
        </div>
        <div class="mb-3">
            <label for="alasan" class="form-label">Alasan</label>
            <textarea name="alasan" class="form-control" required>{{ $izin_malam->alasan }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('izin-malam.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
