<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Graha Estetika</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="{{ asset('css/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('css/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('css/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset('css/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{ asset('css/style.css')}}" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="{{ route('dashboard')}}" class="fw-bold">Graha Estetika</a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#features">Fasilitas</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
          <li><a class="nav-link scrollto" href="#daftarrumah">Daftar Rumah</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
          <div>
            <h1>Perumahan Graha Estetika</h1>
            <h2>Welcome to comfortamble and safe residence with refreshing weather.</h2>
          </div>
        </div>
        <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
          <img src="{{asset('img/hero-img.png')}}" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= App Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="section-title">
          <h2>Fasilitas</h2>
          <p>Fasilitas yang ada di perumahan ini sangat lengkap dan memenuhi kebutuhan sehari-hari penghuninya. Mulai dari kolam renang yang menyegarkan, taman bermain untuk anak-anak, masjid yang luas untuk para penghuni yang beragama islam melakukan ibadah sholat.</p>
        </div>

        <div class="container">
          <div class="row">
            <div class="col order-last">
              <div class="card" style="width: 18rem;">
                <img src="{{asset('img/kolamrenang.jpg')}}" class="card-img-top equal-image" alt="Kolam renang">
                <div class="card-body">
                  <h5 class="card-title">Kolam Renang</h5>
                  <p class="card-text">Fasilitas pendukung bagi warga ataupun masyarakat umum untuk berolahraga renang dengan dilengkapi cafe untuk bersantai</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card" style="width: 18rem;">
                <img src="{{asset('img/taman grahes.jpg')}}" class="card-img-top equal-image" alt="Taman">
                <div class="card-body">
                  <h5 class="card-title">Taman</h5>
                  <p class="card-text">Taman merupakan Ruang Terbuka Hijau yang dapat dijadikan area bersantai dan membantu sirkulasi udara tetap fresh</p>
                </div>
              </div>
            </div>
            <div class="col order-first">
              <div class="card" style="width: 18rem;">
                <img src="{{asset('img/masjid.jpg')}}" class="card-img-top equal-image" alt="Masjid">
                <div class="card-body">
                  <h5 class="card-title">Masjid</h5>
                  <p class="card-text">Fasilitas masjid ini dijadikan sebagai fasilitas pendukung bagi warga Graha Estetika ataupun masyarakat umum untuk beribadah</p>
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>
    </section><!-- End App Features Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Gallery</h2>
          <p>Berikut dibawah ini ada beberapa gambar perumahan yang ada di Graha Estetika</p>
        </div>

      </div>

      <div class="container-fluid" data-aos="fade-up">
        <div class="gallery-slider swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><a href="{{asset('img/gallery/rumah1.jpg')}}" class="gallery-lightbox" data-gall="gallery-carousel"><img src="{{asset('img/gallery/rumah1.jpg')}}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="{{asset('img/gallery/rumah2.jpg')}}" class="gallery-lightbox" data-gall="gallery-carousel"><img src="{{asset('img/gallery/rumah2.jpg')}}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="{{asset('img/gallery/rumah3.jpg')}}" class="gallery-lightbox" data-gall="gallery-carousel"><img src="{{asset('img/gallery/rumah3.jpg')}}" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a href="{{asset('img/gallery/rumah4.jpg')}}" class="gallery-lightbox" data-gall="gallery-carousel"><img src="{{asset('img/gallery/rumah4.jpg')}}" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Daftar Rumah ======= -->
        <section id="daftarrumah" class="daftarrumah">
          <div class="container">
            <div class="section-title">
              <h2>Daftar Rumah Graha Estetika</h2>
            </div>
            <div class="row justify-content-center">
              <div class="col-md-2"><p class="fw-bold">Gambar Rumah</p></div>
              <div class="col-md-2"><p class="fw-bold">Type Rumah</p></div>
              <div class="col-md-2"><p class="fw-bold">Luas Rumah</p></div>
              <div class="col-md-2"><p class="fw-bold">Harga Rumah</p></div>
              <div class="col-md-2"><p class="fw-bold">Status Rumah</p></div>
            </div>
            <div class="row justify-content-center">
              <div class="col-md-2"><img src="{{asset('img/typeclassic.jpg')}}" class="img-thumbnail" alt="..."></div>
              <div class="col-md-2">Type Classic</div>
              <div class="col-md-2"><p>170m<sup>2</sup></p></div>
              <div class="col-md-2">2 Milliar</div>
              <div class="col-md-2">Dijual</div>
            </div>
            <div class="row justify-content-center">
              <div class="col-md-2"><img src="{{asset('img/typeemodern.jpg')}}" class="img-thumbnail" alt="..."></div>
              <div class="col-md-2">Type Modern</div>
              <div class="col-md-2"><p>400m<sup>2</sup></p></div>
              <div class="col-md-2">4 Milliar</div>
              <div class="col-md-2">Dijual</div>
            </div>
            <div class="row justify-content-center">
              <div class="col-md-2"><img src="{{asset('img/typekomersil.jpg')}}" class="img-thumbnail" alt="..."></div>
              <div class="col-md-2">Type Komersil</div>
              <div class="col-md-2"><p>600m<sup>2</sup></p></div>
              <div class="col-md-2">7 Milliar</div>
              <div class="col-md-2">Dijual</div>
            </div>
          </div>

        </section>

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>Berikut dibawah ini ada beberapa testimoni dari para penghuni Graha Estetika</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{asset('img/testimonials/testimonials-1.jpg')}}" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Perumahan Graha Estetika ini sangat memperhatikan keasrian dan fasilitasnya yang cukup lengkap dan nyaman
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{asset('img/testimonials/testimonials-2.jpg')}}" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Perumahan ini memiliki letak yang strategis, dekat dengan pendidikan dan perdagangan dan jasa yang cukup lengkap sehingga mampu membantu kebutuhan warga disini
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{asset('img/testimonials/testimonials-3.jpg')}}" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Perumahan ini benar-benar memenuhi semua harapan kami. Desain rumah yang modern dan fungsional, serta taman yang rapi menjadikan tempat ini tempat yang ideal untuk keluarga kami. Terlebih lagi, keamanan 24 jam memberikan rasa aman bagi kami. Kami sangat puas dengan pilihan kami!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{asset('img/testimonials/testimonials-4.jpg')}}" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Saya sangat senang tinggal di perumahan ini. Lingkungannya yang indah dan tenang memberikan suasana yang nyaman bagi keluarga saya. Fasilitas yang lengkap dan pelayanan yang ramah membuat kami merasa benar-benar di rumah. Terima kasih atas pengalaman yang luar biasa!
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Graha Estetika</h3>
            <p>
              Jl. Ceria Tengah No.40, Pedalangan <br>
              Kec. Banyumanik, Kota Semarang<br>
              Jawa Tengah 50268 <br><br>
              <strong>Phone:</strong> +62 8123 456 7890<br>
              <strong>Email:</strong> info@grahaestetika.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('dashboard')}}">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#features">Fasilitas</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#gallery">Gallery</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#daftarrumah">Daftar Rumah</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Ikuti akun sosial kami untuk mendapatkan info secara cepat dan mudah</p>
            <div class="social-links mt-3">
              <a href="https://twitter.com/home" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="https://id-id.facebook.com" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Graha Estetika 2023</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('js/aos/aos.js')}}"></script>
  <script src="{{asset('js/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('js/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('js/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('js/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('js/main.js')}}"></script>

</body>

</html>

