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
					<button class="btn btn-sm btn-primary mb-4"><i class="fa fa-plus mr-2"></i>Tambah Role</button>
					<table id="example5" class="table table-striped" style="width: 100%;">
						<thead class="text-center">
							<th style="width: 1%">No</th>
							<th>Nama Role</th>
							<th>Aksi</th>
						</thead>
						<tbody>
							@php
								$no = 1;
							@endphp
							@foreach($role as $p)
							<tr>
								<td class="text-center">{{$no++}}</td>
								<td>{{$p->nama_role}}</td>
								<td></td>
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