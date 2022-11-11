@extends('master')
@section('title','TAMBAH DATA PERHUTANAN SOSIAL')
@section('content')

<div class="row">

    <!-- TAB KIRI -->
    <div class="col-sm-12 col-md-12">
        <div class="card">
            <div class="card-header bg-primary"><b>FORMULIR PENDATAAN</b></div>
            <div class="card-body">
                <form action="{{url('perhutanansosial_dotambah')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <label>Nama Kelompok</label>
                                <input type="text" class="form-control" name="nama_kelompok">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" class="form-control" name="alamat">
                            </div>
                            <div class="form-group">
                                <label>Kabupaten / Kota</label>
                                <input type="hidden" name="nama_kab" id="nama_kab">
                                <select class="form-control select2" id="kode_kab" name="kode_kab" onchange="pilihkab()" required="">
                                    <option selected disabled>Silahkan pilih</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Kecamatan</label>
                                <input type="hidden" name="nama_kec" id="nama_kec">
                                <select class="form-control select2" id="kode_kec" name="kode_kec" onchange="pilihkec()" disabled="" required="">
                                    <option selected disabled>Pilih Kabupaten terlebih dahulu</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Kelurahan / Desa</label>
                                <input type="hidden" name="nama_kel" id="nama_kel">
                                <select class="form-control select2" id="kode_kel" name="kode_kel" disabled="" required="" onchange="pilihkel()">
                                    <option selected disabled>Pilih Kecamatan terlebih dahulu</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Luas (dalam Hektar)</label>
                                <input type="text" class="form-control" placeholder="contoh : 40" name="luas" required>
                            </div>

                            <div class="form-group">
                                <label>Jasa Lingkungan</label>
                                <textarea class="form-control" name="jasa_lingkungan" required style="height:200px"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label>Lokasi Anda : *</label>
                                        <div id="googleMap" style="width:100%;height:400px;"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>Latitude : *</label>
                                        <input type="text" name="lat" class="form-control" id="lat" required="">
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Longitude : *</label>
                                        <input type="text" name="lng" class="form-control" id="lng" required="">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-save mr-5"></i>Simpan</button>
                </form>
            </div>
        </div>
    </div>

    <!-- TAB KANAN -->
    <!--
	<div class="col-sm-12 col-md-12">
		<div class="card">
			<div class="card-header bg-primary"><b>TAHAPAN PENDATAAN PERHUTANAN SOSIAL</b></div>
			<div class="card-body">
				<div class="timeline timeline-line-dotted">

					
					<span class="timeline-label">
						<span class="badge badge-primary badge-lg">TAHAP I</span>
					</span>
					<div class="timeline-item">
						<div class="timeline-point timeline-point-success">
							<i class="fa fa-map"></i>
						</div>
						<div class="timeline-event">
							<div class="timeline-heading">
								<h4 class="timeline-title">Pengisian Formulir</h4>
							</div>
							<div class="timeline-body">
								<p>Pengisian formulir pendataan oleh pemohon secara lengkap dan benar. Data yang telah diisi akan dikirimkan untuk selanjutnya dilakukan verifikasi. </p>
							</div>
							<div class="timeline-footer bg-danger">
								<p class="text-left">dilakukan oleh Pemohon</p>
							</div>
						</div>
					</div>

					
					<span class="timeline-label">
						<span class="badge badge-primary badge-lg">TAHAP 2</span>
					</span>
					<div class="timeline-item">
						<div class="timeline-point timeline-point-success">
							<i class="fa fa-check"></i>
						</div>
						<div class="timeline-event">
							<div class="timeline-heading">
								<h4 class="timeline-title">Pemilahan Data</h4>
							</div>
							<div class="timeline-body">
								<p>Admin akan melakukan pemilahan terhadap data permohonan yang masuk dan diarahkan kepada KPH sesuai dengan lokasi permohonan.</p>
							</div>
							<div class="timeline-footer bg-warning">
								<p class="text-left">dilakukan oleh Admin</p>
							</div>
						</div>
					</div>

					
					<span class="timeline-label">
						<span class="badge badge-primary badge-lg">TAHAP 3</span>
					</span>
					<div class="timeline-item">
						<div class="timeline-point timeline-point-success">
							<i class="fa fa-check"></i>
						</div>
						<div class="timeline-event">
							<div class="timeline-heading">
								<h4 class="timeline-title">Verifikasi KPH</h4>
							</div>
							<div class="timeline-body">
								<p>KPH yang telah menerima data dari admin akan melakukan verifikasi terhadap kebenaran data yang disampaikan oleh pemohon.</p>
							</div>
							<div class="timeline-footer bg-warning">
								<p class="text-left">dilakukan oleh Admin KPH</p>
							</div>
						</div>
					</div>

					
					<span class="timeline-label">
						<span class="badge badge-primary badge-lg">TAHAP 4</span>
					</span>
					<div class="timeline-item">
						<div class="timeline-point timeline-point-success">
							<i class="fa fa-check"></i>
						</div>
						<div class="timeline-event">
							<div class="timeline-heading">
								<h4 class="timeline-title">Verifikasi DKLH</h4>
							</div>
							<div class="timeline-body">
								<p>Data yang telah dinyatakan valid oleh KPH akan masuk kepada Dinas Kehutanan dan Lingkungan Hidup Provinsi Bali untuk menunggu persetujuan.</p>
							</div>
							<div class="timeline-footer bg-warning">
								<p class="text-left">dilakukan oleh Admin DKLH</p>
							</div>
						</div>
					</div>

					<span class="timeline-label">
						<span class="badge badge-primary badge-lg">TAHAP 5</span>
					</span>
					<div class="timeline-item">
						<div class="timeline-point timeline-point-success">
							<i class="fa fa-flag"></i>
						</div>
						<div class="timeline-event">
							<div class="timeline-heading">
								<h4 class="timeline-title">Selesai</h4>
							</div>
							<div class="timeline-body">
								<p>Data yang telah dinyatakan valid oleh KPH dan DKLH akan tayang pada website WanaSmart dan dapat diakses oleh publik.</p>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
	-->
</div>

<script>
    var x = document.getElementById("lat");
    var y = document.getElementById("lng");
    var myLatLng;
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(posisi);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }

    function posisi(position) {
        x.value = position.coords.latitude;
        y.value = position.coords.longitude;
        myLatLng = {
            lat: position.coords.latitude
            , lng: position.coords.longitude
        };
        myMap();
    }

    function myMap() {
        var mapProp = {
            center: myLatLng
            , zoom: 18
            , mapTypeId: google.maps.MapTypeId.HYBRID
        };
        var peta = new google.maps.Map(document.getElementById("googleMap"), mapProp);
        var marker = new google.maps.Marker({
            position: myLatLng
            , map: peta
            , title: "Lokasi Anda!"
        });
    }

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

    function pilihkab() {
        var kab = document.getElementById('kode_kab').value;
        var kec = document.getElementById('kode_kec');

        var nama_kab = document.getElementById('nama_kab');
        var temp = document.getElementById('kode_kab');
        nama_kab.value = temp.options[temp.selectedIndex].text;


        kec.disabled = false;
        kec.innerHTML = "";

        var xmlhttp = new XMLHttpRequest();
        var url = "https://dev.farizdotid.com/api/daerahindonesia/kecamatan?id_kota=" + kab;
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var opt = document.createElement('option');
                opt.value = '0';
                opt.innerHTML = 'Silahkan Pilih Kecamatan';
                kec.appendChild(opt);

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

    function pilihkec() {
        var kec = document.getElementById('kode_kec').value;
        var kel = document.getElementById('kode_kel');
        kel.disabled = false;
        kel.innerHTML = "";

        var nama_kec = document.getElementById('nama_kec');
        var temp = document.getElementById('kode_kec');
        nama_kec.value = temp.options[temp.selectedIndex].text;

        var xmlhttp = new XMLHttpRequest();
        var url = "https://dev.farizdotid.com/api/daerahindonesia/kelurahan?id_kecamatan=" + kec;
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var opt = document.createElement('option');
                opt.value = '0';
                opt.innerHTML = 'Silahkan Pilih Kelurahan/Desa';
                kel.appendChild(opt);

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

    function pilihkel() {
        var nama_kel = document.getElementById('nama_kel');
        var temp = document.getElementById('kode_kel');
        nama_kel.value = temp.options[temp.selectedIndex].text;
    }

</script>

@endsection
