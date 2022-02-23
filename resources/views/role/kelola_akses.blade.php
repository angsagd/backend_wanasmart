@extends('master')
@section('title','KELOLA AKSES '.strtoupper($role->nama_role) )
@section('content')

<div class="row">
	<div class="col-lg-6 col-md-6 col-xs-12">
		<div class="box">
			<div class="box-header ribbon-box">
				<div class="ribbon ribbon-success">TAMBAH AKSES MENU</div>
			</div>
			<div class="box-body ribbon-box">
				<form action="{{url('tambah_kelola_akses')}}" method="post">
					{{csrf_field()}}
					<input type="hidden" name="id_role" value="{{$role->id_role}}" readonly>
					<div class="form-group">
						<label class="m">Pilih menu yang akan ditambahkan :</label>
						<select name="id_menu" id="list_menu" class="form-control select2">
							
						</select>
					</div>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</form>

			</div>
		</div>
	</div>
	<div class="col-lg-6 col-md-6 col-xs-12">
		<div class="box">
			<div class="box-body ribbon-box">
				<div class="ribbon ribbon-success">MENU YANG DAPAT DIAKSES</div>
				<div class="table-responsive">
					<table class="table table-striped" id="example1">
						<thead class="text-center">
							<th style="width55">No</th>
							<th>Nama Menu</th>
							<th>Aksi</th>
						</thead>
						<tbody>
							@php
								$no = 1;
							@endphp
							@foreach($role_menu as $r)
							<tr>
								<td class="text-center">{{$no++}}</td>
								<td>{{$r->nama_menu}}</td>
								<td class="text-center">
									<a href="{{url('hapus_kelola_akses')}}/{{$r->id_role_menu}}">
										<button class="btn btn-danger btn-circle btn-xs">
											<i class="fa fa-trash"></i>
										</button>
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

<script type="text/javascript">
  	var xmlhttp = new XMLHttpRequest();
  	var element = document.getElementById('list_menu');
  	var url = "{{url('api/menu')}}";
		xmlhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		        var myArr = JSON.parse(this.responseText);
		        for (var i = 0; i < myArr.menu.length; i++) {
				    var opt = document.createElement('option');
					opt.value = myArr.menu[i].id_menu;
					opt.innerHTML = myArr.menu[i].nama_menu;
					element.appendChild(opt);
		        }
		    }
		};
	xmlhttp.open("POST", url, true);
	xmlhttp.send();
</script>

@endsection