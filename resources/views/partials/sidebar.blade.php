<aside class="main-sidebar">
  
  

  <!-- sidebar-->
  <section class="sidebar">
    
    <!-- sidebar menu-->
    <ul class="sidebar-menu" data-widget="tree">

		  <li class="header nav-small-cap">PERSONAL</li>

	
			<!-- MENU DASHBOARD -->
			<li id="dashboard" class="">
	        <a href="{{url('/')}}">
	          <i class="ti-dashboard"></i>
	          <span>Dashboard</span>
	        </a>
	    </li>  		

	    <li id="permohonan_bibit" class="">
	        <a href="{{url('mohon-bibit')}}">
	          <i class="ti-hand-open"></i>
	          <span>Permohonan Bibit</span>
	        </a>
	    </li>  

	    <li class="header nav-small-cap">ADMINISTRATOR</li>

	    <li id="pengguna" class="treeview">
          <a href="#">
            <i class="ti-list"></i>
            <span>Master Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="display: none">
            <li class=""><a href="{{url('pengguna')}}"><i class="ti-user"></i>Pengguna</a></li>
            <li><a href="{{url('role')}}"><i class="ti-settings"></i>Role</a></li>
			    </ul>
			</li>
	
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