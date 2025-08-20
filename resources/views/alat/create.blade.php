@extends('layouts.master')
@section('content')
<div class="container">
    <h1>Tambah Alat</h1>
    <form action="{{ route('alat.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama_alat" class="form-label">Nama Alat</label>
            <input type="text" name="nama_alat" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="number" name="jumlah" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="kondisi" class="form-label">Kondisi</label>
            <input type="text" name="kondisi" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="kelompok" class="form-label">Kelompok</label>
            <input type="text" name="kelompok" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="milik" class="form-label">Milik</label>
            <input type="text" name="milik" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('alat.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@if(session('success'))
    <script src="{{ asset('/js/plugin/sweetalert/sweetalert.min.js') }}"></script>
    <script>swal('Berhasil', '{{ session('success') }}', 'success');</script>
@endif
@if(session('error'))
    <script src="{{ asset('/js/plugin/sweetalert/sweetalert.min.js') }}"></script>
    <script>swal('Gagal', '{{ session('error') }}', 'error');</script>
@endif
@if($errors->any())
    <script src="{{ asset('/js/plugin/sweetalert/sweetalert.min.js') }}"></script>
    <script>swal('Validasi Gagal', '{{ implode('\\n', $errors->all()) }}', 'warning');</script>
@endif
@endsection
