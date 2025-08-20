@extends('layouts.master')
@section('content')
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">alat</h3>
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
                    <a href="#">alat multimedia</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">contoh</a>
                </li>
            </ul>
            
        </div>
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="card-title mb-0">Daftar Alat Multimedia</h4>
                        <a href="{{ route('alat.create') }}" class="btn btn-primary">Tambah Alat</a>
                    </div>
                </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table id="multi-filter-select" class="display table table-striped table-hover">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Nama Alat</th>
                            <th>Jumlah</th>
                            <th>Kondisi</th>
                            <th>Kelompok</th>
                            <th>Milik</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($alat as $key => $item)
                          <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $item->nama_alat }}</td>
                            <td>{{ $item->jumlah }}</td>
                            <td>{{ $item->kondisi }}</td>
                            <td>{{ $item->kelompok }}</td>
                            <td>{{ $item->milik }}</td>
                            <td>
                              <a href="{{ route('alat.show', $item->id) }}" class="btn btn-info btn-sm">Lihat</a>
                              <a href="{{ route('alat.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                              <form action="{{ route('alat.destroy', $item->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                              </form>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
        </div>
    </div>
    @if(session('success'))
    <script src="{{ asset('/js/plugin/sweetalert/sweetalert.min.js') }}"></script>
    <script>swal('Berhasil', '{{ session('success') }}', 'success');</script>
    @endif
    @if(session('error'))
        <script src="{{ asset('/js/plugin/sweetalert/sweetalert.min.js') }}"></script>
        <script>swal('Gagal', '{{ session('error') }}', 'error');</script>
    @endif
    @if($errors->any())
        <script src="{{ asset('/js/plugin/sweetalert/sweetalert.min.js') }}"></script>
        <script>swal('Validasi Gagal', '{{ implode('\\n', $errors->all()) }}', 'warning');</script>
    @endif
@endsection
