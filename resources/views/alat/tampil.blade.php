@extends('layouts.master')
@section('content')
		<div class="page-inner">
				<div class="page-header">
						<h3 class="fw-bold mb-3">Detail Alat</h3>
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
										<a href="#">detail</a>
								</li>
						</ul>
				</div>
				<div class="row">
						<div class="card">
									<div class="card-header">
										<h4 class="card-title">Detail Alat</h4>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered">
												<tr>
													<th>Nama Alat</th>
													<td>{{ $alat->nama_alat }}</td>
												</tr>
												<tr>
													<th>Jumlah</th>
													<td>{{ $alat->jumlah }}</td>
												</tr>
												<tr>
													<th>Kondisi</th>
													<td>{{ $alat->kondisi }}</td>
												</tr>
												<tr>
													<th>Kelompok</th>
													<td>{{ $alat->kelompok }}</td>
												</tr>
												<tr>
													<th>Milik</th>
													<td>{{ $alat->milik }}</td>
												</tr>
											</table>
											<a href="{{ route('alat.index') }}" class="btn btn-secondary">Kembali</a>
											<a href="{{ route('alat.edit', $alat->id) }}" class="btn btn-warning">Edit</a>
										</div>
									</div>
								</div>
				</div>
		</div>
@endsection
