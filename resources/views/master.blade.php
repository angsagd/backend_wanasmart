<!DOCTYPE html>
<html lang="en">
  @include('partials/head')

<body class="hold-transition skin-danger dark-sidebar sidebar-mini">
<div class="wrapper">

  @include('partials/navbar')
  
  
  <!-- Left side column. contains the logo and sidebar -->
  @include('partials/sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container">
		<!-- Content Header (Page header) -->	  
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">@yield('title')</h3>
				</div>
			</div>
		</div>

		<div class="content">

			<!-- ALERT SUKSES -->
			@if(Session::get('status') == 'sukses')
			<div class="alert alert-success alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

				<h4><i class="icon fa fa-check"></i>Berhasil</h4>
				{{Session::get('pesan')}}
			</div>
			@endif

			<!-- ALERT SUKSES -->
			@if(Session::get('status') == 'gagal')
			<div class="alert alert-danger alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

				<h4><i class="icon fa fa-warning"></i>Terjadi Kesalahan</h4>
				{{Session::get('pesan')}}
			</div>
			@endif


		<!-- KONTEN DISINI -->
		@yield('content')
		<!-- BATAS KONTEN -->
		</div>
	  </div>
  </div>

  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
        
    </div>
	  &copy; 2022 <a href="https://www.dklh.baliprov.go.id/"><b>WANA SMART</b>, Dinas Kehutanan dan Lingkungan Hidup Provinsi Bali</a>. All Rights Reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-light">
	  
	<div class="rpanel-title"><span class="btn pull-right"><i class="ion ion-close" data-toggle="control-sidebar"></i></span> </div>  
    
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
          <div class="flexbox">
			<a href="javascript:void(0)" class="text-grey">
				<i class="ti-more"></i>
			</a>	
			
     </div>
  </aside>
  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  
</div>
<!-- ./wrapper -->
  	
	 
	
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvxWP7CW5hK9fcdLRYCRUz2vKWWWJC8Go"></script>

	<!-- jQuery 3 -->
	<script src="{{asset('assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js')}}"></script>
	
	<!-- popper -->
	<script src="{{asset('assets/vendor_components/popper/dist/popper.min.js')}}"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="{{asset('assets/vendor_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
	
	<!-- SlimScroll -->
	<script src="{{asset('assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	
	<!-- FastClick -->
	<script src="{{asset('assets/vendor_components/fastclick/lib/fastclick.js')}}"></script>
	
	<!-- UltimatePro Admin App -->
	<script src="{{asset('js/template.js')}}"></script>
	
	<!-- UltimatePro Admin for demo purposes -->
	<script src="{{asset('js/demo.js')}}"></script>

	<script src="https://accounts.google.com/gsi/client" async defer></script>

	<script src="{{asset('assets/vendor_components/horizontal-timeline/js/horizontal-timeline.js')}}"></script>

	<!-- This is data table -->
  <script src="{{asset('assets/vendor_components/datatable/datatables.min.js')}}"></script>
	
	<!-- UltimatePro Admin for Data Table -->
	<script src="{{asset('js/pages/data-table.js')}}"></script>

	<!-- UltimatePro Admin for advanced form element -->
	<script src="{{asset('js/pages/advanced-form-element.js')}}"></script>

	<!-- Select2 -->
	<script src="{{asset('assets/vendor_components/select2/dist/js/select2.full.js')}}"></script>

	<!-- Magnific popup JavaScript -->
  <script src="{{asset('assets/vendor_components/Magnific-Popup-master/dist/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('assets/vendor_components/Magnific-Popup-master/dist/jquery.magnific-popup-init.js')}}"></script>
		
</body>
</html>
