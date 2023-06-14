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
  <header id="header" class="fixed-top  header-transparent ">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.html" class="fw-bold">Graha Estetika</a></h1>
      </div>
    </div>
  </header>

    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
              <div class="card text-black" style="border-radius: 25px;">
                <div class="card-body p-md-5">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                      <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Login</p>
                      <form action="{{url('login')}}" method="post">
                        @csrf
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Email address</label>
                          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                          @error('email')
                          <span class="text-red-500">{{ $message }}</span>
                          @enderror
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Password</label>
                          <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                          @error('password')
                          <span class="text-red-500">{{ $message }}</span>
                          @enderror
                        </div>
                        <div class="mb-3 form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Remember me</label>
                        </div>
                        <div class="text-center text-lg-start mt-4 pt-2">
                          {{-- <a href="{{ route('dashboard')}}"> --}}
                            <button type="submit" class="btn btn-primary btn-lg"
                              style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                          </a>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="{{route('register')}}"
                                class="link-danger">Register</a></p>
                          </div>
                      </form>
                    </div>
                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                      <img src="{{asset('img/login-01.png')}}"
                        class="img-fluid" alt="Sample image">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


  <footer id="footer">
    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Graha Estetika 2023</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer>

  <script src="{{asset('js/aos/aos.js')}}"></script>
  <script src="{{asset('js/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('js/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('js/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('js/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('js/main.js')}}"></script>

</body>

</html>
