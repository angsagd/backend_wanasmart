<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>WANA SMART</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta name="google-signin-client_id" content="438813564258-cdl5dne36849c6ng0cle0qe4kk0a2ad8.apps.googleusercontent.com">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('landing/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('landing/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('landing/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('landing/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('landing/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('landing/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('landing/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('landing/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Bootslander - v4.7.1
  * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.html"><span>WANA SMART</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      @include('landing.navbar')

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
            <h1>Sistem Tata Kelola Terintegrasi <span>WANA SMART</span></h1>
            <h2>Dinas Kehutanan dan Lingkungan Hidup Provinsi Bali</h2>
            <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto">Ketahui Lebih Jauh</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
          <img src="{{asset('landing/assets/img/hero-img.png')}}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
            <h3>PELAYANAN PUBLIK</h3>
            <p>Pelayanan publik adalah amanah dan tanggung jawab pemerintah, dalam hal ini terkhusus dalam pengelolaan hutan dan lingkungan hidup, maka sudah perlu disusun sebuah sistem tata kelola kehutanan dan lingkungan hidup yang efektif dan efisien, transparan dan akuntable dalam meningkatkan Pelayanan Publik terpadu yang Cepat, Pasti dan Murah.</p>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon"><i class="bx bx-shield"></i></div>
              <h4 class="title"><a href="">Smart Regulation</a></h4>
              <p class="description">Sebuah aturan yang secara holistic sudah menampung seluruh pola aturan kegiatan kehutanan dan lingkungan hidup. Diharapkan hanya dengan satu rujukan aturan yang isinya merupakan intisari aturan diatasnya maka kegiatan kehutanan dan lingkungan hidup lebih bisa dilaksanakan secara efektif dan efisien</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon"><i class="bx bx-mobile"></i></div>
              <h4 class="title"><a href="">Smart Application</a></h4>
              <p class="description">Sebuah aplikasi yang bisa menampung semua kebutuhan masyarakat di bidang kehutanan dan lingkungan hidup</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon"><i class="bx bx-data"></i></div>
              <h4 class="title"><a href="">Smart Data</a></h4>
              <p class="description">Mendorong keterbukaan dan transparansi data sehingga tercipta perencanaan dan perumusan kebijakan pembangunan berbasis data, termasuk mendukung Sistem Statistik Nasional (SSN).</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Features Section ======= -->
    <!-- <section id="features" class="features">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Pelayanan Publik</h2>
          <p>FITUR</p>
        </div>

        <div class="row" data-aos="fade-left">
          <div class="col-lg-3 col-md-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
              <i class="ri-seedling-fill" style="color: #ffbb2c;"></i>
              <h3><a href="">Permohonan Bibit</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <i class="ri-stackshare-fill" style="color: #5578ff;"></i>
              <h3><a href="">Perhutanan Sosial</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="150">
              <i class="ri-team-fill" style="color: #e80368;"></i>
              <h3><a href="">Penyuluhan dan Bimbingan Teknis</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
              <i class="ri-ticket-fill" style="color: #e361ff;"></i>
              <h3><a href="">E-Ticketing</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="250">
              <i class="ri-pencil-ruler-fill" style="color: #47aeff;"></i>
              <h3><a href="">Pendampingan Pengukuran</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
              <i class="ri-database-2-fill" style="color: #ffa76e;"></i>
              <h3><a href="">Permohonan Data</a></h3>
            </div>
          </div>

      </div>
    </section> --><!-- End Features Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row" data-aos="fade-up">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-tree-fill"></i>
              <span data-purecounter-start="0" data-purecounter-end="{{$jumlah_verifikasi}}" data-purecounter-duration="1" class="purecounter"></span>
              <p>Permohonan Verifikasi</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-stack-overflow"></i>
              <span data-purecounter-start="0" data-purecounter-end="{{$jumlah_terverifikasi}}" data-purecounter-duration="1" class="purecounter"></span>
              <p>Data Tervalidasi</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-file-earmark-person"></i>
              <span data-purecounter-start="0" data-purecounter-end="{{$jumlah_ps}}" data-purecounter-duration="1" class="purecounter"></span>
              <p>Perhutanan Sosial</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-bar-chart-fill"></i>
              <span data-purecounter-start="0" data-purecounter-end="{{$jumlah_rhl}}" data-purecounter-duration="1" class="purecounter"></span>
              <p>Rehabilitasi Hutan dan Lahan</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>#Galeri</h2>
          <p>Dokumentasi Kegiatan</p>
        </div>

        <div class="row g-0" data-aos="fade-left">

          @if($foto_ps->first() || $foto_rhl->first())
          @foreach($foto_ps as $f)
          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100">
              <a href="{{asset('files/foto/')}}/{{$f->path}}" class="gallery-lightbox">
                <img src="{{asset('files/foto/')}}/{{$f->path}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>
          @endforeach

          @foreach($foto_rhl as $f)
          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100">
              <a href="{{asset('files/foto/')}}/{{$f->path}}" class="gallery-lightbox">
                <img src="{{asset('files/foto/')}}/{{$f->path}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>
          @endforeach

          @else

          <div class="card">
            <div class="card-body text-center">Belum Ada Foto</div>
          </div>
          @endif


        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= F.A.Q Section ======= -->
    <section id="peraturan" class="faq section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>#Regulasi</h2>
          <p>Peraturan</p>
        </div>

        <div class="faq-list">
          <ul>
            @if($regulasi->first())
            @foreach($regulasi as $r)
            <li data-aos="fade-up">
              <i class="bx bx-folder-open icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-{{$r->id_regulasi}}">{{$r->nama_regulasi}}<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-{{$r->id_regulasi}}" class="collapse" data-bs-parent=".faq-list">
                <p>
                  {{$r->keterangan}}
                  <br>
                  <br>
                  <a target="_blank" href="{{asset($r->path_regulasi)}}">Download</a>
                </p>
              </div>
            </li>
            @endforeach
            @else
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Data regulasi kosong<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              
            </li>
            @endif

          </ul>
        </div>

      </div>
    </section><!-- End F.A.Q Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              
            </div>


          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    
    

    <!-- PANDUAN -->
    <!-- ======= PANDUAN Section ======= -->
    <section id="panduan" class="faq section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>#Tutorial</h2>
          <p>Panduan</p>
        </div>

        <div class="faq-list">
          <ul>
            @if($panduan->first())
            @foreach($panduan as $r)
            <li data-aos="fade-up">
              <i class="bx bx-folder-open icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-{{$r->id_panduan}}">{{$r->nama_panduan}}<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-{{$r->id_panduan}}" class="collapse" data-bs-parent=".faq-list">
                <p>
                  {{$r->keterangan}}
                  <br>
                  <br>
                  <a target="_blank" href="{{asset($r->path_panduan)}}">Download</a>
                </p>
              </div>
            </li>
            @endforeach
            @else
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Data panduan kosong<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              
            </li>
            @endif

          </ul>
        </div>

      </div>
    </section><!-- End F.A.Q Section -->

    
  </main><!-- End #main -->

  @include('landing.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('landing/assets/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{asset('landing/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('landing/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('landing/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('landing/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('landing/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="https://accounts.google.com/gsi/client" async defer></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('landing/assets/js/main.js')}}"></script>

  <script type="text/javascript">
    function proseslogin(){
      document.getElementById("loginform").submit();
    }
  </script>

</body>

</html>