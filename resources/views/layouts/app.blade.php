<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    
    <title>{{ config('app.name', 'Polytechnique Clubs') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/icomoon/style.css">
    <link rel="stylesheet" href="/css/cssTemplate/bootstrap.min.css">
    <link rel="stylesheet" href="/css/cssTemplate/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/css/cssTemplate/jquery.fancybox.min.css">
    <link rel="stylesheet" href="/css/cssTemplate/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/cssTemplate/owl.theme.default.min.css">
    <link rel="stylesheet" href="/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="/css/cssTemplate/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="/css/cssTemplate/style.css">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-3 ">
              <div class="site-logo">
                <a href="index.html"><img src="imagesused/logo.png" alt="Logo"></a>
              </div>
            </div>

            <div class="col-9  text-right">
              

              <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>

              

              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                @if (Route::has('login'))
                   <ul class="site-menu main-menu js-clone-nav ml-auto ">
                    @auth
                    <li class="nav-link"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
                    <li><a href="{{ url('/clubs') }}" class="nav-link">Clubs</a></li>
                    <li><a href="{{ url('/events') }}" class="nav-link">Events</a></li>
                    
                    <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }}
                      </a>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <a class="dropdown-item" href="{{ url('admin') }}">Dashboard</a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                      </div>
                  </li>
                @else
                    <li><a href="{{ url('admin/login') }}" class="nav-link">Login</a></li>
                        @if ( (Route::has('register')))
                        <li><a href="{{ route('register') }}" class="nav-link">Register</a></li>
                      @endif
                      <li class="nav-link"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
                    <li><a href="{{ url('/clubs') }}" class="nav-link">Clubs</a></li>
                    <li><a href="{{ url('/events') }}" class="nav-link">Events</a></li>
                  @endauth
                @endif
                  
                </div>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </header>
      
    <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('https://www.bestbeton.com.tn/wp-content/uploads/2021/01/campus1024x700.png')">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
              <h1 class="mb-3">Polytechnique Sousse</h1>
              <p>Fondée en 2009, L’Ecole Polytechnique de Sousse est une grande école privée d’enseignement et de recherche à vocation internationale, accréditée EUR- ACE et qui a pour unique vocation de former des ingénieurs ayant un niveau technique et scientifique conforme  aux meilleurs  standards internationaux.</p>
              <p><a href="#" class="btn btn-primary">Learn More</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div>
    @yield('content')
    </div>
  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <img src="images/img_1.jpg" alt="Image" class="img-fluid mb-5">
          <h2 class="footer-heading mb-3">About Us</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
        </div>
        <div class="col-lg-8 ml-auto">
          <div class="row">
            <div class="col-lg-6 ml-auto">
              <h2 class="footer-heading mb-4">Quick Links</h2>
              <ul class="list-unstyled">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Testimonials</a></li>
                <li><a href="#">Terms of Service</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Contact Us</a></li>
              </ul>
            </div>
            <div class="col-lg-6">
              <h2 class="footer-heading mb-4">Newsletter</h2>
              <form action="#" class="d-flex" class="subscribe">
                <input type="text" class="form-control mr-3" placeholder="Email">
                <input type="submit" value="Send" class="btn btn-primary">
              </form>
            </div>
            
          </div>
        </div>
      </div>
      <div class="row pt-5 mt-5 text-center">
        <div class="col-md-12">
          <div class="border-top pt-5">
            <p>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
          </div>
        </div>

      </div>
    </div>
  </footer>
  <script src="{{ asset('/js/app.js') }}" defer></script>
  <script src="js/jsTemplate/jquery-3.3.1.min.js"></script>
  <script src="js/jsTemplate/jquery-migrate-3.0.0.js"></script>
  <script src="js/jsTemplate/popper.min.js"></script>
  <script src="js/jsTemplate/bootstrap.min.js"></script>
  <script src="js/jsTemplate/owl.carousel.min.js"></script>
  <script src="js/jsTemplate/jquery.sticky.js"></script>
  <script src="js/jsTemplate/jquery.waypoints.min.js"></script>
  <script src="js/jsTemplate/jquery.animateNumber.min.js"></script>
  <script src="js/jsTemplate/jquery.fancybox.min.js"></script>
  <script src="js/jsTemplate/jquery.stellar.min.js"></script>
  <script src="js/jsTemplate/jquery.easing.1.3.js"></script>
  <script src="js/jsTemplate/bootstrap-datepicker.min.js"></script>
  <script src="js/jsTemplate/aos.js"></script>

  <script src="js/jsTemplate/main.js"></script>

  
</body>

</html>