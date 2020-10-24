@extends('layouts.app')
@section('title','Information Donation')
@section('content')

    <!-- Vendor CSS Files -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="vendor/venobox/venobox.css" rel="stylesheet">
    <link href="vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="css/style.css" rel="stylesheet">

<?php $page = 'realizarDonaciones'; ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-14">
                <div class="card">
                    <div class="container" data-aos="fade-up">

                        <div class="card text-center">
                            <div class="card-header">
                                Donaciones
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Realizando donaciones a Ecomuseo de Abangares</h5>
                                <p class="card-text">Bienvenido a nuestra página de donaciones del Ecomuseo minas de oro de Abangares, acá obtendrás más información sobre las diferentes formas de realizar una donación a nuestro complejo turístico.</p>

                            </div>
                            <div class="card-footer text-muted">
                                ...
                            </div>
                        </div>

                    </div>
                    <br>
                    <div class="container" data-aos="fade-up">
                        <div class="card text-center">
                        <br>
                        <div class="icon-box">
                            <div class="col-lg-6 col-md-9 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                                <img src="img/voluntariado.jpeg" class="rounded float-right img-fluid col-md-12" alt="...">
                                <img src="img/voluntariogrupo.jpeg" class="rounded float-left img-fluid col-md-12 col-md-offset-12"alt="..." >
                            </div>
                            <br>
                            </div>
                            <div class="card-footer text-muted"></div>
                        </div>
                    </div>
                    <br>
                    <div class="row" data-aos="fade-up">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">¿Cómo realizar donaciones a Ecomuseo de Abangares? Debes seguir los siguientes pasos...</h5>
                                    <p class="card-text">...........</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Tipo de donaciones</h5>
                                <p class="card-text">
                                Se cuenta con diversos tipos de donaciones, entre ellas tenemos las siguientes:<br>
                                    1-	Monetaria (Por medio de esta página o presencial)<br>
                                    2-	Material (Materiales de construcción, entre otras…)<br>
                                    3-  Alimentos(Frutas, verduras, entre otras...)
                                </p>
                                        
                            </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Requisitos para realizar donaciones</h5>
                                <p class="card-text">
                                    1-	Contar con cuenta por medio de la cual pueda hacer las transacciones monetarias..<br>
                                    2-	Si es donación material entregarla directamente en nuestro complejo turístico.<br>
                                    3-	Especificar en el formulario la fecha, hora y cantidad a entregar en caso de ser donación material.<br>
                                </p>
                                <a href="{{ route('donation.create')}}" class="btn btn-primary">Realizar donación</a>
                                
                            </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

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

@endsection