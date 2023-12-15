<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Immonivo - @yield('titre')</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="regna/img/favicon.png" rel="icon">
  <link href="regna/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="regna/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="regna/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="regna/lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="regna/css/style.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <!-- =======================================================
    Theme Name: Regna
    Theme URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
  Header
  ============================-->
@include('layouts.components.header')  <!-- #header -->

  <!--==========================
    Hero Section
  ============================-->
  @include('layouts.components.hero') <!-- #hero -->

  <main id="main">

@yield('content')



        <!--==========================
      Contact Section
    ============================-->
    @include('layouts.components.contact')
    <!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  @include('layouts.components.footer')
  <!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="regna/lib/jquery/jquery.min.js"></script>
  <script src="regna/lib/jquery/jquery-migrate.min.js"></script>
  <script src="regna/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="regna/lib/easing/easing.min.js"></script>
  <script src="regna/lib/wow/wow.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>

  <script src="regna/lib/waypoints/waypoints.min.js"></script>
  <script src="regna/lib/counterup/counterup.min.js"></script>
  <script src="regna/lib/superfish/hoverIntent.js"></script>
  <script src="regna/lib/superfish/superfish.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="regna/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="regna/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
