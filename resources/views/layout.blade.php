<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Criadero B&L Panama</title>

  <meta name="description" content="Somos un equipo comprometido con la crianza responsable y el mejoramiento continuo de la raza labrador!">
  <meta name="subject" content="Criadores de la raza Labrador en Panama">
  <meta name="author" content="Criadero B&L Santiago de Veraguas - Site made by ZwestGroup Dev's">
  <meta name="keywords" content="Labrador, Perros Labradores, Labradores Panama, Criadero B&L, Perros Santiago, Labrador Retriever">

  <!-- Stylesheets -->
  <link href="{{asset('poopet/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('poopet/css/responsive.css')}}" rel="stylesheet">
  <link rel="icon" href="{{asset('poopet/images/favicon.ico')}}" type="image/x-icon">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <script src="{{asset('js/app.js')}}" defer></script>
</head>

<!-- page wrapper -->

<body class="boxed_wrapper">


  <!-- .preloader -->
  <div class="preloader"></div>
  <!-- /.preloader -->


  <!-- Main Header -->
  <header class="main-header">

    <div class="page-header-mobile-info">
      <div class="page-header-mobile-info-content">
        <div class="header-info clearfix">
          <ul class="info-list">
            <li>
              <i class="fas fa-map-marker-alt"></i>
              <span>660 Broklyn Street, 88 New York </span>
            </li>
            <li>
              <i class="fa fa-phone"></i>
              <span>666 888 0000, Fax: +21 000 333</span>
            </li>
            <li>
              <i class="fa fa-clock"></i>
              <span>Mon - Fri 9:00 am - 6:00 pm</span>
            </li>
          </ul>
          <ul class="social-style-one">
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="toggle-box clearfix">
        <div class="page-header-mobile-info-toggle"></div>
        <div class="link"><a href="{{ route('contactos') }}" class="theme-btn">Cita</a></div>
      </div>
    </div>

    <div class="header-top">
      <div class="container">
        <div class="header-info clearfix">
          <ul class="info-list pull-right">
            <li>
              <i class='bx bx-map bx-md' style='color:#9dc638;'></i>
              <strong><a href="https://goo.gl/maps/bLjHaToNw1JC4J2E7" target="_blank">Santiago de Veraguas</a></strong>
              Ubicación
            </li>
            <li>
              <i class='bx bx-phone-call bx-md' style='color:#9dc638'></i>
              <strong><a href="https://wa.me/50761315740" target="_blank">6131-5740</a></strong>
              Contacto Personal
            </li>
            <li>
              <i class='bx bx-time bx-md' style='color:#9dc638'></i>
              <strong>Lun a Dom / 8:00AM a 9:00PM</strong>
              Horario de trabajo
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="header-bottom">
      <div class="container">
        <div class="clearfix">
          <div class="logo-box">
            <figure class="logo"><a href="{{route('home')}}"><img src="{{asset('poopet/images/logo.png')}}" alt=""></a></figure>
          </div>
          <div class="nav-outer clearfix">
            <div class="menu-area">
              <nav class="main-menu navbar-expand-lg">
                <div class="navbar-header">
                  <!-- Toggle Button -->
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>
                <div class="navbar-collapse collapse clearfix">
                  <ul class="navigation clearfix">
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="#About-us">Sobre Nosotros</a></li>
                    <li class="dropdown"><a href="#">Services</a>
                      <ul>
                        <li><a href="{{ route('servicios') }}">Nuestros Servicios</a></li>
                        <li><a href="single-service-1.html">Pets Full Grooming</a></li>
                        <li><a href="single-service-2.html">Health Checkups</a></li>
                        <li><a href="single-service-3.html">Styling Your Pets</a></li>
                        <li><a href="single-service-4.html">Bath, Dry & Brush</a></li>
                        <li><a href="single-service-5.html">Cleaning & Plucking</a></li>
                        <li><a href="single-service-6.html">Coat Handler Pets</a></li>
                      </ul>
                    </li>
                    <li><a href="#Gallery">Galeria</a></li>
                    <li><a href="#Staff">Staff</a></li>
                    <li><a href="{{ route('contactos') }}">Contacto</a></li>
                  </ul>
                </div>
              </nav>
            </div>
            <ul class="social-style-one">
              <li><a href="https://www.instagram.com/criaderobl/" target="_blank"><i class="fab fa-instagram"></i></a></li>
              <li><a href="https://www.instagram.com/veraguasdogschool/" target="_blank"><i class="fab fa-instagram"></i></a></li>
              <li><a href="https://www.instagram.com/clubretrieverspanama/" target="_blank"><i class="fab fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!--Sticky Header-->
    <div class="sticky-header">
      <div class="container clearfix">
        <figure class="logo-box"><a href="index.html"><img src="{{asset('poopet/images/small-logo.png')}}" alt=""></a></figure>
        <div class="menu-area">
          <nav class="main-menu navbar-expand-lg">
            <div class="navbar-header">
              <!-- Toggle Button -->
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="navbar-collapse collapse clearfix">
              <ul class="navigation clearfix">
                <li class="current dropdown"><a href="#Inicio">Inicio</a>
                <li><a href="#About-us">Sobre Nosotros</a></li>
                <li><a href="#Services">Servicios</a></li>
                <li><a href="#Gallery">Galeria</a></li>
                <li><a href="#Staff">Staff</a></li>
                <li><a href="#Contact">Contacto</a></li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div><!-- sticky-header end -->
  </header>
  <!-- End Main Header -->

  <div id='app'>
    @yield('content')
  </div>

  <!-- main-footer -->
  <footer class="main-footer gray-bg">
    <div class="footer-top">
      <div class="container">
        <div class="top-content clearfix">
          <figure class="footer-logo"><a href="index.html"><img src="{{asset('poopet/images/footer-logo.png')}}" alt=""></a></figure>
          <ul class="social-style-one">
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="widget-section">
        <div class="row">
          <div class="col-lg-2 col-md-4 col-sm-12 footer-column">
            <div class="footer-widget links-widget">
              <h3 class="widget-title">Sitio Web</h3>
              <div class="widget-content">
                <ul class="link">
                  <li><a href="#Inicio">Inicio</a>
                  <li><a href="#About-us">Sobre Nosotros</a></li>
                  <li><a href="#Services">Servicios</a></li>
                  <li><a href="#Gallery">Galeria</a></li>
                  <li><a href="#Staff">Staff</a></li>
                  <li><a href="#Contact">Contacto</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-12 footer-column">
            <div class="footer-widget links-widget">
              <h3 class="widget-title">Links</h3>
              <div class="widget-content">
                <ul class="link">
                  <li><a href="#">FAQs</a></li>
                  <li><a href="#">Help</a></li>
                  <li><a href="#">Política de Privacidad</a></li>
                  <li><a href="#">Términos de Uso</a></li>
                  <li><a href="#">Location</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-12 footer-column">
            <div class="footer-widget contact-widget ">
              <div class="widget-content">
                <div class="text">
                  <h3 class="widget-title">Contacto Personal</h3>
                  <div class="links-widget">
                    <ul class="link">
                      <li><a href="https://wa.me/50761315740" target="_blank">6131-5740</a></li>
                    </ul>
                  </div>

                  <br />
                  <h3 class="widget-title">Ubicación</h3>
                  <strong>Panamá,Santiago de Veraguas</strong>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-md-12 col-sm-12 footer-column">
            <div class="footer-widget about-widget">
              <h3 class="widget-title">Sobre Nosotros</h3>
              <div class="widget-content">
                <div class="text">Somos un equipo comprometido con la crianza responsable y el mejoramiento continuo de la raza labrador!</div>
              </div>
              <div>
                <h3 style="color:black">Mapa del Local</h3>
                <br />
                <div style="border:2px solid red; border-radius:20px" class="footer-widget contact-widget">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3949.8747982503533!2d-80.9703588!3d8.1142286!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fae73170a24a3d1%3A0xe8acc260d4c6057f!2sCRIADERO%20Y%20HOSPEDAJE%20B%26L!5e0!3m2!1ses-419!2spa!4v1675458771017!5m2!1ses-419!2spa" width="460" height="200" style="border:0; border-radius:20px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom centred black-bg">
      <div class="container">
        <div class="copyright">&copy; Copyrights 2019. All rights reserved.</div>
      </div>
    </div>
  </footer>
  <!-- main-footer end -->



  <!--Scroll to top-->
  <button class="scroll-top scroll-to-target" data-target="html">
    <span class="fa fa-arrow-up"></span>
  </button>



  <!-- jequery plugins -->
  <script src="{{asset('poopet/js/jquery.js')}}"></script>
  <script src="{{asset('poopet/js/popper.min.js')}}"></script>
  <script src="{{asset('poopet/js/bootstrap.min.js')}}"></script>

  <script src="{{asset('poopet/js/owl.js')}}"></script>
  <script src="{{asset('poopet/js/wow.js')}}"></script>
  <script src="{{asset('poopet/js/validation.js')}}"></script>
  <script src="{{asset('poopet/js/jquery.fancybox.js')}}"></script>
  <script src="{{asset('poopet/js/bxslider.js')}}"></script>
  <script src="{{asset('poopet/js/appear.js')}}"></script>

  <!-- main-js -->
  <script src="{{asset('poopet/js/script.js')}}" defer></script>

</body><!-- End of .page_wrapper -->

</html>