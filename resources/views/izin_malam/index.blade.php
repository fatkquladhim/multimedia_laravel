@extends('layouts.master')
@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Izin Anggota</h3>
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
                    <a href="#">Daftar Izin Anggota Multimedia</a>
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
                        <h4 class="card-title mb-0">Daftar Izin Anggota Multimedia</h4>
                        <a href="{{ route('izin-malam.create') }}" class="btn btn-primary">Tambah Izin</a>
                    </div>
                </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table id="multi-filter-select" class="display table table-striped table-hover">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Nama Anggota</th>
                            <th>Tanggal</th>
                            <th>Jam Izin</th>
                            <th>Jam Kembali</th>
                            <th>Alasan</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                           @foreach($izin_malam as $key => $item)
                          <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ optional(App\Models\Anggota::find($item->id_anggota))->nama }}</td>
                            <td>{{ $item->tanggal }}</td>
                            <td>{{ $item->jam_izin }}</td>
                            <td>{{ $item->jam_selesai_izin }}</td>
                            <td>{{ $item->alasan }}</td>
                            <td>
                              <a href="{{ route('izin-malam.show', $item->id) }}" class="btn btn-info btn-sm">Lihat</a>
                              <a href="{{ route('izin-malam.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                              <form action="{{ route('izin-malam.destroy', $item->id) }}" method="POST" style="display:inline;">
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
</div>
@endsection
