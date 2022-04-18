@extends('master')
@section('title','PANDUAN APLIKASI')
@section('content')

<div class="row">
	<div class="col-sm-12">

		@if(in_array('Input Panduan',Session::get('hakakses')))
		<a href="{{url('input_panduan')}}">
			<button class="btn btn-block btn-primary"><i class="fa fa-plus mr-2"></i>Tambah Panduan</button>
		</a>
		@endif
		<div style="height:20px"></div>

		@foreach($panduan as $p)
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-sm-1">
						<img src="{{asset('foto/tutor.png')}}" style="width: 100%;">
					</div>
					<div class="col-sm-11">
						<a href="{{asset($p->path_panduan)}}" target="_blank">
							<h4>{{$p->nama_panduan}}</h4>
						</a>
						<p>{{$p->keterangan}}</p>
						@if(in_array('Input Panduan',Session::get('hakakses')))
						<a href="{{url('panduan_hapus')}}/{{$p->id_panduan}}" onclick="return confirm('Yakin akan menghapus panduan {{$p->nama_panduan}} ?')">
							<button class="btn btn-xs btn-danger"><i class="fa fa-trash mr-2"></i>Hapus Panduan</button>
						</a>
						@endif
					</div>
				</div>
			</div>
		</div>
		@endforeach

	</div>	
</div>

@endsection