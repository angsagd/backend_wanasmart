@extends('master')
@section('title','ROLE PENGGUNA')
@section('content')

<div class="row">
	<div class="col-12 col-lg-5 col-xl-4">
		<!-- FOTO PROFIL -->
		<div class="box box-inverse bg-img" style="background-image: url(../../images/gallery/full/1.jpg);" data-overlay="2">

		  <div class="box-body text-center pb-50">
			<a href="#">
			  <img class="avatar avatar-xxl avatar-bordered" src="{{$pengguna->photo}}" alt="">
			</a>
			<h4 class="mt-2 mb-0"><a class="hover-primary text-white" href="#">{{$pengguna->nama}}</a></h4>
			<span><i class="fa fa-envelope w-20"></i> {{$pengguna->email}}</span>
		  </div>
		</div>				
		<!-- END FOTO PROFIL -->
	</div>

	<div class="col-12 col-lg-7 col-xl-8">
		<div class="box">
			<div class="box-body ribbon-box">
				<div class="ribbon ribbon-success">TAMBAH ROLE PENGGUNA</div>
				<form action="{{url('tambah_role_pengguna')}}" method="post">
					{{csrf_field()}}
					<input type="hidden" name="token_user" value="{{$pengguna->token}}">
					<div class="form-group">
						<select class="form-control select2" name="role_name">
							@foreach($role as $r)
							<option value="{{$r->id_role}}">{{$r->nama_role}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<button class="btn btn-primary"><i class="fa fa-save mr-2"></i>Tambahkan</button>
					</div>
				</form>
			</div>
		</div>
		<div class="box">
			<div class="box-body ribbon-box">
				<div class="ribbon ribbon-success">ROLE PENGGUNA SAAT INI</div>
				<div class="table-responsive">
					<table class="table table-striped">
						<thead class="text-center">
							<th>No</th>
							<th>Nama Role</th>
							<th>Aksi</th>
						</thead>
						<tbody>
							@php
								$no = 1;
							@endphp
							@foreach($role_pengguna as $r)
								<tr>
									<td class="text-center">{{$no++}}</td>
									<td>{{$r->nama_role}}</td>
									<td class="text-center">
										<a href="{{url('hapus_role_pengguna')}}/{{$pengguna->token}}/{{$r->id_role_pengguna}}" onclick="return confirm('Apakah anda yakin menghapus role {{$r->nama_role}} pada {{$pengguna->nama}}')">
										<button class="btn btn-danger"><i class="fa fa-trash mr-2"></i>Hapus</button>
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