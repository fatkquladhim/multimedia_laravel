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
            <div class="col-12 mb-4 d-flex justify-content-between align-items-center">
                <div>
                    <h2 class="fw-bold text-primary mb-0">Daftar Anggota</h2>
                    <div class="text-muted">Kelola data anggota dengan mudah dan efisien</div>
                </div>
                <a href="{{ route('anggota.create') }}" class="btn btn-primary btn-lg shadow-sm">
                    <i class="fa fa-plus"></i> Tambah Anggota
                </a>
            </div>
            @php
                $grouped = $anggota->groupBy('divisi');
                $divisiList = $grouped->keys()->values();
            @endphp
            @foreach($divisiList as $divisi)
                <div class="col-md-6">
                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-white border-0">
                            <h5 class="fw-bold mb-0"><i class="fa fa-users text-primary"></i> Data Anggota {{ ucfirst($divisi) }}</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Divisi</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($grouped[$divisi] as $i => $item)
                                            <tr>
                                                <td>{{ $i + 1 }}</td>
                                                <td>{{ $item->nama }}</td>
                                                <td>{{ $item->divisi }}</td>
                                                <td>
                                                    <div class="form-button-action d-flex justify-content-center gap-2">
                                                        <a href="{{ route('anggota.show', $item->id) }}" class="btn btn-sm btn-outline-info"> <i class="fa fa-eye"></i> Detail</a>
                                                        <a href="{{ route('anggota.edit', $item->id) }}" class="btn btn-sm btn-outline-primary"> <i class="fa fa-edit"></i> Edit</a>
                                                        <form action="{{ route('anggota.destroy', $item->id) }}" method="POST" style="display:inline-block;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Yakin hapus?')"><i class="fa fa-trash"></i> Hapus</button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
           </     



    @if (session('success'))
        <script src="https://cdn.jsdelivr.net/npm/sweetalert@2.1.2/dist/sweetalert.min.js"></script>
        <script>
            swal('Berhasil', '{{ session('success') }}', 'success');
        </script>
    @endif
    @if (session('error'))
        <script src="https://cdn.jsdelivr.net/npm/sweetalert@2.1.2/dist/sweetalert.min.js"></script>
        <script>
            swal('Gagal', '{{ session('error') }}', 'error');
        </script>
    @endif
    @if ($errors->any())
        <script src="https://cdn.jsdelivr.net/npm/sweetalert@2.1.2/dist/sweetalert.min.js"></script>
        <script>
            swal('Validasi Gagal', `{!! implode('\\n', $errors->all()) !!}`, 'warning');
        </script>
    @endif
@endsection
