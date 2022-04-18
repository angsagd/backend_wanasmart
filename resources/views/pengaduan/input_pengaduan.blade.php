@extends('master')
@section('title','INPUT PENGADUAN')
@section('content')

<div class="row">
	<div class="col-sm-12">
		<div class="card">
			<div class="card-header bg-primary">Formulir Pengaduan</div>
			<div class="card-body">
				<form action="{{url('pengaduan_dotambah')}}" method="post">
					@csrf
					<div class="form-group">
						<label>Nama</label>
						<input type="text" name="nama" class="form-control" readonly required value="{{Session::get('nama')}}">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="text" name="email" class="form-control" readonly required value="{{Session::get('email')}}">
					</div>
					<div class="form-group">
						<label>Telepon (Whatsapp)</label>
						<input type="text" name="telp" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Subjek Aduan</label>
						<input type="text" name="subjek" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Isi Pengaduan</label>
						<textarea class="form-control" style="height:100px" required name="isi"></textarea>
					</div>
					<button type="submit" class="btn btn-primary btn-block"><i class="fa fa-save mr-2"></i>Simpan</button>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection