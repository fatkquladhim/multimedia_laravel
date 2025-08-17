@extends('layouts.master')
@section('content')
<h1>Edit Akses</h1>
<form action="{{ route('akses.update', $akses->id ?? 1) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="nama" class="form-label">Nama Akses</label>
        <input type="text" class="form-control" id="nama" name="nama" value="{{ $akses->nama ?? '' }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
