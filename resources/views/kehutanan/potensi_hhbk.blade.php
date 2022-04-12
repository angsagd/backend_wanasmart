@extends('master')
@section('title','POTENSI HHBK '.strtoupper($perhutanan_sosial->nama_kelompok) )
@section('content')

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header bg-primary">Tambahkan Potensi HHBK</div>
			<div class="card-body">
				<form action="{{url('simpan_hhbk')}}" method="post">
					@csrf
					<input type="hidden" name="id_perhutanan_sosial" value="{{$perhutanan_sosial->id_perhutanan_sosial}}">
					<div class="table-responsive">
					<table class="table table-striped">
						<thead class="text-center">
							<th>Nama Potensi</th>
							<th>Jumlah</th>
							<th>Satuan</th>
							<th>Jangka Waktu</th>
							<th>Aksi</th>
						</thead>
						<tbody>
							<tr>
								<td><input class="form-control" type="text" name="nama_potensi"></td>
								<td><input class="form-control" type="text" name="jumlah"></td>
								<td class="text-center">
									<select class="form-control select2" name="satuan">
										<option value="Kg">Kilogram (Kg)</option>
										<option value="Ton">Ton</option>
										<option value="M3">M3</option>
										<option value="Liter">Liter</option>
										<option value="Gram">Gram</option>
									</select>
								</td>
								<td class="text-center">
									<select class="form-control select2" name="jangka_waktu">
										<option value="Hari">Per Hari</option>
										<option value="Minggu">Per Minggu</option>
										<option value="Bulan">Per Bulan</option>
										<option value="Tahun">Per Tahun</option>
									</select>
								</td>
								<td class="text-center">
									<button class="btn btn-primary btn-sm"><i class="fa fa-save mr-2"></i>Simpan</button>
								</td>
							</tr>
						</tbody>
					</table>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-striped" id="example1">
						<thead class="text-center">
							<th>No</th>
							<th>Nama Potensi</th>
							<th>Jumlah</th>
							<th>Satuan</th>
							<th>Jangka Waktu</th>
							<th>Aksi</th>
						</thead>
						<tbody>
							@php
							$no=1;
							@endphp
							@foreach($hhbk as $h)
							<tr class="text-center">
								<td>{{$no++}}</td>
								<td class="text-left">{{$h->nama_potensi}}</td>
								<td>{{$h->jumlah}}</td>
								<td>{{$h->satuan}}</td>
								<td>Per {{$h->jangka_waktu}}</td>
								<td class="text-center">
									<a href="{{url('hapus_potensi_hhbk')}}/{{$h->id_potensi_hhbk}}" onclick=" return confirm('Apakah anda yakin menghapus potensi {{$h->nama_potensi}} dari Kelompok {{$perhutanan_sosial->nama_kelompok}} ?')">
										<button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
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