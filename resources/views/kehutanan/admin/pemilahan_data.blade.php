@extends('master')
@section('title','PEMILAHAN DATA')
@section('content')
<div class="row">
	<div class="col-sm-12 col-md-6">
		<div class="card">
			<div class="card-header bg-primary">Data Perhutanan Sosial</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-striped" id="example1">
						<thead class="text-center">
							<th>No</th>
							<th>Nama Kelompok</th>
							<th>Aksi</th>
						</thead>
						<tbody>
							@php
								$no = 1;
							@endphp
							@foreach($perhutanan as $p)
							<tr>
								<td class="text-center">{{$no++}}</td>
								<td>
									{{$p->nama_kelompok}}<br>
									{{$p->alamat}}<br>
									Kelurahan / Desa {{$p->kelurahan}}<br>
									Kecamatan {{$p->kecamatan}}<br>
									{{$p->kabupaten}}
								</td>
								<td class="text-center">
									<div class="btn-group">
									  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Kelola</button>
									  <div class="dropdown-menu">
										<a class="dropdown-item" target="_blank" href="https://www.google.com/maps/?q={{$p->lat}},{{$p->lng}}">Tinjau Lokasi</a>
										<a class="dropdown-item" href="{{url('verifikasi_admin')}}/{{$p->id_perhutanan_sosial}}">Verifikasi</a>
									  </div>
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

	<div class="col-sm-12 col-md-6">
		<div class="card">
			<div class="card-header bg-primary">Data Rehabilitasi Hutan Lahan</div>
			<div class="card-body"></div>
		</div>
	</div>
</div>

@endsection