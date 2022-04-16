<aside class="main-sidebar">



    <!-- sidebar-->
    <section class="sidebar">

        <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree">

            <li class="header nav-small-cap">{{Session::get('role')}}</li>
            <hr>

            <!-- MENU DASHBOARD -->
            <li id="dashboard" class="">
                <a href="{{url('dashboard')}}">
                    <i class="ti-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            @if(Session::get('role') == "Pengguna")
            <!-- MENU PERHUTANAN -->
            <li class="treeview">
                <a href="#">
                    <i class="ti-list"></i>
                    <span>Perhutanan</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li id="PerhutananSosial" class=""><a href="{{url('perhutanan_sosial')}}"><i class="ti-plus"></i>Perhutanan Sosial</a></li>
                    <li id="RHL"><a href="{{url('list_rhl')}}"><i class="ti-plus"></i>Rehabilitasi Hutan Lahan</a></li>
                    <!-- <li id="perijinan"><a href="{{url('rhl')}}"><i class="ti-plus"></i>Perijinan</a></li> -->
                </ul>
            </li>
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
                    <li id="Pengguna" class=""><a href="{{url('pengguna')}}"><i class="ti-user"></i>Pengguna</a></li>
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

            <!-- MENU ADMIN KEHUTANAN -->
            @if(in_array('Kehutanan',Session::get('hakakses')))
            <li class="treeview menu-open">
                <a href="#">
                    <i class="ti-map"></i>
                    <span>Kehutanan</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    @if(in_array('Pemilahan Data',Session::get('hakakses')))
                    <li id="Pengguna" class=""><a href="{{url('pemilahan_perhutanan_sosial')}}"><i class="ti-menu"></i>Pemilahan Data</a></li>
                    @endif
                    @if(in_array('Verifikasi KPH',Session::get('hakakses')))
                    <li id="Role"><a href="{{url('list_verifikasi_kph')}}"><i class="ti-shield"></i>Verifikasi KPH</a></li>
                    @endif
                    @if(in_array('Verifikasi Dinas',Session::get('hakakses')))
                    <li id="Menu"><a href="{{url('list_verifikasi_dinas')}}"><i class="ti-layout-grid4"></i>Verifikasi Dinas</a></li>
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
