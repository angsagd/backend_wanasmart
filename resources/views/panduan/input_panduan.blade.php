@extends('master')
@section('title','INPUT PANDUAN')
@section('content')

<div class="row">
	<div class="col-sm-12">
		<div class="card">
			<div class="card-header bg-primary">Tambah Panduan</div>
			<div class="card-body">
				<form action="{{url('panduan_dotambah')}}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label>Judul Panduan</label>
						<input type="text" class="form-control" name="nama_panduan" required>
					</div>
					<div class="form-group">
						<label>Keterangan</label>
						<textarea class="form-control" style="height:100px" name="keterangan"></textarea>
					</div>
					<div class="form-group">
						<label>Keterangan</label>
						<input type="file" name="file" class="form-control" accept="application/pdf" required>
					</div>
					<div class="form-group">
						<label>Tingkat</label>
						<select class="form-control" name="tingkat">
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
						</select>
						<span><i>Catatan : Nilai tingkat lebih kecil akan muncul lebih awal pada daftar</i></span>
					</div>
					<button type="submit" class="btn btn-primary btn-block"><i class="fa fa-save mr-2"></i>Simpan</button>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection