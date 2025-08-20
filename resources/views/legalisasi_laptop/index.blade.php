@php use Illuminate\Support\Str; @endphp
@extends('layouts.master')
@section('content')
<div class="container">
    <h1>Data Legalisasi Laptop</h1>
    <a href="{{ route('legalisasi-laptop.create') }}" class="btn btn-primary mb-3">Tambah Legalisasi</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Merk Laptop</th>
                <th>Tipe</th>
                <th>Serial Number</th>
                <th>Bukti</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($legalisasi as $key => $item)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ optional(App\Models\Anggota::find($item->id_anggota))->nama }}</td>
                <td>{{ $item->merk }}</td>
                <td>{{ $item->tipe }}</td>
                <td>{{ $item->serial_number }}</td>
                                <td>
                                      @if($item->file_bukti)
                                        @if(Str::endsWith(strtolower($item->file_bukti), ['jpg','jpeg','png']))
                                            <a href="{{ asset('storage/' . $item->file_bukti) }}" target="_blank">
                                                <img src="{{ asset('storage/' . $item->file_bukti) }}" alt="Bukti" width="50">
                                            </a>
                                        @elseif(Str::endsWith(strtolower($item->file_bukti), ['pdf']))
                                            <a href="{{ asset('storage/' . $item->file_bukti) }}" target="_blank">Lihat PDF</a>
                                        @else
                                            <a href="{{ asset('storage/' . $item->file_bukti) }}" target="_blank">Download</a>
                                        @endif
                                    @else
                                        -
                                    @endif
                                </td>
                <td>{{ $item->status }}</td>
                <td>
                    <a href="{{ route('legalisasi-laptop.show', $item->id) }}" class="btn btn-info btn-sm">Lihat</a>
                    <a href="{{ route('legalisasi-laptop.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('legalisasi-laptop.destroy', $item->id) }}" method="POST" style="display:inline-block;">
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
@endsection
