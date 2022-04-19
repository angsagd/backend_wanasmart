<nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{url('/')}}">Beranda</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang Kami</a></li>
          <li class="dropdown"><a href="#"><span>Kehutanan</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Pemanfaatan Hutan</a></li>
              <li><a href="#">Penggunaan Hutan</a></li>
               <li><a href="{{url('perhutanan_sosial')}}">Perhutanan Sosial</a></li>
              <li><a href="#">Rehabilitasi Hutan dan Lahan (RHL)</a></li>
            </ul>
          </li>
          <!-- <li class="dropdown"><a href="#"><span>Lingkungan Hidup</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Pengelolaan Sampah</a></li>
              <li><a href="#">AMDAL</a></li>
              <li><a href="#">Indek Kualitas Lingkungan Hidup (IKLH)</a></li>
            </ul>
          </li> -->
         
          <li class="dropdown"><a href="#"><span>Layanan</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <!-- <li><a href="{{url('permohonan_pengujian')}}">Laboratorium Pengujian</a></li> -->
              <li><a href="#">Permohonan Bibit</a></li>
              <li><a href="#">Perhutanan Sosial</a></li>
              <li><a href="#">Pendampingan Pengukuran</a></li>
              <li><a href="#">Bimbingan / Penyuluhan</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#gallery">Galeri</a></li>
          <li><a class="nav-link" href="#peraturan">Peraturan</a></li>
          <li><a class="nav-link" href="#panduan">Panduan</a></li>
          
          <!-- <li><a class="nav-link scrollto" href="#features">Fitur</a></li> -->
          
          @if(Session::get('login'))
          <li><a class="nav-link" href="{{url('dashboard')}}">Dashboard</a></li>
          @else
          <li><a class="nav-link" href="{{url('masuk')}}">Login</a></li>
          @endif
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->