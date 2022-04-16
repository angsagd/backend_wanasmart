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
				<form action="{{url('do_catatan_dinas')}}" method="post">
					@csrf
					<input type="hidden" name="ps_id" value="{{$kehutanan->id_perhutanan_sosial}}">
					<div class="form-group">
						<label>Catatan</label>
						<textarea class="form-control" name="catatan" style="height:100px"></textarea>
					</div>
					<button type="submit" style="width:100%" class="btn btn-primary"><i class="fa fa-envelope mr-2"></i>Kirim</button>
				</form>
			</div>
		</div>

		<div class="card">
			<div class="card-body">
				Data yang diajukan pemohon telah sesuai dan dapat dilanjutkan ke proses selanjutnya dengan menekan tombol verifikasi berikut.
				<div style="height:10px"></div>
				<a href="{{url('doverif_dinas')}}/{{$kehutanan->id_perhutanan_sosial}}" onclick="return confirm('Yakin akan memverifikasi permohonan ini ?')">
					<button class="btn btn-block btn-danger"><i class="fa fa-check mr-2"></i>Verifikasi</button>
				</a>
			</div>
		</div>
		
	</div>
	
</div>

@endsection