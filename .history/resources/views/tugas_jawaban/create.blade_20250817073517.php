@extends('layouts.master')
@section('content')
<div class="container">
    <h1>Tambah Jawaban Tugas</h1>
    <form action="{{ route('tugas-jawaban.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="id_tugas" class="form-label">ID Tugas</label>
            <input type="text" name="id_tugas" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="id_anggota" class="form-label">ID Anggota</label>
            <input type="text" name="id_anggota" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="jawaban" class="form-label">Jawaban</label>
            <textarea name="jawaban" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label for="nilai" class="form-label">Nilai</label>
            <input type="number" name="nilai" class="form-control">
        </div>
        <div class="mb-3">
            <label for="catatan" class="form-label">Catatan</label>
            <textarea name="catatan" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('tugas-jawaban.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
