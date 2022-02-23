@extends('master')
@section('title','ROLE')
@section('content')

<div class="row">
	<div class="col-12">
		<div class="box">
			<div class="box-title">
				
			</div>
			<div class="box-body">
				<div class="table-responsive">
					<button class="btn btn-sm btn-primary mb-4 btn-block" data-toggle="modal" data-target="#modal-role" ><i class="fa fa-plus mr-2"></i>Tambah Role</button>
					<table id="example1" class="table table-striped" style="width: 100%;">
						<thead class="text-center">
							<th style="width: 1%">No</th>
							<th style="width: 20%;">Aksi</th>
							<th>Nama Role</th>
						</thead>
						<tbody>
							@php
								$no = 1;
							@endphp
							@foreach($role as $p)
							<tr>
								<td class="text-center">{{$no++}}</td>
								<td class="text-center">
									<div class="btn-group mb-5">
									  <button type="button" class="btn btn-primary btn-rounded btn-outline">Pengaturan</button>
									  <button type="button" class="btn btn-primary btn-rounded btn-outline dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
										<span class="caret"></span>
										<span class="sr-only">Toggle Dropdown</span>
									  </button>
									  <div class="dropdown-menu">
										<a class="dropdown-item" href="{{url('kelola_akses')}}/{{$p->id_role}}">Kelola Akses</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item bg-danger" href="{{url('hapus_role')}}/{{$p->id_role}}" onclick="return confirm('Apakah anda yakin menghapus Role {{$p->nama_role}}')">Hapus</a>
						
									  </div>
									</div>
								</td>
								<td>{{$p->nama_role}}</td>
								
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<form action="{{url('tambah_role')}}" method="post">
{{csrf_field()}}
<div class="modal fade show" id="modal-role">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Tambah Role</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">×</span></button>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<label>Nama Role :</label>
					<input type="text" name="nama_role" class="form-control">
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary float-left" data-dismiss="modal">Tutup</button>
				<button type="submit" class="btn btn-primary float-right">Simpan</button>
			</div>
		</div>
	</div>
</div>
</form>


@endsection