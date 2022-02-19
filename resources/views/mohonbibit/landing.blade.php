@extends('master')
@section('title','PERMOHONAN BIBIT')
@section('content')

<div class="row">
	

	<div class="col-lg-6">
		<div class="box">
			<div class="box-body ribbon-box">
				<div class="ribbon ribbon-primary">PROSES PERMOHONAN</div>
				
				<!-- TIMELINE -->
				<div class="timeline timeline-line-dotted">

					<!-- TAHAP 1 -->
					<span class="timeline-label">
						<span class="badge badge-primary badge-lg">TAHAP 1</span>
					</span>
					<div class="timeline-item">
						<div class="timeline-point timeline-point-success">
							<i class="fa fa-user"></i>
						</div>
						<div class="timeline-event">
							<div class="timeline-heading">
								<h4 class="timeline-title">Pemenuhan Persyaratan</h4>
							</div>
							<div class="timeline-body">
								<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment.</p>
							</div>
							<div class="timeline-footer bg-danger">
								<p class="text-right">Dilaksanakan oleh pemohon</p>
							</div>
						</div>
					</div>

					<!-- TAHAP 2 -->
					<span class="timeline-label">
						<span class="badge badge-primary badge-lg">TAHAP 2</span>
					</span>
					<div class="timeline-item">
						<div class="timeline-point timeline-point-success">
							<i class="fa fa-paper-plane"></i>
						</div>
						<div class="timeline-event">
							<div class="timeline-heading">
								<h4 class="timeline-title">Pengajuan Permohonan</h4>
							</div>
							<div class="timeline-body">
								<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment.</p>
							</div>
							<div class="timeline-footer bg-danger">
								<p class="text-right">Dilaksanakan secara online oleh pemohon</p>
							</div>
						</div>
					</div>

					<!-- TAHAP 3 -->
					<span class="timeline-label">
						<span class="badge badge-primary badge-lg">TAHAP 3</span>
					</span>
					<div class="timeline-item">
						<div class="timeline-point timeline-point-success">
							<i class="fa fa-list"></i>
						</div>
						<div class="timeline-event">
							<div class="timeline-heading">
								<h4 class="timeline-title">Verifikasi Permohonan</h4>
							</div>
							<div class="timeline-body">
								<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment.</p>
							</div>
							<div class="timeline-footer bg-warning">
								<p class="text-right">Dilaksanakan oleh DKLH Provinsi Bali</p>
							</div>
						</div>
					</div>

					<!-- TAHAP 4 -->
					<span class="timeline-label">
						<span class="badge badge-primary badge-lg">TAHAP 4</span>
					</span>
					<div class="timeline-item">
						<div class="timeline-point timeline-point-success">
							<i class="fa fa-check"></i>
						</div>
						<div class="timeline-event">
							<div class="timeline-heading">
								<h4 class="timeline-title">Pemenuhan Permohonan</h4>
							</div>
							<div class="timeline-body">
								<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment.</p>
							</div>
							<div class="timeline-footer bg-warning">
								<p class="text-right">Dilaksanakan oleh DKLH Provinsi Bali</p>
							</div>
						</div>
					</div>

					<!-- TAHAP 5 -->
					<span class="timeline-label">
						<span class="badge badge-primary badge-lg">TAHAP 5</span>
					</span>
					<div class="timeline-item">
						<div class="timeline-point timeline-point-success">
							<i class="fa fa-car"></i>
						</div>
						<div class="timeline-event">
							<div class="timeline-heading">
								<h4 class="timeline-title">Pengambilan Bibit</h4>
							</div>
							<div class="timeline-body">
								<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment.</p>
							</div>
							<div class="timeline-footer bg-danger">
								<p class="text-right">Dilaksanakan oleh pemohon</p>
							</div>
						</div>
					</div>

					<!-- TAHAP 6 -->
					<span class="timeline-label">
						<span class="badge badge-primary badge-lg">TAHAP 6</span>
					</span>
					<div class="timeline-item">
						<div class="timeline-point timeline-point-success">
							<i class="fa fa-smile-o"></i>
						</div>
						<div class="timeline-event">
							<div class="timeline-heading">
								<h4 class="timeline-title">Survey Kepuasan Pelayanan</h4>
							</div>
							<div class="timeline-body">
								<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment.</p>
							</div>
							<div class="timeline-footer bg-danger">
								<p class="text-right">Dilaksanakan oleh pemohon</p>
							</div>
						</div>
					</div>
					
					
			
					
					
				</div>
				<!-- END TIMELINE -->

			</div> <!-- end box-body-->
		</div>
	</div>

	<div class="col-lg-6">
		<div class="box">
			<div class="box-body ribbon-box">
				<div class="ribbon ribbon-success">KETERSEDIAAN BIBIT</div>
				<p class="mb-0">Quisque nec turpis at urna dictum luctus. Suspendisse convallis dignissim eros at volutpat. In egestas mattis dui. Aliquam mattis dictum aliquet. Nulla sapien mauris, eleifend et sem ac, commodo dapibus odio.</p>
			</div> <!-- end box-body-->
		</div>

		<!-- FORMULIS PERMOHONAN -->
		<div class="box">
			<div class="box-body ribbon-box">
				<div class="ribbon ribbon-success">AJUKAN PERMOHONAN</div>
				<form class="form">
					<div class="box-body">
						
						<hr class="my-15">
						<div class="row">
						  <div class="col-md-6">
							<div class="form-group">
							  <label>First Name</label>
							  <input type="text" class="form-control" placeholder="First Name">
							</div>
						  </div>
						  <div class="col-md-6">
							<div class="form-group">
							  <label>Last Name</label>
							  <input type="text" class="form-control" placeholder="Last Name">
							</div>
						  </div>
						</div>
						<div class="row">
						  <div class="col-md-6">
							<div class="form-group">
							  <label>E-mail</label>
							  <input type="text" class="form-control" placeholder="E-mail">
							</div>
						  </div>
						  <div class="col-md-6">
							<div class="form-group">
							  <label>Contact Number</label>
							  <input type="text" class="form-control" placeholder="Phone">
							</div>
						  </div>
						</div>
						
						<div class="form-group">
						  <label>Company</label>
						  <input type="text" class="form-control" placeholder="Company Name">
						</div>
						<div class="row">
						  <div class="col-md-6">
							<div class="form-group">
							  <label>Interested in</label>
							  <select class="form-control">
								<option>Interested in</option>
								<option>design</option>
								<option>development</option>
								<option>illustration</option>
								<option>branding</option>
								<option>video</option>
							  </select>
							</div>
						  </div>
						  <div class="col-md-6">
							<div class="form-group">
							  <label>Budget</label>
							  <select class="form-control">
								<option>Budget</option>
								<option>less than 5000$</option>
								<option>5000$ - 10000$</option>
								<option>10000$ - 20000$</option>
								<option>more than 20000$</option>
							  </select>
							</div>
						  </div>
						</div>
						<div class="form-group">
						  <label>Select File</label>
						  <label class="file">
							<input type="file" id="file">
						  </label>
						</div>
						<div class="form-group">
						  <label>About Project</label>
						  <textarea rows="5" class="form-control" placeholder="About Project"></textarea>
						</div>
					</div>
					<!-- /.box-body -->
					<div class="box-footer">
						<button type="button" class="btn btn-warning btn-outline mr-1">
						  <i class="ti-trash"></i> Cancel
						</button>
						<button type="submit" class="btn btn-primary btn-outline">
						  <i class="ti-save-alt"></i> Save
						</button>
					</div>  
				</form>
			</div>
		</div>
		<!-- END FORMULIR PERMOHONAN -->

	</div>



</div>

@endsection