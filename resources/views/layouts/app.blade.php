{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ config('app.name', 'Polytechnique Clubs') }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/img/favicon.png" rel="icon">
  <link href="/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/vendor/aos/aos.css" rel="stylesheet">
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/css/style.css" rel="stylesheet">
  <link href="/css/ban.css" rel="stylesheet">
  <link href="/css/evban.css" rel="stylesheet">
  <link href="/css/comnt.css" rel="stylesheet">
  <!-- =======================================================
  * Template Name: TheEvent - v4.7.0
  * Template URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center ">
    <div class="container-fluid container-xxl d-flex align-items-center">

      <div id="logo" class="me-auto">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="index.html">The<span>Event</span></a></h1>-->
        <a href="index.html" class="scrollto"><img src="/imagesused/logo.png" alt="Logo"></a>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
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
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1 class="mb-4 pb-0">Ecole<br><span>Polytechnique</span> de Sousse</h1>
      <p class="mb-4 pb-0">Le succés commence par un bon choix</p>
      <a href="https://www.youtube.com/watch?v=l7xWpdDNTeg" class="glightbox play-btn mb-4"></a>
      <a href="#about" class="about-btn scrollto">Détails de l'école</a>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6">
            <h2>Détails de l'école</h2>
            <p>Fondée en 2009, L’Ecole Polytechnique de Sousse est une grande école privée d’enseignement et de recherche à vocation internationale, accréditée EUR- ACE et qui a pour unique vocation de former des ingénieurs ayant un niveau technique et scientifique conforme  aux meilleurs  standards internationaux.</p>
          </div>
          <div class="col-lg-3">
            <h3>Localisation</h3>
            <p>Route Ceinture Sahloul Entrée Kalaa Sghira 4021 – sousse Tunisie.</p>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->


    @yield('content')


    <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h4>
              Pourquoi Poly events ?
            </h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Links</h4>
            <ul>
              <li><a class="bi bi-chevron-right" href="/"></a> Home</li>
              <li><a class="bi bi-chevron-right" href="/clubs"></a> Nos clubs</li>
              <li><a class="bi bi-chevron-right" href="/events"></a> Nos Events</li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>à propos de nous</h4>
            <p>
              Nous sommes un ensemble d'étudiants inscrits à l'Ecole Polytechnique de Sousse<br>
              4eme Génie Informatique<br><br>
              Azer Engazzou <br>
              Oussama Chaieb <br>
              Oussama Achour
            
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Route Ceinture Sahloul Entrée Kalaa Sghira  <br>
              4021 – Sousse <br>
              Tunisie. <br>
              <strong>Numéro:</strong> (+216) 99 277 877<br>
              <strong>Email:</strong> contact@polytecsousse.tn<br>
            </p>
          </div>

            <div class="social-links">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>TheEvent</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=TheEvent
      -->
        Designed by <a href="https://bootstrapmade.com/">US</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/vendor/aos/aos.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/js/main.js"></script>

</body>

</html> --}}

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PolyClubs</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
	<link href="https://fonts.googleapis.com/css?family=Philosopher:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,900" rel="stylesheet">
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      
    </head>
    <body>
            @yield('content')
        {{--<script src="{{ asset('js/.js') }}"></script>--}}
    </body>
</html>