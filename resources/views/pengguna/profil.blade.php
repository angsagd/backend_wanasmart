@extends('master')
@section('title','PROFIL')
@section('content')
<div class="row">
	<div class="col-12 col-lg-5 col-xl-4">
		<!-- FOTO PROFIL -->
		<div class="box box-inverse bg-img" style="background-image: url(../../images/gallery/full/1.jpg);" data-overlay="2">

		  <div class="box-body text-center pb-50">
			<a href="#">
			  <img class="avatar avatar-xxl avatar-bordered" src="{{$pengguna->photo}}" alt="">
			</a>
			<h4 class="mt-2 mb-0"><a class="hover-primary text-white" href="#">{{$pengguna->nama}}</a></h4>
			<span><i class="fa fa-envelope w-20"></i> {{$pengguna->email}}</span>
		  </div>

		  <ul class="box-body flexbox flex-justified text-center" data-overlay="4">
			<li>
			  <span class="opacity-60">Followers</span><br>
			  <span class="font-size-20">8.6K</span>
			</li>
			<li>
			  <span class="opacity-60">Following</span><br>
			  <span class="font-size-20">8457</span>
			</li>
			<li>
			  <span class="opacity-60">Tweets</span><br>
			  <span class="font-size-20">2154</span>
			</li>
		  </ul>
		</div>				
		<!-- END FOTO PROFIL -->
	</div>

	<div class="col-12 col-lg-7 col-xl-8">

		<!-- START BIODATA -->
		<div class="box p-15">		
						<form class="form-horizontal form-element col-12">
						  <div class="form-group row">
							<label for="inputName" class="col-sm-2 control-label">Nama</label>
							<div class="col-sm-10">
							  <input value="{{$pengguna->nama}}" type="email" class="form-control" id="inputName" placeholder="">
							</div>
						  </div>
						  <div class="form-group row">
							<label for="inputEmail" class="col-sm-2 control-label">Email</label>

							<div class="col-sm-10">
							  <input value="{{$pengguna->email}}" type="email" class="form-control" id="inputEmail" placeholder="">
							</div>
						  </div>
						  <div class="form-group row">
							<label for="inputPhone" class="col-sm-2 control-label">Telp</label>

							<div class="col-sm-10">
							  <input value="{{$pengguna->telp}}" type="tel" class="form-control" id="inputPhone" placeholder="">
							</div>
						  </div>
						  <div class="form-group row">
							<label for="inputSkills" class="col-sm-2 control-label">Alamat</label>

							<div class="col-sm-10">
							  <input value="{{$pengguna->alamat}}" type="text" class="form-control" id="inputSkills" placeholder="">
							</div>
						  </div>
						  
						  <div class="form-group row">
							<div class="ml-auto col-sm-10">
							  <button type="submit" class="btn btn-success">Submit</button>
							</div>
						  </div>
						</form>
					</div>			  
				  </div>
				  <!-- /.tab-pane -->
				</div>
		<!-- END BIODATA -->

	</div>
</div>
@endsection