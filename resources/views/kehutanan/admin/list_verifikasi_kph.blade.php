@extends('master')
@section('title','VERIFIKASI KPH')
@section('content')

<div class="row">
	<div class="col">
		<div class="card">
			<div class="card-header bg-primary">Perhutanan Sosial</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-striped" id="example1">
						<thead class="text-center">
							<th>No</th>
							<th>Nama Kelompok</th>
							<th>Luas (Ha)</th>
							<th>Alamat</th>
							<th>Kabupaten / Kota</th>
							<th>Kecamatan</th>
							<th>Kelurahan / Desa</th>
							<th>Aksi</th>
						</thead>
						<tbody>
							@php
							$no = 1;
							@endphp
							@foreach($ps as $p)
							<tr>
								<td class="text-center">{{$no++}}</td>
								<td>{{$p->nama_kelompok}}</td>
								<td class="text-center">{{$p->luas}}</td>
								<td>{{$p->alamat}}</td>
								<td class="text-center">{{$p->kabupaten}}</td>
								<td class="text-center">{{$p->kecamatan}}</td>
								<td class="text-center">{{$p->kelurahan}}</td>
								<td>
									<a target="_blank" href="https://www.google.com/maps/?q={{$p->lat}},{{$p->lng}}">
										<button class="btn btn-xs btn-block btn-warning"><i class="fa fa-map-pin mr-2"></i>Tinjai Lokasi</button>
									</a>
									<a href="{{url('verifikasi_kph')}}/{{$p->id_perhutanan_sosial}}">
										<button class="btn btn-xs btn-block btn-primary"><i class="fa fa-check mr-2"></i>Proses Verifikasi</button>
									</a>
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

<div class="row">
	<div class="col">
		<div class="card">
			<div class="card-header bg-primary">Rehabilitasi Hutan dan Lahan</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-striped" id="example2">
						<thead class="text-center">
							<th>No</th>
							<th>Nama Kelompok</th>
							<th>Luas (Ha)</th>
							<th>Alamat</th>
							<th>Kabupaten / Kota</th>
							<th>Kecamatan</th>
							<th>Kelurahan / Desa</th>
							<th>Aksi</th>
						</thead>
						<tbody>
							@php
							$no = 1;
							@endphp
							@foreach($rhl as $p)
							<tr>
								<td class="text-center">{{$no++}}</td>
								<td>{{$p->nama_kelompok}}</td>
								<td class="text-center">{{$p->luas}}</td>
								<td>{{$p->alamat}}</td>
								<td class="text-center">{{$p->kabupaten}}</td>
								<td class="text-center">{{$p->kecamatan}}</td>
								<td class="text-center">{{$p->kelurahan}}</td>
								<td>
									<a target="_blank" href="https://www.google.com/maps/?q={{$p->lat}},{{$p->lng}}">
										<button class="btn btn-xs btn-block btn-warning"><i class="fa fa-map-pin mr-2"></i>Tinjai Lokasi</button>
									</a>
									<a href="{{url('verifikasi_rhl_kph')}}/{{$p->id_rhl}}">
										<button class="btn btn-xs btn-block btn-primary"><i class="fa fa-check mr-2"></i>Proses Verifikasi</button>
									</a>
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

@endsection