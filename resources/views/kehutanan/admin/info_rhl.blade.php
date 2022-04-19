<div class="row">
	<div class="col-sm-12">

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
			<div class="card-header bg-primary">Informasi Kelompok</div>
			<div class="card-body">
				{{$kehutanan->nama_kelompok}}<br>
				{{$kehutanan->alamat}}<br>
				Kelurahan / Desa {{$kehutanan->kelurahan}}<br>
				Kecamatan {{$kehutanan->kecamatan}}<br>
				{{$kehutanan->kabupaten}}
				<div style="height:20px"></div>

				<hr>
				<!-- <label>Lokasi Kelompok</label> -->
				<div id="lokasi" style="width:100%;height:370px;"></div>
				<div style="height:20px"></div>

				<hr>
				<!-- <label>Spesifikasi Pohon</label> -->
				<div class="table-responsive">
					@if(!$pohon->first())
					<div class="col-sm-12 text-center">
						<p>Belum ada data</p>
					</div>
					@else
					<table class="table table-sm table-striped" id="example1">
						<thead class="text-center">
							<th>No</th>
							<th>Jenis Pohon</th>
							<th>Jumlah</th>
						</thead>
						<tbody>
							@php
								$no = 1;
							@endphp
							@foreach($pohon as $h)
							<tr class="text-center">
								<td>{{$no++}}</td>
								<td class="text-left">{{$h->jenis_pohon}}</td>
								<td>{{$h->jumlah_pohon}}</td>
							</tr>
							@endforeach
							@endif
						</tbody>
					</table>
				</div>
				<div style="height:20px"></div>
				<hr>
				<!-- <label>Galeri</label> -->
				<div class="popup-gallery">
					@if(!$foto->first())
						
							<div class="col-sm-12 text-center">
								<p>Belum ada foto</p>
							</div>
					@else
					@foreach($foto as $f)
					<a href="{{url('files/foto/')}}/{{$f->path}}" title="{{$kehutanan->nama_kelompok}}">
						<img src="{{url('files/foto/')}}/{{$f->path}}" width="32.5%" alt="" />
					</a>
					@endforeach
					@endif
				</div>

				

			</div>
		</div>

		<!-- TIMELINE CATATAN -->
		<div class="card">
			<div class="card-header bg-primary">History Catatan</div>
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
								<p class="text-left">Oleh {{$c->oleh}}<br>pada {{$c->created_at}}</p>
							</div>
						</div>
					</div>
					@endforeach
					@else
					<div class="text-center">Belum ada tanggapan</div>
					@endif
				</div>
				<!-- FINISH TIMELINE -->
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