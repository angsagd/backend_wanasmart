@extends('master')
@section('title','PERHUTANAN SOSIAL')
@section('content')

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header bg-primary">Riwayat Pengajuan</div>
			<div class="card-body">
				<a href="{{url('tambah_perhutanan_sosial')}}">
					<button class="btn btn-primary mb-4"><i class="fa fa-plus mr-2"></i>Pengajuan Perhutanan Sosial</button>
				</a>
				<div class="table-responsive">
				<table id="example1" class="table table-striped table-sm mt-4">
					<thead class="text-center">
						<th style="width:8%">No</th>
						<th>Nama Kelompok</th>
						<th>Alamat</th>
						<th>Luas</th>
						<th>Status</th>
						<th>Aksi</th>
					</thead>
					<tbody>
						@php
						$no = 1;
						@endphp
						@foreach($perhutanan_sosial as $ps)
						<tr>
							<td class="text-center">{{$no++}}</td>
							<td>{{$ps->nama_kelompok}}</td>
							<td>
								{{$ps->alamat}}<br>
								Kelurahan / Desa {{$ps->kelurahan}}<br>
								Kecamatan {{$ps->kecamatan}}<br>
								{{$ps->kabupaten}}
							</td>
							<td class="text-center">{{$ps->luas}} Ha</td>
							<td class="text-center">
								@if($ps->tercatat == 1)
								<span class="badge badge-info"><i class="fa fa-check mr-2"></i>Tercatat</span>
								@else
								<span class="badge badge-danger"><i class="fa fa-cross mr-2"></i>Tercatat</span>
								@endif
								<br>
								@if($ps->pemilahan_admin == 1)
								<span class="badge badge-info"><i class="fa fa-check mr-2"></i>Verifikasi Admin</span>
								@else
								<span class="badge badge-danger"><i class="fa fa-close mr-2"></i>Verifikasi Admin</span>
								@endif
								<br>
								@if($ps->verifikasi_kph == 1)
								<span class="badge badge-info"><i class="fa fa-check mr-2"></i>Verifikasi KPH</span>
								@else
								<span class="badge badge-danger"><i class="fa fa-close mr-2"></i>Verifikasi KPH</span>
								@endif
								<br>
								@if($ps->verifikasi_dklh == 1)
								<span class="badge badge-info"><i class="fa fa-check mr-2"></i>Verifikasi DKLH</span>
								@else
								<span class="badge badge-danger"><i class="fa fa-close mr-2"></i>Verifikasi DKLH</span>
								@endif
								<br>
								@if($ps->tayang == 1)
								<span class="badge badge-info"><i class="fa fa-check mr-2"></i>Tayang</span>
								@else
								<span class="badge badge-danger"><i class="fa fa-close mr-2"></i>Tayang</span>
								@endif
							</td>
							<td class="text-center">
								<div class="btn-group">
								  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Kelola</button>
								  <div class="dropdown-menu">
									<a class="dropdown-item" href="{{url('edit_perhutanan_sosial')}}/{{$ps->id_perhutanan_sosial}}">Sesuaikan Data</a>
									<a class="dropdown-item" href="{{url('foto_perhutanan_sosial')}}/{{$ps->id_perhutanan_sosial}}">
										Lihat Galeri
									</a>
									<a class="dropdown-item" href="{{url('potensi_hhbk')}}/{{$ps->id_perhutanan_sosial}}">
										Potensi HHBK
									</a>
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
</div>
@endsection