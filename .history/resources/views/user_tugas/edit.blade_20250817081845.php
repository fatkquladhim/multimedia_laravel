@extends('layouts.master')
@section('content')
<h1>Edit User Tugas</h1>
<form action="{{ route('user_tugas.update', $user_tugas->id ?? 1) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="user_id" class="form-label">User</label>
        <input type="text" class="form-control" id="user_id" name="user_id" value="{{ $user_tugas->user_id ?? '' }}" required>
    </div>
    <div class="mb-3">
        <label for="tugas_id" class="form-label">Tugas</label>
        <input type="text" class="form-control" id="tugas_id" name="tugas_id" value="{{ $user_tugas->tugas_id ?? '' }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
