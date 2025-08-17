@extends('layouts.master')
@section('content')
<h1>Detail Portfolio</h1>
<p>ID: {{ $portfolio->id ?? '' }}</p>
<p>Nama: {{ $portfolio->nama ?? '' }}</p>
<a href="{{ route('portfolio.index') }}" class="btn btn-secondary">Kembali</a>
@endsection
