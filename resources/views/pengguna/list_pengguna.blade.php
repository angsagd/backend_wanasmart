@extends('master')
@section('title','DAFTAR PENGGUNA')
@section('content')

<div class="row">
	<div class="col-12">
		<div class="box">
			<div class="box-title"></div>
			<div class="box-body">
				<div class="table-responsive">
					<table id="example1" class="table table-striped" style="width: 100%;">
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
									<a href="{{url('show_profil')}}/{{$p->token}}">
										<button class="btn btn-xs btn-warning btn-block"><i class="fa fa-user mr-2"></i>Lihat Profil</button>
									</a>
									
									<a href="{{url('role_user')}}/{{$p->token}}">
										<button class="btn btn-xs btn-primary btn-block"><i class="fa fa-cog mr-2"></i>Role Pengguna</button>
									</a>
									
									@if(Session::get('id') != $p->id)
									<a href="{{url('hapus_pengguna')}}/{{$p->token}}" onclick="return confirm('Apakah anda yakin menghapus Pengguna {{$p->nama}}')">
										<button class="btn btn-xs btn-danger btn-block"><i class="fa fa-trash mr-2"></i>Hapus</button>
									</a>
									@endif
									
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