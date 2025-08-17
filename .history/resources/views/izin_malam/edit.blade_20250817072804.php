@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Edit Izin Malam</h1>
    <form action="{{ route('izin-malam.update', $izin_malam->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="id_anggota" class="form-label">ID Anggota</label>
            <input type="text" name="id_anggota" class="form-control" value="{{ $izin_malam->id_anggota }}" required>
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" value="{{ $izin_malam->tanggal }}" required>
        </div>
        <div class="mb-3">
            <label for="alasan" class="form-label">Alasan</label>
            <textarea name="alasan" class="form-control">{{ $izin_malam->alasan }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('izin-malam.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
