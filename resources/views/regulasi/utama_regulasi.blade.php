@extends('master')
@section('title','REGULASI')
@section('content')

<div class="row">
	<div class="col-sm-12">

		@if(in_array('Input Regulasi',Session::get('hakakses')))
		<a href="{{url('input_regulasi')}}">
			<button class="btn btn-block btn-primary"><i class="fa fa-plus mr-2"></i>Tambah Regulasi</button>
		</a>
		@endif
		<div style="height:20px"></div>
		@if($regulasi->first())
		@foreach($regulasi as $p)
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-sm-1">
						<img src="{{asset('foto/regulasi.png')}}" style="width: 100%;">
					</div>
					<div class="col-sm-11">
						<a href="{{asset($p->path_regulasi)}}" target="_blank">
							<h4>{{$p->nama_regulasi}}</h4>
						</a>
						<p>{{$p->keterangan}}</p>
						@if(in_array('Input Regulasi',Session::get('hakakses')))
						<a href="{{url('hapus_regulasi')}}/{{$p->id_regulasi}}" onclick="return confirm('Yakin akan menghapus Regulasi {{$p->nama_regulasi}} ?')">
							<button class="btn btn-xs btn-danger"><i class="fa fa-trash mr-2"></i>Hapus Regulasi</button>
						</a>
						@endif
					</div>
				</div>
			</div>
		</div>
		@endforeach
		@else
		<div class="card">
			<div class="card-body">
				<div class="text-center">
					Belum ada regulasi
				</div>
			</div>
		</div>
		@endif

	</div>	
</div>

@endsection