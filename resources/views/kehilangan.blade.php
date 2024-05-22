<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kehilangan</title>
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
  <link rel="stylesheet" href="{{ asset('assets/css/kehilangan.css')}}">
  
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
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>KuCari<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/">Dashboard</a></li>
          <li><a href="/#informasi-aplikasi">Informasi aplikasi</a></li>
          <li><a href="/#footer">Tentang kami</a></li>
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
  <!-- End Header -->
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->


    <!-- End Hero Section Hapus-->
    <!-- End About Us Section Hapus-->
        <!-- ======= Clients Section ======= -->
    <!-- End Clients Section Hapus-->
        <!-- ======= Stats Counter Section ======= -->
    <!-- End Stats Counter Section Hapus -->
        <!-- ======= Call To Action Section ======= -->
    <!-- End Call To Action Section Hapus -->
        <!-- ======= Our Services Section ======= -->
    <!-- End Service Item -->
    <!-- End Service Item -->
    <!-- End Service Item -->
    <!-- End Service Item -->
    <!-- End Service Item -->
    <!-- End Our Services Section -->
        <!-- ======= Testimonials Section ======= -->
    <!-- End testimonial item -->
    <!-- End testimonial item -->
    <!-- End testimonial item -->
    <!-- End testimonial item -->
    <!-- End testimonial item -->
    <!-- End Testimonials Section -->

    <!-- ======= Portfolio Section ======= -->
    <!-- End Portfolio Filters -->
    <!-- End Portfolio Item -->
    <!-- End Portfolio Item -->
    <!-- End Portfolio Item -->
    <!-- End Portfolio Item -->
    <!-- End Portfolio Item -->
    <!-- End Portfolio Item -->
    <!-- End Portfolio Item -->
    <!-- End Portfolio Item -->
    <!-- End Portfolio Item -->
    <!-- End Portfolio Item -->
    <!-- End Portfolio Item -->
    <!-- End Portfolio Item -->
    <!-- End Portfolio Container -->
    <!-- End Portfolio Section -->

    <!-- ======= Our Team Section ======= -->
    <!-- End Team Member -->
    <!-- End Team Member -->
    <!-- End Team Member -->
    <!-- End Team Member -->
    <!-- End Our Team Section -->
    <!-- ======= Pricing Section ======= -->
    <!-- End Pricing Item -->
    <!-- End Pricing Item -->
    <!-- End Pricing Item -->
    <!-- End Pricing Section -->
    <!-- ======= Frequently Asked Questions Section ======= -->
    <!-- # Faq item-->
    <!-- # Faq item-->
    <!-- # Faq item-->
    <!-- End Frequently Asked Questions Section -->
    <!-- ======= Recent Blog Posts Section ======= -->
    <!-- End post list item -->
    <!-- End post list item -->
    <!-- End post list item -->
    <!-- End recent posts list -->
    <!-- End Recent Blog Posts Section -->
    
    
    <!-- ======= Contact Section ======= -->
      <section id="tulisan" style="text-align: center;">
      <div class="font" style="color: #4A8251; font-size: 20px; font-family: 'Montserrat', sans-serif;">
          TEMUKAN BARANGMU
      </div>
      <div class="font" style="color: #black; font-size: 40px; font-family: 'Montserrat', sans-serif; font-weight: bold;">
          Cari Dan Temukan <br> Barangmu Yang Hilang
      </div>
    </section>



    <!-- Di dalam section #wrapper -->
                  <div class="kotak" style="margin: 0 auto; text-align: center;">
                  <div class="sidebar" style="float: left; text-align: left;">
                      <h1 style="font-family: 'Times New Roman', Times, serif; color: white; font-size: 30px; margin-left: 10px;">
                          Kehilangan
                      </h1>
                  </div>
                  <div class="content">
                      <form action="{{ route('cari') }}" method="get">
                          <div class="search-container">
                          <input class="search-input" type="search" id="searchInput" name="search" placeholder="Pencarian">
                              <input class="search-button" type="submit" value="Cari">
                          </div>
                      </form>
                  </div>
              </div>
              <br><br>
              @if(isset($postingans) && count($postingans) > 0)
                  @foreach($postingans as $postingan)
                  <div class="image-box">
                          <a href=""></a>
                          <div class="caption">
                              <div style="float: left;">
                                  <b>{{ $postingan->user->nama_user }}</b>
                              </div>
                              <br>
                              {{ $postingan->deskripsi }} <br>
                          </div>
                          <img width="880px" src="{{ asset('mobile/uploads/' . $postingan->foto_postingan) }}" alt="Deskripsi Gambar" style="display: block; margin: 0 auto;">
                              <div style="float: right;"> 
                              <small>{{ \Carbon\Carbon::parse($postingan->jam_postingan)->format('H:i') }}</small>
                              <small>{{ $postingan->tanggal_postingan }}</small>
                              </div>
                          <br> <br>
                          <div class="share-container">
                            <div class="share-menu">
                              <a href="{{ route('hubungi.whatsapp') }}" class="copy-link" target="_blank">
                                  <i class="fab fa-whatsapp"></i> Hubungi via WhatsApp
                              </a>
                              <div class="sharethis-inline-share-buttons"></div>
                          </div>                          
                      </div>
                          </div>
                      <br>
                  @endforeach
              @else
              <p style="text-align: center; margin: 50px auto; padding: 10px 20px; border: 1px solid #ccc; border-radius: 5px; width: fit-content;">Tidak ada postingan yang cocok dengan kata kunci pencarian.</p>
              @endif
          <br>
        <br>


    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="container">
          <div class="row gy-4">
            <div class="col-lg-5 col-md-12 footer-info">
              <a href="kehilangan" class="logo d-flex align-items-center">
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
      <!-- <h4>Useful Links</h4>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About us</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Terms of service</a></li>
        <li><a href="#">Privacy policy</a></li>
      </ul> -->
    </div>

    <div class="col-lg-2 col-6 footer-links">
      <!-- <h4>Our Services</h4>
      <ul>
        <li><a href="#">Web Design</a></li>
        <li><a href="#">Web Development</a></li>
        <li><a href="#">Product Management</a></li>
        <li><a href="#">Marketing</a></li>
        <li><a href="#">Graphic Design</a></li>
      </ul> -->
    </div>

    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
      <h4>Hubungi Kami</h4>
      <a href="mailto:kucariapps@gmail.com" style="color: white; text-decoration: none;">
              <strong style="display: inline-block; width: 70px;">E-Mail</strong>: kucariapps@gmail.com
          </a>
    </div>

  </div>
</div>

<div class="container mt-4">
  <div class="copyright">
    Copyright &copy; 2024 <strong><span>KuCari By Hidden Project. </span></strong> All Rights Reserved
  </div>
</div>

</footer><!-- End Footer -->
<!-- End Footer -->

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
<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=663adce0006cfd001d4da410&=inline-share-buttons" async="async"></script>
<!-- <script src="assets/js/share.js"></script> -->

<!-- Share -->
{{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"> --}}

</body>

</html>