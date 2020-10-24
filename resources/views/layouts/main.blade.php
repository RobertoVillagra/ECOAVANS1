<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ecomuseo Abangares</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="vendor/venobox/venobox.css" rel="stylesheet">
  <link href="vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">
</head>
<body class="cuerpo">

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a href="mailto:ecoavans@gmail.com">ecoavans@gmail.com</a>
        <i class="icofont-phone"></i> +506 2662 0004
      </div>
      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="{{route('welcome')}}">Ecomuseo<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
            <li class="<?php if($page =='welcome'){echo 'active';} ?>"> <a href="{{route('welcome')}}">Inicio</a></li>
            <li class="<?php if($page  == 'nosotros'){echo 'active';} ?>"> <a href="{{route ('nosotros')}}">Sobre nosotros</a></li>
            <li class="<?php if($page  == 'actividad'){echo 'active';} ?>"> <a href="{{route ('actividad')}}">Actividades</a></li>

            
            <li class="drop-down"><a href="">Formularios</a>
            <ul>
              <li><a href="#">Voluntariado</a></li>
              
              <li><a href="#">Donaciones</a></li>
            </ul>
          </li>

          <li>

            @if (Auth::guest())
          <li  class="dropdown <?php if($page =='login' || $page  =='register' || $page  =='edit' || $page =='home' ){echo 'active';} ?>">
            <a class="nav-link" data-toggle="dropdown" href="#">   Iniciar sesión  <i class="fas fa-caret-down"></i> </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <ul>           
              <li class=" black <?php if($page  =='login'){echo 'active';} ?>">
                <a href="{{ route('login') }}" class="dropdown-item"> <i class="fas fa-user-circle"></i>   Ingresar</a></li>
              <div class="dropdown-divider"></div>
              <li class=" black <?php if($page  =='register'){echo 'active';} ?>"  >

                <a href="{{route('register')}}" class="dropdown-item"><i class="fas fa-user-plus"></i>  Registrarse</a></li>
            </ul>     
        </li>
          @else
            <li class="dropdown <?php if($page  =='home'){echo 'active';} ?>">

              <a class="nav-link" data-toggle="dropdown" href="#">  {{ Auth::user()->name }} <i class="fas fa-caret-down"></i></a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <ul>   
              <li class="black">            

                @method('PUT')
                @csrf
                </form>

              {{-- @foreach ($collection as $item)
                  
              @endforeach --}}


                <div class="dropdown-divider"></div>
                  <li class="black">
                    <a href="{{ route ('voluntary')}}" class="dropdown-item">
                   <i class="fas fa-cog"></i>Mostrar voluntarios</li></a>
                <form action="" method="POST" class="d-inline">


                <div class="dropdown-divider"></div>
                <li class="black">
                  <a href="{{ route ('actividad')}}" class="dropdown-item">
                   <i class="fas fa-cog"></i> Mostrar actividades</li></a>
                <form action="" method="POST" class="d-inline">
                @method('PUT')
                @csrf
                </form>


                <div class="dropdown-divider"></div>
                <li class=" black" > <a  href="{{ route('logout') }}"  class="dropdown-item"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  <i class="fas fa-sign-out-alt"></i>  {{ __('Cerrar sesión') }}</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>
              </ul>
            </li> 
          @endif
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->
  @section('content')
  <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>BizLand</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="vendor/jquery/jquery.min.js" asp-append-version="true"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js" asp-append-version="true"></script>
  <script src="vendor/jquery.easing/jquery.easing.min.js" asp-append-version="true"></script>
  <script src="vendor/php-email-form/validate.js" asp-append-version="true"></script>
  <script src="vendor/waypoints/jquery.waypoints.min.js" asp-append-version="true"></script>
  <script src="vendor/counterup/counterup.min.js" asp-append-version="true"></script>
  <script src="vendor/owl.carousel/owl.carousel.min.js" asp-append-version="true"></script>
  <script src="vendor/isotope-layout/isotope.pkgd.min.js" asp-append-version="true"></script>
  <script src="vendor/venobox/venobox.min.js" asp-append-version="true"></script>
  <script src="vendor/aos/aos.js" asp-append-version="true"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>

</body>

</html>