@extends('layouts.master')
@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-primary text-white d-flex align-items-center">
                    <i class="fa fa-user-circle fa-2x me-3"></i>
                    <h4 class="mb-0">Detail Anggota</h4>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-4 text-center">
                            <img src="https://ui-avatars.com/api/?name={{ urlencode($anggota->nama) }}&background=0D8ABC&color=fff&size=128" class="rounded-circle shadow" alt="Avatar" width="120" height="120">
                        </div>
                        <div class="col-md-8">
                            <h3 class="fw-bold mb-1">{{ $anggota->nama }}</h3>
                            <span class="badge bg-info text-dark mb-2">{{ $anggota->divisi }}</span>
                            <p class="mb-2"><i class="fa fa-envelope me-2"></i> <b>Email:</b> {{ $anggota->email }}</p>
                            <p class="mb-2"><i class="fa fa-id-badge me-2"></i> <b>ID Anggota:</b> {{ $anggota->id }}</p>
                            <p class="mb-2"><i class="fa fa-user me-2"></i> <b>ID User:</b> {{ $anggota->id_user }}</p>
                            <p class="mb-2"><i class="fa fa-calendar me-2"></i> <b>Dibuat:</b> {{ $anggota->created_at->format('d M Y H:i') }}</p>
                            <p class="mb-2"><i class="fa fa-calendar-check me-2"></i> <b>Update Terakhir:</b> {{ $anggota->updated_at->format('d M Y H:i') }}</p>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-white border-0 text-end">
                    <a href="{{ route('anggota.index') }}" class="btn btn-secondary"><i class="fa fa-arrow-left me-1"></i> Kembali</a>
                    <a href="{{ route('anggota.edit', $anggota->id) }}" class="btn btn-primary"><i class="fa fa-edit me-1"></i> Edit</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
