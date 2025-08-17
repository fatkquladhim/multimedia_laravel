@extends('layouts.master')
@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        @foreach($profiles as $item)
        <div class="col-md-6 col-lg-5 mb-4">
            <div class="card shadow-lg border-0 p-4 text-center" style="background: #fff; border-radius: 18px;">
                <h2 class="fw-bold mb-3 mt-2">Detail Profil</h2>
                <img src="{{ $item->foto ? asset('uploads/profiles/'.$item->foto) : 'https://ui-avatars.com/api/?name='.urlencode($item->nama_lengkap).'&background=0D8ABC&color=fff&size=128' }}" class="rounded-circle shadow mb-3" alt="Foto Profil" width="120" height="120">
                <div class="text-start mx-auto" style="max-width:320px;">
                    <p class="mb-2"><b>Nama Lengkap:</b> {{ $item->nama_lengkap }}</p>
                    <p class="mb-2"><b>Email:</b> {{ $item->email }}</p>
                    <p class="mb-2"><b>Kelas:</b> {{ $item->kelas }}</p>
                    <p class="mb-4"><b>Kamar:</b> {{ $item->kamar }}</p>
                </div>
                <a href="{{ route('profile.edit', $item->id) }}" class="btn btn-primary px-4 mb-2">Edit Profil</a>
                <form action="{{ route('profile.destroy', $item->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger px-4">Hapus Profil</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
