@extends('layouts.master')
@section('content')
<div class="container">
    <h1>Edit Alat</h1>
    <form action="{{ route('alat.update', $alat->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Alat</label>
            <input type="text" name="nama" class="form-control" value="{{ $alat->nama }}" required>
        </div>
        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan</label>
            <textarea name="keterangan" class="form-control">{{ $alat->keterangan }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('alat.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
