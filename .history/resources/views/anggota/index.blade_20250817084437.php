@extends('layouts.master')
@section('content')
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Anggota Multimedia</h3>
            <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                    <a href="{{ url('/') }}">
                        <i class="icon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Anggota Multimedia</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-12 mb-3">
                <a href="{{ route('anggota.create') }}" class="btn btn-primary btn-round float-end">
                    <i class="fa fa-plus"></i> Tambah Anggota
                </a>
            </div>
            @php
                $grouped = $anggota->groupBy('divisi');
            @endphp
            @foreach($grouped as $divisi => $list)
                <div class="col-12">
                    <h4 class="fw-bold mt-4 mb-3">Divisi: {{ $divisi ?: 'Tanpa Divisi' }}</h4>
                </div>
                @foreach($list->chunk(2) as $row)
                    <div class="row mb-3">
                        @foreach($row as $item)
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-1">{{ $item->nama }}</h5>
                                    <p class="mb-1"><b>Email:</b> {{ $item->email }}</p>
                                    <p class="mb-2"><b>Divisi:</b> {{ $item->divisi }}</p>
                                    <a href="{{ route('anggota.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('anggota.destroy', $item->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>
@endsection
