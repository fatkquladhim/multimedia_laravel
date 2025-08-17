@extends('layouts.master')
@section('content')
<h1>Detail Akses</h1>
<p>ID: {{ $akses->id ?? '' }}</p>
<p>Nama: {{ $akses->nama ?? '' }}</p>
<a href="{{ route('akses.index') }}" class="btn btn-secondary">Kembali</a>
@endsection
