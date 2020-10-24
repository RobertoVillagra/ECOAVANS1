@extends('layouts.app')
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
<?php $page='reservation';?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Reservation</div>

                <div class="card-body">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th width="20px">ID</th>
                                <th >identificacion</th>
                                <th >Nombre</th>
                                <th >Apellidos</th>   
                                <th >fecha_Reservacion</th>
                                <th >Hora_Reservacion</th>
                                <th >Cantidad_Adultos</th>
                                <th >Cantidad_niños</th>
                                <th >Tipo_Tour</th>
                                <th >Precio</th>
                                <th >Correo</th>
                                <th >Telefono</th>

                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                    
                        @foreach($reservationN as $reservation)
                            <tr class = "text-center">
                                <td>{{ $reservation->id }}</td>
                                <td>{{ $reservation->identification }}</td>
                                <td>{{ $reservation->name }}</td>
                                <td>{{ $reservation->lastname }}</td>
                                <td>{{ $reservation->reservationDate }}</td>
                                <td>{{ $reservation->reservationHour }}</td>
                                <td>{{ $reservation->adultQuantity }}</td>
                                <td>{{ $reservation->childrenQuantity }}</td>
                                <td>{{ $reservation->tourType }}</td>
                                <td>{{ $reservation->tourPrice }}</td>
                                <td>{{ $reservation->email }}</td>
                                <td>{{ $reservation->phone }}</td>

                            </tr>
                        @endforeach

                    </table>

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