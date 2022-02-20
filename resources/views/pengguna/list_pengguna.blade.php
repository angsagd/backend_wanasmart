@extends('master')
@section('title','DAFTAR PENGGUNA')
@section('content')

<div class="row">
	<div class="col-12">
		<div class="box">
			<div class="box-title"></div>
			<div class="box-body">
				<div class="table-responsive">
					<table id="example5" class="table table-striped" style="width: 100%;">
						<thead class="text-center">
							<th style="width: 1%">No</th>
							<th>Aksi</th>
							<th>ID Google</th>
							<th>Nama</th>
							<th>e-Mail</th>
							<th>Alamat</th>
							<th>Telepon</th>
							
						</thead>
						<tbody>
							@php
								$no = 1;
							@endphp
							@foreach($pengguna as $p)
							<tr>
								<td class="text-center">{{$no++}}</td>
								<td>
									<div class="btn-group mb-5">
									  <button type="button" class="btn btn-primary btn-rounded btn-outline">Aksi</button>
									  <button type="button" class="btn btn-primary btn-rounded btn-outline dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
										<span class="caret"></span>
										<span class="sr-only">Toggle Dropdown</span>
									  </button>
									  <div class="dropdown-menu">
										<a class="dropdown-item" href="{{url('show_profil')}}/{{$p->token}}">Lihat Profil</a>
										<a class="dropdown-item" href="#">Tambah Role</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item bg-danger" href="#">Hapus</a>
									  </div>
									</div>
								</td>
								<td>{{$p->id_google}}</td>
								<td>{{$p->nama}}</td>
								<td>{{$p->email}}</td>
								<td>{{$p->alamat}}</td>
								<td>{{$p->telp}}</td>
								
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