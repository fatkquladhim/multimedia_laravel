@extends('layouts.master')
@section('content')
<h1>Edit Akun</h1>
<form action="{{ route('akun.update', $akun->id ?? 1) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="nama" class="form-label">Nama Akun</label>
        <input type="text" class="form-control" id="nama" name="nama" value="{{ $akun->nama ?? '' }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
