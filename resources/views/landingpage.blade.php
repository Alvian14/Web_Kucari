<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Landing Page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  
  <!-- =======================================================
  * Template Name: Impact
  * Updated: Jan 30 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>
  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="/" class="logo d-flex align-items-center">
        <h1>KuCari<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Beranda</a></li>
          <li><a href="#informasi-aplikasi">Informasi aplikasi</a></li>
          <li><a href="#footer">Tentang kami</a></li>
          <!-- <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="blog.html">Blog</a></li> -->
          <li class="dropdown"><a href="#"><span>Postingan</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="kehilangan">Kehilangan</a></li>
              <li><a href="menemukan">Menemukan</a></li>
            </ul>
          </li>
          <li><a class="getstarted" href="{{ route('user') }}">Masuk</a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start"> <br>
        <h2 style="font-family: Montserrat; font-weight: bold;">Kehilangan Atau Menemukan Sesuatu?</h2>
        <h2 style="font-family: Montserrat; font-weight: bold; color: #259E73; margin-top: -5px;">KuCari Solusinya!</h2>
        <br>   
        <p>Kita dapat melaporkan dan menemukan barang yang <br> hilang dengan aplikasi KuCari.</p>
        <br> <br>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#informasi-aplikasi" class="btn-get-started">Mulai</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
        <img src="assets/img/logo.png" class="img-fluid aos-init aos-animate" alt="" data-aos="zoom-out" data-aos-delay="100" style="float: right; max-width: 400px;">
        </div>
      </div>
    </div>

    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">
          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100"> 
            </div>
          </div>
          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
        </div>
      </div>
    </div>

    </div>
  </section>
  <main id="main">

  <section id="informasi-aplikasi" class="about">
    <div class="container position-relative">
      <div class="section-header">
      <h2>Informasi Aplikasi</h2>
          <p>APA YANG DAPAT KITA LAKUKAN?</p>
          <div>Kita Dapat Membantu Ratusan Orang Dalam <br> Mencari Dan Menemukan Barang Hilang.</div>
      </div>
        <div class="row gy-5" data-aos="fade-in">
            <div class="col-lg-6 order-2 order-lg-1">
                <img src="assets/img/bundar-03.png" class="small-image img-fluid aos-init aos-animate" alt="" data-aos="zoom-out" data-aos-delay="100" style="float: left; max-width: 400px;">
            </div>
              <div class="col-lg-6 order-1 order-lg-2 d-flex flex-column justify-content-center text-center text-lg-start"> <br>
              <div style="text-align: justify;">
                    <p>Dengan sistem informasi berbasis web yang memudahkan masyarakat menemukan barang hilang tanpa harus datang ke kantor polisi, partisipasi aktif masyarakat dalam memberikan informasi dan bantuan meningkat melalui aplikasi mobile. Hal ini tidak hanya mempermudah pelaporan barang yang hilang, tetapi juga menggalakkan kerjasama antara masyarakat dan kepolisian. Sebagai hasilnya, keberadaan aplikasi ini tidak hanya memberikan kemudahan teknis, tetapi juga meningkatkan rasa aman masyarakat karena mereka memiliki platform yang efektif dan mudah digunakan untuk melaporkan kehilangan barang.</p>
                </div>
          </div>
      </div>
  </section>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="/" class="logo d-flex align-items-center">
            <span>KuCari.</span>
          </a>
          <p style="text-align: justify;">
              KuCari merupakan sebuah platform berbasis mobile dan web yang mana dirancang untuk membantu pengguna menemukan barang yang hilang atau yang telah ditemukan. Aplikasi ini menyediakan sarana yang memudahkan pengguna untuk melaporkan barang yang hilang atau menemukan barang yang tercecer, serta memberikan alat pencarian dan manajemen untuk memfasilitasi proses pencarian dan penemuan barang.
          </p>
              <div class="social-links d-flex mt-4">
                <a href="https://www.instagram.com/kucari2024" class="instagram" target="_blank">
                    <i class="bi bi-instagram"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-2 col-6 footer-links">
          <!-- jangan dihapus -->
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <!-- jangan dihapus -->
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Hubungi Kami</h4>
            <a href="mailto:kucariapps@gmail.com" style="color: white; text-decoration: none;">
              <strong style="display: inline-block; width: 70px;">E-Mail</strong>: kucariapps@gmail.com
            </a>
        </div>

    <div class="container mt-4">
      <div class="copyright">
        Copyright &copy; 2024 <strong><span>KuCari By Hidden Project. </span></strong> All Rights Reserved
      </div>
    </div>

  </footer>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>