@extends('layouts.master')
@section('content')
<div class="container">
    <h1>Tambah Anggota</h1>
    <form action="{{ route('anggota.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="divisi" class="form-label">Divisi</label>
            <input type="text" name="divisi" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('anggota.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@if(session('success'))
    <script src=""></script>
    <script>swal('Berhasil', '{{ session('success') }}', 'success');</script>
@endif
@if(session('error'))
    <script src="/assets/js/plugin/sweetalert/sweetalert.min.js"></script>
    <script>swal('Gagal', '{{ session('error') }}', 'error');</script>
@endif
@if($errors->any())
    <script src="/assets/js/plugin/sweetalert/sweetalert.min.js"></script>
    <script>swal('Validasi Gagal', '{{ implode('\\n', $errors->all()) }}', 'warning');</script>
@endif
@endsection
