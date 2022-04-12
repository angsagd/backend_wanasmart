@extends('master')
@section('title','Verifikasi Data Perhutanan Sosial')
@section('content')
<div class="row">
	<div class="col-sm-12 col-md-4">

		<div class="box box-inverse bg-img" style="background-image: url(../../images/gallery/full/1.jpg);" data-overlay="2">
		  <div class="flexbox px-20 pt-20"></div>
		  <div class="box-body text-center pb-50">
			<a href="#">
			  <img class="avatar avatar-xxl avatar-bordered" src="{{$kehutanan->photo}}" alt="">
			</a>
			<h4 class="mt-2 mb-0"><a class="hover-primary text-white" href="#">{{$kehutanan->nama}}</a></h4>
			<span><i class="fa fa-envelope w-20"></i>{{$kehutanan->email}}</span>
		  </div>
		</div>

		<div class="card">
			<div class="card-header bg-primary">Informasi</div>
			<div class="card-body">
				{{$kehutanan->nama_kelompok}}<br>
				{{$kehutanan->alamat}}<br>
				Kelurahan / Desa {{$kehutanan->kelurahan}}<br>
				Kecamatan {{$kehutanan->kecamatan}}<br>
				{{$kehutanan->kabupaten}}
			</div>
		</div>

		<div class="card">
			<div class="card-header bg-primary">Verifikasi</div>
			<div class="card-body">
				<form onsubmit="return confirm('Data yang telah terverifikasi akan diteruskan kepada KPH. Lanjutkan ?')">
					<div class="form-group">
						<label>Keterangan :</label>
						<textarea style="height: 200px;"  class="form-control" name="keterangan"></textarea>
					</div>
					<div class="form-group">
						<label>Unit Verifikasi :</label>
						<select class="select select2 form-control">
							<option selected disabled>silahkan pilih</option>
							<option value="KPH Timur">KPH Bali Timur</option>
							<option value="KPH Selatan">KPH Bali Selatan</option>
							<option value="KPH Barat">KPH Bali Barat</option>
							<option value="KPH Utara">KPH Bali Utara</option>
						</select>
					</div>
					<button type="submit" style="width:100%" class="btn btn-danger"><i class="fa fa-check mr-2"></i>Verifikasi</button>
				</form>
			</div>
		</div>
	</div>
	<div class="col-sm-12 col-md-8">
		<!-- MAPS -->
		<div class="card">
			<div class="card-header bg-primary">Lokasi</div>
			<div class="card-body"><div id="lokasi" style="width:100%;height:400px;"></div></div>
		</div>

		<div class="card">
			<div class="card-header bg-primary">Potensi HHBK</div>
			<div class="card-body">
				<div class="table-responsive">
					@if(!$hhbk->first())
					<div class="col-sm-12 text-center">
						<p>Belum ada data</p>
					</div>
					@else
					<table class="table table-sm table-striped" id="example1">
						<thead class="text-center">
							<th>No</th>
							<th>Potensi</th>
							<th>Jumlah</th>
							<th>Satuan</th>
							<th>Jangka Waktu</th>
						</thead>
						<tbody>
							@php
								$no = 1;
							@endphp
							@foreach($hhbk as $h)
							<tr class="text-center">
								<td>{{$no++}}</td>
								<td class="text-left">{{$h->nama_potensi}}</td>
								<td>{{$h->jumlah}}</td>
								<td>{{$h->satuan}}</td>
								<td>Per {{$h->jangka_waktu}}</td>
							</tr>
							@endforeach
							@endif
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<!-- GALERI -->
		<div class="card">
			<div class="card-header bg-primary">Galeri</div>
			<div class="card-body">
				<div class="popup-gallery">
					@if(!$foto->first())
						
							<div class="col-sm-12 text-center">
								<p>Belum ada foto</p>
							</div>
					@else
					@foreach($foto as $f)
					<a href="{{url('files')}}/{{$f->path}}" title="Caption. Can be aligned to any side and contain any HTML.">
						<img src="{{url('files')}}/{{$f->path}}" width="32.5%" alt="" />
					</a>
					@endforeach
					@endif
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	function myMap(){
		var longi = parseFloat("{{$kehutanan->lng}}");
		var lati = parseFloat("{{$kehutanan->lat}}");
		myLatLng = { lat: lati, lng: longi };
		var mapProp= {
		  center:myLatLng,
		  zoom:16,
		};
		var peta = new google.maps.Map(document.getElementById("lokasi"),mapProp);
		var marker = new google.maps.Marker({
		    position: myLatLng,
		    map:peta,
		    title:"{{$kehutanan->nama_kelompok}}"
		});
	}
	google.maps.event.addDomListener(window, 'load', myMap);
</script>

@endsection