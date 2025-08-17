@extends('layouts.master')
@section('content')
<h1>Detail User Tugas</h1>
<p>ID: {{ $user_tugas->id ?? '' }}</p>
<p>User: {{ $user_tugas->user_id ?? '' }}</p>
<p>Tugas: {{ $user_tugas->tugas_id ?? '' }}</p>
<a href="{{ route('user_tugas.index') }}" class="btn btn-secondary">Kembali</a>
@endsection
