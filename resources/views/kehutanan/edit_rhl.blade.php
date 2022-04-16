@extends('master')
@section('title','EDIT DATA REHABILITASI HUTAN DAN LAHAN')
@section('content')

<div class="row">
	<div class="col-sm-12">
		<div class="card">
			<div class="card-header bg-primary">Formulir Input Rehabilitasi Hutan dan Lahan</div>
			<div class="card-body">
				<form action="{{url('rhl_doedit')}}" method="post">
				@csrf
				<input type="hidden" name="id_rhl" value="{{$rhl->id_rhl}}">
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label>Nama Kelompok</label>
							<input type="text" class="form-control" name="nama_kelompok" value="{{$rhl->nama_kelompok}}" required>
						</div>
						<div class="form-group">
							<label>Alamat</label>
							<input type="text" class="form-control" name="alamat" required value="{{$rhl->alamat}}">
						</div>
						<div class="form-group">
							<label>Kabupaten / Kota</label>
							<input type="hidden" name="nama_kab" id="nama_kab" value="{{$rhl->kabupaten}}">
							<select class="form-control select2" id="kode_kab" name="kode_kab" onchange="pilihkab()" required="">
								<option selected>{{$rhl->kabupaten}}</option>
							</select>
						</div>
						<div class="form-group">
							<label>Kecamatan</label>
							<input type="hidden" name="nama_kec" id="nama_kec" value="{{$rhl->kecamatan}}">
							<select class="form-control select2" id="kode_kec" name="kode_kec" onchange="pilihkec()" disabled="" required="">
								<option selected>{{$rhl->kecamatan}}</option>
							</select>
						</div>
						<div class="form-group">
							<label>Kelurahan / Desa</label>
							<input type="hidden" name="nama_kel" id="nama_kel" value="{{$rhl->kelurahan}}">
							<select class="form-control select2" id="kode_kel" name="kode_kel" disabled="" required="" onchange="pilihkel()">
								<option selected>{{$rhl->kelurahan}}</option>
								</select>
						</div>
						<div class="form-group">
							<label>Luas (dalam Hektar)</label>
							<input type="number" class="form-control" placeholder="contoh : 40 (tanpa satuan)" name="luas" required value="{{$rhl->luas}}">
						</div>
						<div class="form-group">
							<label>Umur (dalam tahun)</label>
							<input type="number" class="form-control" placeholder="contoh : 10 (tanpa satuan)" name="umur" required value="{{$rhl->umur}}">
						</div>

						 
					</div>
					<div class="col-sm-12 col-md-6">
						<div class="form-group">
							<div class="row">
		                		<div class="col-sm-12">
		                			<label>Lokasi Anda : *</label>
		                			<div id="lokasi" style="width:100%;height:400px;"></div>
		                		</div>
		                	</div>
	                	</div>
	                	<div class="form-group">
		                	<div class="row">
		                		<div class="col-sm-6">
		                			<label>Latitude : *</label>
		                			<input type="text" name="lat" class="form-control" id="lat" readonly="" required="" value="{{$rhl->lat}}">
		                		</div>	
		                		<div class="col-sm-6">
		                			<label>Longitude : *</label>
		                			<input type="text" name="lng" class="form-control" id="lng" readonly="" required="" value="{{$rhl->lng}}">
		                		</div>
		           
		                	</div>	
		                </div>
					</div>

				</div>
				<!-- END ROW -->
				<button type="submit" class="btn btn-primary btn-block"><i class="fa fa-save mr-5"></i>Simpan</button>
				<div style="height:10px"></div>
				<a href="{{url('list_rhl')}}">
					<button type="button" class="btn btn-danger btn-block"><i class="fa fa-close mr-5"></i>Kembali</button>
				</a>
				</form>

			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	function myMap() {
		var mapProp= {
		  center:new google.maps.LatLng('{{$rhl->lat}}','{{$rhl->lng}}'),
		  zoom:16,
		  mapTypeId: google.maps.MapTypeId.HYBRID
		};
		var peta = new google.maps.Map(document.getElementById("lokasi"),mapProp);
		
		
		var lati = parseFloat("{{$rhl->lat}}");
		var longi = parseFloat("{{$rhl->lng}}");
		var lokasi = { lat: lati, lng: longi };
		var marker = new google.maps.Marker({
		    position: lokasi,
		    map:peta,
		    title:"{{$rhl->nama_kelompok}}"
		});
		
	}
	google.maps.event.addDomListener(window, 'load', myMap);
</script>

<script type="text/javascript">
	var kab = document.getElementById('kode_kab');
	var xmlhttp = new XMLHttpRequest();
	var url = "https://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi=51";
	xmlhttp.onreadystatechange = function() {
	    if (this.readyState == 4 && this.status == 200) {
	        var myArr = JSON.parse(this.responseText);
	        for (var i = 0; i < myArr.kota_kabupaten.length; i++) {
	        	var opt = document.createElement('option');
				opt.value = myArr.kota_kabupaten[i].id;
				opt.innerHTML = myArr.kota_kabupaten[i].nama;
				kab.appendChild(opt);
	        }
	    }
	};
	xmlhttp.open("GET", url, true);
	xmlhttp.send();

	function pilihkab(){
		var kab = document.getElementById('kode_kab').value;
		var kec = document.getElementById('kode_kec');
		
		var nama_kab = document.getElementById('nama_kab');
		var temp = document.getElementById('kode_kab');
		nama_kab.value = temp.options[temp.selectedIndex].text;


		kec.disabled = false;
		kec.innerHTML = "";

		var xmlhttp = new XMLHttpRequest();
		var url = "https://dev.farizdotid.com/api/daerahindonesia/kecamatan?id_kota="+kab;
		xmlhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		        var myArr = JSON.parse(this.responseText);
		        for (var i = 0; i < myArr.kecamatan.length; i++) {
		        	var opt = document.createElement('option');
					opt.value = myArr.kecamatan[i].id;
					opt.innerHTML = myArr.kecamatan[i].nama;
					kec.appendChild(opt);
		        }
		    }
		};
		xmlhttp.open("GET", url, true);
		xmlhttp.send();


	}

	function pilihkec(){
		var kec = document.getElementById('kode_kec').value;
		var kel = document.getElementById('kode_kel');
		kel.disabled = false;
		kel.innerHTML = "";

		var nama_kec = document.getElementById('nama_kec');
		var temp = document.getElementById('kode_kec');
		nama_kec.value = temp.options[temp.selectedIndex].text;

		var xmlhttp = new XMLHttpRequest();
		var url = "https://dev.farizdotid.com/api/daerahindonesia/kelurahan?id_kecamatan="+kec;
		xmlhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		        var myArr = JSON.parse(this.responseText);
		        for (var i = 0; i < myArr.kelurahan.length; i++) {
		        	var opt = document.createElement('option');
					opt.value = myArr.kelurahan[i].id;
					opt.innerHTML = myArr.kelurahan[i].nama;
					kel.appendChild(opt);
		        }
		    }
		};
		xmlhttp.open("GET", url, true);
		xmlhttp.send();
	}

	function pilihkel(){
		var nama_kel = document.getElementById('nama_kel');
		var temp = document.getElementById('kode_kel');
		nama_kel.value = temp.options[temp.selectedIndex].text;
	}
</script>

@endsection