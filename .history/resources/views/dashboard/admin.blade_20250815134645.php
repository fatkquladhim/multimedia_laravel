@extends('layouts.')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-2xl font-bold mb-4">Dashboard Admin</h1>
    <div class="bg-white rounded shadow p-6">
        <p>Selamat datang, <span class="font-semibold">{{ Auth::user()->username }}</span>!</p>
        <p class="mt-2">Ini adalah halaman dashboard admin.</p>
        {{-- Tambahkan konten dashboard admin di sini --}}
    </div>
</div>
@endsection