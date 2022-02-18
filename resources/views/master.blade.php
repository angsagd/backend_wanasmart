<!DOCTYPE html>
<html lang="en">
  @include('partials/head')

<body class="hold-transition skin-info dark-sidebar sidebar-mini">
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

		<!-- KONTEN DISINI -->
		@yield('content')
		<!-- BATAS KONTEN -->
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
	
	
</body>
</html>
