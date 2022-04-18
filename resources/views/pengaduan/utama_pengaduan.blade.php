@extends('master')
@section('title','PENGADUAN')
@section('content')

<div class="row">
	<div class="col-sm-12">
		<a href="{{url('input_pengaduan')}}">
			<button class="btn btn-block btn-primary"><i class="fa fa-plus mr-2"></i>Tambah Pengaduan</button>
		</a>
		<div style="height:10px"></div>
		<div class="card">
			<div class="card-header bg-primary">Daftar Pengaduan</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-striped" id="example1">
						<thead class="text-center">
							<th>No</th>
							<th>Tanggal Pembuatan</th>
							<th>Subjek Aduan</th>
							<th>Isi Aduan</th>
							<th>Aksi</th>
						</thead>
						@php
							$no = 1;
						@endphp
						
						<tbody class="text-center">
							@foreach($pengaduan as $p)
							<tr>
								<td>{{$no++}}</td>
								<td>{{$p->created_at}}</td>
								<td class="text-left">{{$p->subjek}}</td>
								<td class="text-left">{{$p->isi}}</td>
								<td>
									<a target="_blank" href="{{url('tanggapan_pengaduan')}}/{{$p->id_pengaduan}}">
										<button class="btn btn-xs btn-block btn-primary"><i class="fa fa-eye mr-2"></i>Lihat Tanggapan</button>
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