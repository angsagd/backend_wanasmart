@extends('master')
@section('title','DASHBOARD')
@section('content')

<div class="row">
	<div class="col-12 col-md-6 col-xl-3">
		<div class="flexbox flex-justified text-center mb-30 bg-warning">
		  <div class="no-shrink py-30">
			<span class="fa fa-clock-o font-size-50"></span>
		  </div>
		  <div class="py-30 bg-white text-dark">
			<div class="font-size-30">{{$jumlah_verifikasi}}</div>
			<span>Permohonan Verifikasi</span>
		  </div>
		</div>
	</div>
	<div class="col-12 col-md-6 col-xl-3">
		<div class="flexbox flex-justified text-center mb-30 bg-success">
		  <div class="no-shrink py-30">
			<span class="fa fa-check font-size-50"></span>
		  </div>
		  <div class="py-30 bg-white text-dark">
			<div class="font-size-30">{{$jumlah_terverifikasi}}</div>
			<span>Data<br> Terverifikasi</span>
		  </div>
		</div>
	</div>
	<div class="col-12 col-md-6 col-xl-3">
		<div class="flexbox flex-justified text-center mb-30 bg-green">
		  <div class="no-shrink py-30">
			<span class="fa fa-map-pin font-size-50"></span>
		  </div>
		  <div class="py-30 bg-white text-dark">
			<div class="font-size-30">{{$jumlah_ps}}</div>
			<span>Perhutanan <br>Sosial</span>
		  </div>
		</div>
	</div>
	<div class="col-12 col-md-6 col-xl-3">
		<div class="flexbox flex-justified text-center mb-30 bg-brown">
		  <div class="no-shrink py-30">
			<span class="fa fa-globe font-size-50"></span>
		  </div>
		  <div class="py-30 bg-white text-dark">
			<div class="font-size-30">{{$jumlah_rhl}}</div>
			<span>Rehabilitasi Hutan Lahan</span>
		  </div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header bg-primary">SEBARAN PERHUTANAN SOSIAL DAN RHL DI PROVINSI BALI</div>
			<div class="card-body">
				<div id="lokasi" style="width:100%;height:600px;"></div>
				<div class="mt-4">
					<b class="mb-2">KETERANGAN :</b>
					<div>
						<img src="https://maps.google.com/mapfiles/ms/icons/green-dot.png">
						Perhutanan Sosial
					</div>
					<div>
						<img src="https://maps.google.com/mapfiles/ms/icons/blue-dot.png">
						Rehabilitasi Hutan dan Lahan
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	function myMap() {
		var mapProp= {
		  center:new google.maps.LatLng(-8.4406273,115.1044736),
		  zoom:10,
		};
		var peta = new google.maps.Map(document.getElementById("lokasi"),mapProp);
		
		<?php foreach ($ps as $l) { ?>
			var lati = parseFloat("{{$l->lat}}");
			var longi = parseFloat("{{$l->lng}}");
			var lokasi = { lat: lati, lng: longi };
			var marker = new google.maps.Marker({
			    position: lokasi,
			    map:peta,
			    icon: 'https://maps.google.com/mapfiles/ms/icons/green-dot.png',
			    title:"{{$l->nama_kelompok}}"
			});
		<?php } ?>

		<?php foreach ($rhl as $l) { ?>
			var lati = parseFloat("{{$l->lat}}");
			var longi = parseFloat("{{$l->lng}}");
			var lokasi = { lat: lati, lng: longi };
			var marker = new google.maps.Marker({
			    position: lokasi,
			    map:peta,
			    icon: 'https://maps.google.com/mapfiles/ms/icons/blue-dot.png',
			    title:"{{$l->nama_kelompok}}"
			});
		<?php } ?>
	}
	google.maps.event.addDomListener(window, 'load', myMap);
</script>

@endsection