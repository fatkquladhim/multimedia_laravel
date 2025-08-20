@extends('layouts.master')
@section('content')
<div class="container">
	<div class="page-inner">
		<div class="card-header">
			
    </div>
    <div class="card-body">
        
    </div>
</div>
</div>



<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Detail Legalisasi Laptop</h3>
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
                <a href="{{ route('legalisasi-laptop.index') }}">Legalitas Laptop</a>
            </li>
            <li class="separator">
                <i class="icon-arrow-right"></i>
            </li>
            <li class="nav-item">
                <a href="#">Detail</a>
            </li>
        </ul>
        </div>
        <div class="row">
            <div>
                  <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <div class="card" style="max-width:600px; width:100%; margin:auto;">
                            @php use Illuminate\Support\Str; @endphp
                            @if($legalisasi->file_bukti)
                                @if(Str::endsWith(strtolower($legalisasi->file_bukti), ['jpg','jpeg','png']))
                                    <div class="d-flex justify-content-center my-3">
                                        <img src="{{ asset('storage/' . $legalisasi->file_bukti) }}" alt="Bukti Legalisasi" class="img-fluid" />
                                    </div>
                                @elseif(Str::endsWith(strtolower($legalisasi->file_bukti), ['pdf']))
                                    <div class="text-center my-3">
                                        <a href="{{ asset('storage/' . $legalisasi->file_bukti) }}" target="_blank" class="btn btn-primary">
                                            <i class="fas fa-file-pdf"></i> Lihat Bukti PDF
                                        </a>
                                    </div>
                                @else
                                    <div class="text-center my-3">
                                        <a href="{{ asset('storage/' . $legalisasi->file_bukti) }}" target="_blank" class="btn btn-secondary">
                                            <i class="fas fa-download"></i> Download Bukti
                                        </a>
                                    </div>
                                @endif
                            @else
                                <img class="card-img-top rounded-top " src="{{ asset('assets/img/default-laptop.jpg') }}" alt="Default Image"/>
                            @endif
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="info-post ms-2">
                                        <p class="username fw-bold mb-0">{{ optional(App\Models\Anggota::find($legalisasi->id_anggota))->nama ?? '-' }}</p>
                                        <p class="date text-muted small mb-0">{{ $legalisasi->created_at ? $legalisasi->created_at->format('d M y') : '-' }}</p>
                                    </div>
                                </div>
                                <div class="separator-solid my-2"></div>
                                <p class="card-category text-info mb-1">
                                    <a href="#" class="text-decoration-none">{{ $legalisasi->merk }}</a>
                                </p>
                                <h5 class="card-title mb-2">
                                    <a href="#" class="text-dark text-decoration-none">Tipe: {{ $legalisasi->tipe }}</a>
                                </h5>
                                <p class="card-text mb-2">
                                    <strong>Serial Number:</strong> {{ $legalisasi->serial_number }}<br>
                                    <strong>Status:</strong> <span class="badge bg-{{ $legalisasi->status == 'Disetujui' ? 'success' : ($legalisasi->status == 'Ditolak' ? 'danger' : 'warning') }}">{{ $legalisasi->status }}</span>
                                </p>
                                <div class="text-center mt-3">
                                    <a href="{{ route('legalisasi-laptop.index') }}" class="btn btn-secondary btn-rounded btn-sm px-4">
                                        <i class="fas fa-arrow-left"></i> Kembali
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
        </div>
    </div>
</div>
@endsection
