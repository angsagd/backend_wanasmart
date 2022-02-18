<header class="main-header">
    <!-- Logo -->
    <a href="index.html" class="logo">
	  <div class="logo-mini">
		  <span class="light-logo"><img src="{{asset('foto/logowana.png')}}" alt="logo"></span>
		  <span class="dark-logo"><img src="{{asset('foto/logowana.png')}}" alt="logo"></span>
	  </div>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
	  <div>
		  <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
			<i class="ti-align-left"></i>
		  </a>
		  

		
	  </div>
		
      <div class="navbar-custom-menu r-side">
        <ul class="nav navbar-nav">
		  
		  <!-- User Account-->
      <li class="dropdown user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <img src="{{Session::get('photo')}}" class="user-image rounded-circle" alt="User Image">
        </a>
        <ul class="dropdown-menu animated flipInX">
          <!-- User image -->
          <li class="user-header bg-img" style="background-image: url(../images/user-info.jpg)" data-overlay="3">
		  <div class="flexbox align-self-center">					  
		  	<img src="{{Session::get('photo')}}" class="float-left rounded-circle" alt="User Image">					  
			<h4 class="user-name align-self-center">
			  <span>{{Session::get('nama')}}</span>
			  <small>{{Session::get('email')}}</small>
			</h4>
		  </div>
          </li>
          <!-- Menu Body -->
          <li class="user-body">
		    <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-person"></i>Profil</a>
				<a class="dropdown-item" href="{{url('keluar')}}"><i class="ion-log-out"></i> Logout</a>
			<div class="dropdown-divider"></div>
			<div class="p-10"><a href="javascript:void(0)" class="btn btn-sm btn-rounded btn-success">View Profile</a></div>
          </li>
        </ul>
      </li>	
			
		  
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-cog fa-spin"></i></a>
          </li>
			
        </ul>
      </div>
    </nav>
  </header>