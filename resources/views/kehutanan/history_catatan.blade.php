@extends('master')
@section('title','HISTORY CATATAN')
@section('content')

<div class="row">
	<div class="col-sm-12 col-md-7">
		<div class="card">
			<div class="card-header bg-primary">History Catatan Permohonan {{$permohonan->nama_kelompok}}</div>
			<div class="card-body">
				<!-- START TIMELINE-->
				<div class="timeline timeline-line-dotted">
					@if($catatan->first())
					@foreach($catatan as $c)
					<div class="timeline-item">
						<div class="timeline-point timeline-point-success">
							<i class="fa fa-map"></i>
						</div>
						@if($c->oleh == Session::get('nama'))
						<div class="timeline-event bg-secondary">
						@else
						<div class="timeline-event">
						@endif
							<div class="timeline-body">
								<p>{{$c->catatan}}</p>
								<hr>
								<p class="text-left">Oleh {{$c->oleh}} <br>pada {{$c->created_at}}</p>
							</div>
						</div>
					</div>
					@endforeach
					@else
					<div class="text-center">Belum Ada Catatan</div>
					@endif
				</div>
				<!-- FINISH TIMELINE -->
			</div>
		</div>
	</div>
	<div class="col-sm-12 col-md-5">
		<div class="card">
			<div class="card-header bg-primary">Tanggapan</div>
			<div class="card-body">
				<form onsubmit="return confirm('Yakin akan mengirimkan tanggapan ini ?')" action="{{url('berikan_tanggapan')}}" method="post">
					@csrf
					<input type="hidden" name="ps_id" value="{{$permohonan->id_perhutanan_sosial}}">
					<div class="form-group">
						<label>Berikan tanggapan anda :</label>
						<textarea class="form-control" style="height:100px" required name="catatan"></textarea>
					</div>
					<button class="btn btn-block btn-primary"><i class="fa fa-envelope mr-2"></i>Kirim</button>
				</form>
				<div style="height:10px"></div>
				
			</div>
		</div>
	</div>
</div>
@endsection