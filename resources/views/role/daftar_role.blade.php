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
									<a href="{{url('kelola_akses')}}/{{$p->id_role}}">
										<button class="btn btn-primary btn-block btn-xs"><i class="fa fa-cog mr-2"></i>Kelola Akses</button>
									</a>
									<a href="{{url('hapus_role')}}/{{$p->id_role}}" onclick="return confirm('Apakah anda yakin menghapus Role {{$p->nama_role}}')">
										<button class="btn btn-danger btn-block btn-xs"><i class="fa fa-trash mr-2"></i>Hapus</button>
									</a>
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