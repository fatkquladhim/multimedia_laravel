@extends('layouts.master')
@section('content')
<div class="container">
    <h1>Edit Profile</h1>
    <form action="{{ route('profile.update', $profile->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" class="form-control" value="{{ $profile->nama_lengkap }}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $profile->email }}">
        </div>
        <div class="mb-3">
            <label for="kelas" class="form-label">Kelas</label>
            <input type="text" name="kelas" class="form-control" value="{{ $profile->kelas }}">
        </div>
        <div class="mb-3">
            <label for="kamar" class="form-label">Kamar</label>
            <input type="text" name="kamar" class="form-control" value="{{ $profile->kamar }}">
        </div>
        <div class="mb-3">
            <label for="foto" class="form-label">Foto (opsional, url/gambar)</label>
            <input type="file" name="foto" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('profile.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
