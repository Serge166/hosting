<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Nos services et produits</title>
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

</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="/"><img src="regna/img/logo2.png" alt="" title="" /></img></a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Regna</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="/">Accueil</a></li>

          <li><a href="#services">Services</a></li>

          <li><a href="#contact">Contactez-nous</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <h1>Nos services et produits</h1>
      <h2>Déjà 5 ans d'existence!</h2>
      <a href="#services" class="btn-get-started">Consultez</a>
    </div>
  </section><!-- #hero -->

  <main id="main">


    @include('features') <!-- #services -->

@include('medias-section')
@include('tunnels')
@include('seo')
@include('sites-web')
<section id="pochette">

    <div class="section-header">
        <h3 class="section-title">Pochettes de presse</h3>
        <p class="section-description">Créez un impact assurez avec une pochette de presse personnalisée à l’image de votre entreprise.</p>
        
      </div>

    <div class="row bg-light">
    <div class="col-lg-6 col-md-6 wow fadeInDown mx-auto" data-wow-delay="0.4s">
        @include('pochette.create')
    </div>
    {{-- <div class="col-lg-6 col-md-6 wow fadeRight m-2" data-wow-delay="0.9s">
        @include('pochette.store')
    </div> --}}
</div>
</section>

    <!--==========================
      Contact Section
    ============================-->
    @include('layouts.components.contact') <!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  @include('layouts.components.footer')
  <!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->


<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js" integrity="sha256-lSjKY0/srUM9BE3dPm+c4fBo1dky2v27Gdjm2uoZaL0=" crossorigin="anonymous"></script>
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
