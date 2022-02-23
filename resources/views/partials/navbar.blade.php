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
		    <a class="btn dropdown-item" href="" data-toggle="modal" data-target="#modal-default"><i class="ion ion-settings"></i>Role</a>
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

  <!-- MODAL -->

  <form action="{{url('rubah_role')}}" method="post">
  <div class="modal fade show" id="modal-default">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">

		  <div class="modal-header">
			<h4 class="modal-title">Rubah Role</h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">×</span></button>
		  </div>
		  
		  <div class="modal-body">
					{{csrf_field()}}
					<div class="form-group">
						<label>ID User :</label>
						<input type="text" class="form-control" value="{{Session::get('id')}}" disabled>
					</div>

					<div class="form-group">
						<label>Nama User :</label>
						<input type="text" class="form-control" value="{{Session::get('nama')}}" disabled>
					</div>
					<div class="form-group">
						<label>Role saat ini :</label>
						<input type="text" class="form-control" value="{{Session::get('role')}}" disabled>
					</div>
					<hr>
					<label>Atur ke :</label>
					<select id="role_user" name="role" class="select form-control">
								
					</select>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			<button type="submit" class="btn btn-primary float-right">Simpan</button>
		  </div>
		  
		</div>
		<!-- /.modal-content -->
	  </div>
	  <!-- /.modal-dialog -->
  </div>
  </form>

  <script type="text/javascript">
  	var xmlhttp = new XMLHttpRequest();
  	var kec = document.getElementById('role_user');
  	var url = "{{url('req_role')}}";
		xmlhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		        var myArr = JSON.parse(this.responseText);
		        for (var i = 0; i < myArr.role.length; i++) {
				      var opt = document.createElement('option');
							opt.value = myArr.role[i].id_role;
							opt.innerHTML = myArr.role[i].nama_role;
							kec.appendChild(opt);
		        }
		    }
		};
	xmlhttp.open("GET", url, true);
	xmlhttp.send();
  </script>

  <!-- END MODAL -->