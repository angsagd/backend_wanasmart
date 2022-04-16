@extends('master')
@section('title','Verifikasi Data Rehabilitasi Hutan dan Lahan')
@section('content')

<div class="row">
	<div class="col-sm-12 col-md-8">
		@include('kehutanan/admin/info_rhl')
	</div>


	<div class="col-sm-12 col-md 4">
		<div class="card">
			<div class="card-header bg-primary">Catatan kepada Pemohon</div>
			<div class="card-body">
				<form action="{{url('do_catatan_rhl')}}" method="post">
					@csrf
					<input type="hidden" name="rhl_id" value="{{$kehutanan->id_rhl}}">
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
				<form onsubmit="return confirm('Data yang telah terverifikasi akan diteruskan kepada KPH. Lanjutkan ?')" action="{{url('doverifikasi_rhl_admin')}}" method="post">
					@csrf
					<input type="hidden" name="rhl_id" value="{{$kehutanan->id_rhl}}">
					Data yang diajukan pemohon telah sesuai dan dapat dilanjutkan ke proses selanjutnya dengan menekan tombol verifikasi berikut.
					<div style="height:10px"></div>
					<div class="form-group">
						<label>Teruskan permohonan kepada :</label>
						<select class="select select2 form-control" name="kph" required>
							<option selected disabled>silahkan pilih</option>
							<option value="1">KPH Bali Timur</option>
							<option value="2">KPH Bali Selatan</option>
							<option value="3">KPH Bali Barat</option>
							<option value="4">KPH Bali Utara</option>
						</select>
					</div>
					<button type="submit" style="width:100%" class="btn btn-danger"><i class="fa fa-check mr-2"></i>Teruskan</button>
				</form>
			</div>
		</div>
	</div>
</div>


@endsection