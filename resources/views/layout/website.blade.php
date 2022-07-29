<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>@yield('judul')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="{{ asset('template/') }}/assets/img/logo.svg">
  <link href="{{ asset('template/') }}/https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
  <link href="{{ asset('template/') }}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{ asset('template/') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('template/') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('template/') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ asset('template/') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ asset('template/') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="{{ asset('template/') }}/assets/css/style.css" rel="stylesheet">
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="logo">
        <a href="/"><img src="{{ asset('template/') }}/assets/img/logo2.svg" alt="" class="img-fluid"></a>
    </div>
      <nav id="navbar" class="navbar">
        <ul>
         <li>
                <a class="nav-link scrollto">
                    Telp.Sekolah : @foreach ($data as $item) {{ $item->telp_sekolah}}@endforeach
                </a>
            </li>
          <li><a class="nav-link scrollto" href="">E-Mail :   @foreach ($data as $item) {{ $item->email_sekolah}}@endforeach </a></li>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Profil</a></li>
          <li><a class="nav-link scrollto" href="#kontak">Kontak</a></li>
          <li><a class="getstarted scrollto" href="{{route('login')}}"> Login </a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header>
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="row gy-6">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <a href="/"><img src="{{ asset('template/') }}/assets/img/logonama.svg"  alt="" class="img-fluid"></a>
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
            <a href="{{ route('ppdb.index') }}" class="btn-get-started scrollto" >Daftar</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="{{ asset('template/') }}/assets/img/logo.svg" style="width: 50%; " class="img-fluid animated" alt="">
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero -->
  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
        <div class="row justify-content-between">
          {{--  <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
            <img src="{{ asset('template/') }}/assets/img/about-img.svg" class="img-fluid" alt="" data-aos="zoom-in">
          </div>  --}}
          <div class="col-lg-12 pt-5 pt-lg-0">
            <h3 data-aos="fade-up" data-aos-delay="100" style="font-family: Comic Sans MS;text-align:center  ">Profil MA Miftahul Ulum Melirang</h3>
            <h4 data-aos="fade-up" data-aos-delay="100" style="font-family: Comic Sans MS;text-align:center  ">

                @foreach ($data as $item)
                    Tahun Pelajaran {{ $item->thn_ajaran}}
                @endforeach
            </h4>
            <div class="row">

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-file"></i>
                <h4>Visi Sekolah</h4>
                <p style="text-align:justify; text-justify:inter-word; font-family: Comic Sans MS;">@foreach ($data as $item){{ $item->visi}}@endforeach</p>
              </div>
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-file"></i>
                <h4>Misi Sekolah</h4>
                <p style="text-align:justify; text-justify:inter-word; font-family: Comic Sans MS;">@foreach ($data as $item){{ $item->misi}}@endforeach</p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End About Section -->
  </main>
  <!-- End #main -->
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div id ="kontak" class="container">
        <div class="row">
          <div class="col-lg-9 col-md-6 footer-contact">

            <h3 style="font-family: Comic Sans MS">@foreach ($data as $item){{ $item->nama_sekolah}}@endforeach</h3>
            <table class="isi2">
                <tr style="font-family: Comic Sans MS; line-height:30px">
                    <td width="250px"><strong >Kepala Sekolah</strong></td>
                    <td  width="500px"><strong >: @foreach ($data as $item){{  $item->nama_kepsek }}@endforeach</strong></td>
                </tr>
                <tr style="font-family: Comic Sans MS; line-height:30px">
                    <td width="250px"><strong >NPSN Sekolah</strong></td>
                    <td width="500px"><strong >: @foreach ($data as $item){{  $item->npsn_sekolah }}@endforeach</strong></td>
                </tr>
                <tr style="font-family: Comic Sans MS; line-height:30px">
                    <td width="250px"><strong >NSM Sekolah</strong></td>
                    <td width="500px"><strong >: @foreach ($data as $item){{  $item->nsm_sekolah }}@endforeach</strong></td>
                </tr>
                <tr style="font-family: Comic Sans MS; line-height:30px">
                    <td width="250px"><strong >Alamat Sekolah</strong></td>
                    <td width="700px"><strong >: @foreach ($data as $item){{  $item->alamat_sekolah }}@endforeach</strong></td>
                </tr>
                <tr style="font-family: Comic Sans MS; line-height:30px">
                    <td width="250px"><strong >Akreditasi Sekolah</strong></td>
                    <td width="500px"><strong >: @foreach ($data as $item){{  $item->akreditasi }}@endforeach</strong></td>
                </tr>
                <tr style="font-family: Comic Sans MS; line-height:30px">
                    <td width="250px"><strong >Status Sekolah</strong></td>
                    <td width="500px"><strong >: @foreach ($data as $item){{  $item->status }}@endforeach</strong></td>
                </tr>
            </table>
            <p>

                <div class="social-links mt-3">
                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                  </div>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">Profil</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Ninestars</span></strong>. All Rights Reserved
      </div>
      <div class="credits">

         by <a href="#">Kerja Praktek Universitas Qomaruddin</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('template/') }}/assets/vendor/aos/aos.js"></script>
  <script src="{{ asset('template/') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('template/') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ asset('template/') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{ asset('template/') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{ asset('template/') }}/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('template/') }}/assets/js/main.js"></script>
  @include('sweetalert::alert')
</body>

</html>
