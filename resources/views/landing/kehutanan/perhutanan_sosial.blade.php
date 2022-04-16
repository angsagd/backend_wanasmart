@extends('landing.masterlanding')
@section('title','Perhutanan Sosial')
@section('link')
<ol>
    <li>Kehutanan</li>
    <li>Perhutanan Sosial</li>
</ol>
@endsection
@section('content')

<div class="row">
    <div class="card">
        <div class="card-header">
            <center>
                <b>FORMULIR PENDATAAN PERHUTANAN SOSIAL</b>
            </center>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="card-body">
                <form>
                    <div class="form-group row mt-4">
                        <label class="col-sm-3 col-form-label">Nama Kelompok</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="nama_kelompok" placeholder="Nama Kelompok">
                        </div>
                    </div>

                    <div class="form-group row mt-3">
                        <label class="col-sm-3 col-form-label">Alamat</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="nama_kelompok" placeholder="Alamat">
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label class="col-sm-3 col-form-label">Kabupaten / Kota</label>
                        <div class="col-sm-9">
                            <select class="form-control">
                                <option selected disabled>Pilih</option>
                                <option>Badung</option>
                                <option>Bangli</option>
                                <option>Buleleng</option>
                                <option>Denpasar</option>
                                <option>Gianyar</option>
                                <option>Jembrana</option>
                                <option>Klungkung</option>
                                <option>Karangasem</option>
                                <option>Tabanan</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row mt-3">
                        <label class="col-sm-3 col-form-label">Kecamatan</label>
                        <div class="col-sm-9">
                            <select class="form-control">
                                <option>---</option>
                                <option>---</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row mt-3">
                        <label class="col-sm-3 col-form-label">Kelurahan / Desa</label>
                        <div class="col-sm-9">
                            <select class="form-control">
                                <option>---</option>
                                <option>---</option>
                            </select>
                        </div>
                    </div>

                    <hr>

                    <div class="form-group row mt-3">
                        <label class="col-sm-3 col-form-label">Luas</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="nama_kelompok" placeholder="Luas">
                        </div>
                    </div>

                    <div class="form-group row mt-3">
                        <label class="col-sm-3 col-form-label">Foto</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" name="nama_kelompok" placeholder="Luas">
                        </div>
                    </div>

                    <div class="form-group row mt-3">
                        <label class="col-sm-3 col-form-label">Potensi HHBK</label>
                        <div class="col-sm-9" id='rowhhbk'>
                            <div class="row">
                                <div class="col-sm-5 mt-2">
                                    <input type="text" class="form-control" name="nama_kelompok" placeholder="Potensi">
                                </div>
                                <div class="col-sm-5 mt-2">
                                    <input type="text" class="form-control" name="nama_kelompok" placeholder="Satuan">
                                </div>
                                <div class="col-sm-2 mt-2">
                                    <button class="btn btn-primary" type="button" onclick="tambahhhbk()">+</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script type="text/javascript">
                        function tambahhhbk() {
                            var lokasi = document.getElementById('rowhhbk');

                            var FN = document.createElement("input");
                            FN.setAttribute("type", "text");
                            FN.setAttribute("name", "FullName");
                            FN.setAttribute("placeholder", "Full Name");
                            FN.classList.add('form-control');
                            FN.classList.add('mt-3');

                            lokasi.appendChild(FN);
                        }

                    </script>

                    <div class="form-group row mt-3">
                        <label class="col-sm-3 col-form-label">Jasa Lingkungan</label>
                        <div class="col-sm-9">
                            <textarea class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="form-group row mt-3">
                        <label class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9">
                            <button class="btn btn-primary btn-block" style="width:40%">Simpan</button>
                            <button class="btn btn-danger btn-block" style="width:40%">Keluar</button>
                        </div>

                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection
