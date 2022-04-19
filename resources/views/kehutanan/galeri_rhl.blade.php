@extends('master')
@section('title','GALERI FOTO RHL')
@section('content')

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header bg-primary">Tambahkan Foto</div>
			<div class="card-body">
				<p><b>Keterangan :</b></p>
				<ol>
					<li>Foto dalam format .jpg atau .jpeg</li>
					<li>Memiliki ukuran file maksimal 2 MB</li>
					<li>Foto diambil dalam mode landscape</li>
				</ol>
				<form action="{{url('foto_rhl_simpan')}}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<input type="hidden" name="id_rhl" value="{{$rhl->id_rhl}}">
								<input class="form-control" type="file" name="foto_ps[]" accept="image/jpeg, image/jpg" multiple>
							</div>
						</div>
						<div class="col-sm-4 text-left">
							<div class="form-group">
								<button type="submit" class="btn btn-primary"><i class="fa fa-upload"></i>Upload</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>


<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header bg-primary">Geleri {{$rhl->nama_kelompok}}</div>
			<div class="card-body">
				<div class="row text-center">
					@if(!$foto->first())
							<div class="col-sm-12 text-center">
								<p>Belum ada data</p>
							</div>
					@else
					@foreach($foto as $f)
					<div class="col-sm-12 col-md-3 mt-2" id="images{{$f->id_foto_rhl}}">
						<img style="height: 200px;" class="img-thumbnail m-1" src="{{url('files/foto/')}}/{{$f->path}}">
						<br>
						<a href="{{url('hapus_foto_rhl')}}/{{$f->id_foto_rhl}}">
						<button onclick="return confirm('Apakah anda yakin menghapus foto ini ?')" class="btn btn-danger btn-xs"><i class="fa fa-trash mr-1"></i>Hapus</button>
						</a>
					</div>
					@endforeach
					@endif
					
				</div>	
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	function hapus(id){
		var elem = document.getElementById('images'+id);
		elem.remove();
	}
</script>

@endsection