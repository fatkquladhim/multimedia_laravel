@extends('layouts.master')
@section('content')
<h1>Edit Portfolio</h1>
<form action="{{ route('portfolio.update', $portfolio->id ?? 1) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="nama" class="form-label">Nama Portfolio</label>
        <input type="text" class="form-control" id="nama" name="nama" value="{{ $portfolio->nama ?? '' }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
