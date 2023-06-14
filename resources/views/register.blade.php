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
        <h1><a href="index.html" class="fw-bold">Graha Estetika</a></h1>
      </div>
    </div>
  </header><!-- End Header -->

    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
              <div class="card text-black" style="border-radius: 25px;">
                <div class="card-body p-md-5">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                      <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                      <form class="mx-1 mx-md-4" action="{{ route('register') }}" method="post">
                        @csrf


            <div class="form-group">
                <label for="inputAddress">name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Masukan nama Anda">
              @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
              </div>
              <div class="form-group">
                <label for="inputEmail">Email</label>
                <input type="text" class="form-control" name="email" id="email" placeholder="Masukan Email Anda">
                @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
              </div>
              <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password Anda">
              </div>

              <div class="form-group">
                  <label for="password_confirmation">Confirm Password</label>
                  <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Konfirmasi Password Anda">
                  @error('password')
                  <span class="text-danger">{{ $message }}</span>
                  @enderror
              </div>
                        <div class="form-check d-flex justify-content-center mb-5">
                          <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                          <label class="form-check-label" for="form2Example3">
                            I agree all statements in <a href="#!">Terms of service</a>
                          </label>
                        </div>

                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">

                            <button type="submit" class="btn btn-primary btn-lg">Register</button>

                          </a>
                        </div>
                        <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="{{route('login')}}"
                            class="fw-bold text-body"><u>Login here</u></a></p>

                      </form>

                    </div>
                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                      <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                        class="img-fluid" alt="Sample image">

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="{{asset('js/aos/aos.js')}}"></script>
  <script src="{{asset('js/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('js/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('js/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('js/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('js/main.js')}}"></script>

</body>

</html>
