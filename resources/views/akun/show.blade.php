@extends('layouts.master')
@section('content')
<h1>Detail Akun</h1>
<p>ID: {{ $akun->id ?? '' }}</p>
<p>Nama: {{ $akun->nama ?? '' }}</p>
<a href="{{ route('akun.index') }}" class="btn btn-secondary">Kembali</a>
@endsection
