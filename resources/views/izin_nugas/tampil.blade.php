@extends('layouts.master')
@section('content')
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">izin Nugas</h3>
            <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                    <a href="#">
                        <i class="icon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">izin nugas anggota</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">contoh</a>
                </li>
            </ul>
        </div>
        <div class="page-inner">
            <div class="card card-pricing card-pricing-focus card-primary">
                <div class="card-header">
                    <h4 class="card-title">Detail Anggota Izin</h4>
                    <div class="card-price">
                    <span class="price">{{ optional(App\Models\Anggota::find($izin_nugas->id_anggota))->nama }}</span>
                </div>
            </div>
            <div class="card-body">
                <ul class="specification-list">
                    <li>
                        <span class="name-specification">Tanggal Izin</span>
                        <span class="status-specification">{{ $izin_nugas->tanggal }}</span>
                    </li>
                    <li>
                        <span class="name-specification">Jam Izin</span>
                        <span class="status-specification">{{ $izin_nugas->jam_izin }}</span>
                    </li>
                    <li>
                        <span class="name-specification">Jam Kembali</span>
                        <span class="status-specification">{{ $izin_nugas->jam_selesai_izin }}</span>
                    </li>
                    <li>
                        <span class="name-specification">Alasan</span>
                        <span class="status-specification">{{ $izin_nugas->alasan }}</span>
                    </li>
                    <li>
                        <span class="name-specification">Status</span>
                        <span class="status-specification">{{ $izin_nugas->status ?? 'Belum ada status' }}</span>
                    </li>
                </ul>
            </div>
            <div class="card-footer">
                <a href="{{ route('izin-nugas.index') }}" class="btn btn-light w-100">
                    <b>Kembali</b>
                </a>
            </div>
        </div>
    </div>
@endsection
