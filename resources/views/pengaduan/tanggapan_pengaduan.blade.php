@extends('master')
@section('title','TANGGAPAN PENGADUAN')
@section('content')

<div class="row">
	<div class="col-sm-12">
		<div class="card">
			<div class="card-header bg-primary">History Tanggapan Pengaduan</div>
			<div class="card-body">
				<div class="row">
					<div class="col-sm-12 col-md-6">
						<div class="form-group">
							<label>Pengaduan Oleh</label>
							<input class="form-control" type="text" readonly value="{{$pengaduan->nama}}">
						</div>
						<div class="form-group">
							<label>Pengaduan dibuat pada</label>
							<input class="form-control" type="text" readonly value="{{$pengaduan->created_at}}">
						</div>
						<div class="form-group">
							<label>Subjek Pengaduan</label>
							<input class="form-control" type="text" readonly value="{{$pengaduan->subjek}}">
						</div>
						<div class="form-group">
							<label>Isi Pengaduan</label>
							<textarea class="form-control" readonly>{{$pengaduan->isi}}</textarea>
						</div>
					</div>
					<div class="col-sm-12 col-md-6">
						<form onsubmit="return confirm('yakin akan mengirimkan tanggapan ?')" action="{{url('tanggapan_dotambah')}}" method="post">
							@csrf
							<input type="hidden" name="id_pengaduan" value="{{$pengaduan->id_pengaduan}}" readonly>
							<div class="form-group">
								<label>Berikan Tanggapan</label>
								<textarea class="form-control" style="height:200px" name="isi_tanggapan"></textarea>
							</div>
							<div class="form-group">
								<label>Tanggapan diberikan oleh </label>
								<input type="text" class="form-control" readonly name="oleh" value="{{Session::get('nama')}}">
							</div>
							<button type="submit" class="btn btn-block btn-primary"><i class="fa fa-save mr-2"></i>Simpan</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<a href="{{url('tutup_pengaduan')}}/{{$pengaduan->id_pengaduan}}" onclick="return confirm('Yakin akan menutup pengaduan ini ?')">
			<button class="btn btn-block btn-danger mb-4" style="height:50px"><i class="fa fa-close mr-2"></i>TUTUP PENGADUAN</button>
		</a>
		<div class="card">
			<div class="card-body">
				@if(!$tanggapan->first())
					<div class="text-center">
						Belum ada tanggapan
					</div>
				@else
					<!-- START TIMELINE-->
					<div class="timeline timeline-line-dotted">
						@foreach($tanggapan as $c)
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
									<p>{{$c->isi_tanggapan}}</p>
									<hr>
									<p class="text-left">Oleh {{$c->oleh}}<br>pada {{$c->created_at}}</p>
								</div>
							</div>
						</div>
						@endforeach
					</div>
					<!-- FINISH TIMELINE -->
				@endif
			</div>
		</div>
	</div>
</div>

@endsection