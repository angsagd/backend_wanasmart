@extends('master')
@section('title','REHABILITASI HUTAN DAN LAHAN')
@section('content')

<div class="row">
	<div class="col-sm-12">
		<div class="card">
			<div class="card-header bg-primary">Riwayat Pengajuan</div>
			<div class="card-body">
				<a href="{{url('tambah_rhl')}}">
					<button class="btn btn-primary mb-4"><i class="fa fa-plus mr-2"></i>Pengajuan RHL</button>
				</a>
				<div class="table-responsive">
					<table class="table table-striped" id="example1">
						<thead class="text-center">
							<th>No</th>
							<th>Nama</th>
							<th>Luas (Ha)</th>
							<th>Umur (Tahun)</th>
							<th>Alamat</th>
							<th>Kelurahan / Desa</th>
							<th>Kecamatan</th>
							<th>Kabupaten</th>
							<th>Status</th>
							<th>Aksi</th>
						</thead>
						<tbody>
							@php
								$no = 1;
							@endphp
							@foreach($rhl as $r)
							<tr class="text-center">
								<td>{{$no++}}</td>
								<td>{{$r->nama_kelompok}}</td>
								<td>{{$r->luas}}</td>
								<td>{{$r->umur}}</td>
								<td class="text-left">{{$r->alamat}}</td>
								<td>{{$r->kelurahan}}</td>
								<td>{{$r->kecamatan}}</td>
								<td>{{$r->kabupaten}}</td>
								<td>
									@if($r->tercatat == 1)
									<span class="badge badge-info"><i class="fa fa-check mr-2"></i>Tercatat</span>
									@else
									<span class="badge badge-danger"><i class="fa fa-cross mr-2"></i>Tercatat</span>
									@endif
									<br>
									@if($r->pemilahan_admin == 1)
									<span class="badge badge-info"><i class="fa fa-check mr-2"></i>Verifikasi Admin</span>
									@else
									<span class="badge badge-danger"><i class="fa fa-close mr-2"></i>Verifikasi Admin</span>
									@endif
									<br>
									@if($r->verifikasi_kph == 1)
									<span class="badge badge-info"><i class="fa fa-check mr-2"></i>Verifikasi KPH</span>
									@else
									<span class="badge badge-danger"><i class="fa fa-close mr-2"></i>Verifikasi KPH</span>
									@endif
									<br>
									@if($r->verifikasi_dklh == 1)
									<span class="badge badge-info"><i class="fa fa-check mr-2"></i>Verifikasi DKLH</span>
									@else
									<span class="badge badge-danger"><i class="fa fa-close mr-2"></i>Verifikasi DKLH</span>
									@endif
									<br>
									
								</td>
								<td>
									<a target="_blank" href="{{url('edit_rhl')}}/{{$r->id_rhl}}">
										<button class="btn btn-xs btn-block btn-primary"><i class="fa fa-edit mr-2"></i>Perbarui</button>
									</a>
									<a target="_blank" href="{{url('galeri_rhl')}}/{{$r->id_rhl}}">
										<button class="btn btn-xs btn-block btn-warning"><i class="fa fa-image mr-2"></i>Galeri</button>
									</a>
									<a target="_blank" href="{{url('history_catatan_rhl')}}/{{$r->id_rhl}}">
										<button class="btn btn-xs btn-block btn-success"><i class="fa fa-paper-plane mr-2"></i>History Catatan</button>
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