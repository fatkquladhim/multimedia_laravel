@extends('layouts.master')
@section('content')
<div class="container">
    <h1>Edit Anggota</h1>
    <form action="{{ route('anggota.update', $anggota->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $anggota->nama }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $anggota->email }}" required>
        </div>
        <div class="mb-3">
            <label for="divisi" class="form-label">Divisi</label>
            <input type="text" name="divisi" class="form-control" value="{{ $anggota->divisi }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('anggota.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@if(session('success'))
    <script src="{{  }}"></script>
    <script>swal('Berhasil', '{{ session('success') }}', 'success');</script>
@endif
@if(session('error'))
    <script src="{{  }}"></script>
    <script>swal('Gagal', '{{ session('error') }}', 'error');</script>
@endif
@if($errors->any())
    <script src="{{  }}"></script>
    <script>swal('Validasi Gagal', '{{ implode('\\n', $errors->all()) }}', 'warning');</script>
@endif
@endsection
