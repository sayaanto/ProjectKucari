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
          <li><a href="#hero">Dashboard</a></li>
          <li><a href="#informasi-aplikasi">Informasi aplikasi</a></li>
          <li><a href="#footer">Tentang kami</a></li>
          <!-- <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="blog.html">Blog</a></li> -->
          <li class="dropdown"><a href="#"><span>Postingan</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="kehilangan">Kehilangan</a></li>
              <li><a href="menemukan">Menemukan</a></li>
              <!-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul> -->
              <!-- <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li> -->
            </ul>
          </li>
         
          <li><a class="getstarted" href="{{ route('user') }}">Masuk</a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start"> <br>
        <h2 style="font-family: Montserrat; font-weight: bold;">Kehilangan Atau Menemukan Sesuatu?</h2>
        <h2 style="font-family: Montserrat; font-weight: bold; color: #259E73; margin-top: -5px;">KuCari Solusinya!</h2>
        <br>   
        <p>Kita dapat melaporkan dan menemukan barang kehilangan dengan aplikasi KuCari.</p>
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
          </div><!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            
           
        </div>
      </div>
    </div>

    </div>
  </section>
  <!-- End Hero Section -->

  <main id="main">

    <!-- ======= Informasi aplikasi======= -->
    <section id="informasi-aplikasi" class="about">
      <!-- <div class="container" data-aos="fade-up"> -->
        <div class="section-header">
          <h2>Informasi Aplikasi</h2> 
          <br>
          <p>APA YANG DAPAT KITA LAKUKAN?</p> <br>
          <div>Kita Dapat Membantu Ratusan Orang Dalam <br> Mencari Dan Menemukan Barang Hilang.</div>
          <br> <br>
          <img src="assets/img/bundar-02.png" class="small-image">
                  </div>
        
  </section>
        
          
          

             
                
    </section><!-- End About Us Section -->

    <!-- ======= Clients Section ======= -->
    <!-- End Clients Section -->
    <!-- ======= Stats Counter Section ======= -->
    <!-- End Stats Counter Section -->

    <!-- ======= Call To Action Section ======= -->
    <!-- End Call To Action Section -->

    <!-- ======= Our Services Section ======= -->
    <<!-- End Service Item -->
    <!-- End Service Item -->
    <!-- End Service Item -->
    <!-- End Service Item -->
    <!-- End Service Item -->
    <!-- End Our Services Section -->

    <!-- ======= Testimonials Section ======= -->
    
    <!-- ======= Portfolio Section ======= -->
 


    <!-- ======= Contact Section ======= -->
    

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>KuCari.</span>
          </a>
          <p style="text-align: justify;">
    KuCari merupakan sebuah platform berbasis mobile dan web yang mana dirancang untuk membantu pengguna menemukan barang yang hilang atau yang telah ditemukan. Aplikasi ini menyediakan sarana yang memudahkan pengguna untuk melaporkan barang yang hilang atau menemukan barang yang tercecer, serta memberikan alat pencarian dan manajemen untuk memfasilitasi proses pencarian dan penemuan barang.
</p>

          <div class="social-links d-flex mt-4">
            <!-- <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a> -->
            <a href="https://www.instagram.com/akun_instagram_anda" class="instagram" target="_blank">
                <i class="bi bi-instagram"></i>
            </a>
            <!-- <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a> -->
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
          <p>
            <!-- A108 Adam Street <br>
            New York, NY 535022<br>
            United States <br><br> -->
              <a href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcRzDQzBpZKMkfcCQnLhscHZwHbMLVLBrMJpTctQqCCBscGhTQRmqkQTLZLsRDQWstRGbMJNr" target="_blank" style="color: white;">
            <strong style="display: inline-block; width: 70px;">E-Mail</strong> : KuCari_id@gmail.com<br>
              </a>
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        Copyright &copy; 2024 <strong><span>KuCari By Hidden Project. </span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/impact-bootstrap-business-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
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

</body>

</html>