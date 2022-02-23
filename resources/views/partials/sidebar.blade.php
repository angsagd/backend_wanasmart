<aside class="main-sidebar">
  
  

  <!-- sidebar-->
  <section class="sidebar">
    
    <!-- sidebar menu-->
    <ul class="sidebar-menu" data-widget="tree">

    	<li class="header nav-small-cap">MAIN MENU</li>

    	<!-- MENU DASHBOARD -->
			<li id="dashboard" class="">
	        <a href="{{url('/')}}">
	          <i class="ti-dashboard"></i>
	          <span>Dashboard</span>
	        </a>
	    </li>  		

    	@if(in_array('Dasar',Session::get('hakakses')))
		  <li class="header nav-small-cap">PERSONAL</li>
			
	    <li id="permohonan_bibit" class="">
	        <a href="{{url('mohon-bibit')}}">
	          <i class="ti-hand-open"></i>
	          <span>Permohonan Bibit</span>
	        </a>
	    </li>
	    @endif  

	    @if(Session::get('role') == 'Administrator')
	    <li class="header nav-small-cap">ADMINISTRATOR</li>
	    @elseif(Session::get('role') == 'Operator')
	    <li class="header nav-small-cap">OPERATOR</li>
	    @endif

	    @if(in_array('Master Data',Session::get('hakakses')))
	    <li class="treeview menu-open">
          <a href="#">
            <i class="ti-list"></i>
            <span>Master Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          	@if(in_array('Pengguna',Session::get('hakakses')))
            <li id="Pengguna"  class=""><a href="{{url('pengguna')}}"><i class="ti-user"></i>Pengguna</a></li>
            @endif
            @if(in_array('Role',Session::get('hakakses')))
            <li id="Role"><a href="{{url('role')}}"><i class="ti-shield"></i>Role</a></li>
            @endif
            @if(in_array('Menu',Session::get('hakakses')))
            <li id="Menu"><a href="{{url('menu')}}"><i class="ti-layout-grid4"></i>Menu</a></li>
            @endif
			    </ul>
			</li>
			@endif
	
      <!-- MENU LOGOUT -->
			<li>
        <a href="{{url('keluar')}}">
          <i class="ti-power-off"></i>
					<span>Log Out</span>
        </a>
	    </li> 

    </ul>
  </section>


</aside>


<script type="text/javascript">
	var element = document.getElementById('{{Session::get("menu")}}');
	element.classList.add("active");
</script>