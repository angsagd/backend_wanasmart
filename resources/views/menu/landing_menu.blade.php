@extends('master')
@section('title','MENU')
@section('content')

<div class="row">
	<div class="col">
		<div class="box">
			<div class="box-body">
				<button class="btn btn-block btn-primary mb-4" data-toggle="modal" data-target="#modal-menu"><i class="fa fa-plus mr-2"></i>Tambah Menu</button>
				<div class="table-responsive">
					<table class="table table-striped" id="example1">
						<thead class="text-center">
							<th style="width: 2%;">No</th>
							<th style="width: 20%;">Aksi</th>
							<th style="width: 20%;">ID Parent</th>
							<th>Nama Menu</th>
						</thead>
						@php
							$no = 1;
						@endphp
						@foreach($menu as $m)
						<tr>
							<td class="text-center">{{$no++}}</td>
							<td class="text-center">
									<a href="{{url('hapus_menu')}}/{{$m->id_menu}}" onclick="return confirm('Apakah anda yakin menghapus Menu {{$m->nama_menu}}')">
									<button class="btn btn-danger btn-xs btn-block"><i class="fa fa-trash mr-2"></i>Hapus</button>
								</a>
							</td>
							<td class="text-center">{{$m->parent_menu}}</td>
							<td>{{$m->nama_menu}}</td>
						</tr>
						@endforeach
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- MODAL -->
<form action="{{url('tambah_menu')}}" method="post">
  <div class="modal fade show" id="modal-menu">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">

		  <div class="modal-header">
			<h4 class="modal-title">Tambah Menu</h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">×</span></button>
		  </div>
		  
		  <div class="modal-body">
				{{csrf_field()}}
				<div class="form-group">
					<label>Parent Menu : </label><br>
					<select class="form-control select" id="parent_menu" name="parent_menu">
						<option value="0">Menu Dasar</option>
					</select>
				</div>
				<div class="form-group">
					<label>Nama Menu : </label>
					<input name="nama_menu" type="text" class="form-control">
				</div>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			<button type="submit" class="btn btn-primary float-right">Simpan</button>
		  </div>
		  
		</div>
	  </div>
  </div>
</form>

<script type="text/javascript">
  	var xmlhttp = new XMLHttpRequest();
  	var element = document.getElementById('parent_menu');
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
<!-- END MODAL -->

@endsection