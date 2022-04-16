@extends('master')
@section('title','Verifikasi Data Perhutanan Sosial')
@section('content')

<div class="row">
	<div class="col-sm-12 col-md-8">
		@include('kehutanan/admin/info_ps')
	</div>


	<div class="col-sm-12 col-md-4">
		<div class="card">
			<div class="card-header bg-primary">Catatan kepada pemohon</div>
			<div class="card-body">
				<form action="{{url('do_catatan_kph')}}" method="post">
					@csrf
					<input type="hidden" name="ps_id" value="{{$kehutanan->id_perhutanan_sosial}}">
					<div class="form-group">
						<label>Catatan</label>
						<textarea required name="catatan" class="form-control" style="height:200px"></textarea>
					</div>
					<button type="submit" class="btn btn-block btn-info"><i class="fa fa-envelope mr-2"></i>Kirim</button>
				</form>
			</div>
		</div>

		<div class="card">
			<div class="card-body">
				Data yang diajukan pemohon telah sesuai dan dapat dilanjutkan ke proses selanjutnya dengan menekan tombol verifikasi berikut.
				<div style="height:20px"></div>
				<a href="{{url('doverif_kph')}}/{{$kehutanan->id_perhutanan_sosial}}" onclick="return confirm('Yakin memverifikasi permohonan ini ?')">
					<button type="submit" class="btn btn-block btn-danger"><i class="fa fa-check mr-2"></i>Verifikasi</button>
				</a>
			</div>
		</div>


	</div>
</div>


@endsection