<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Estudio Legal DC</title>
  <link rel="icon" src="{{asset ('img/D.ico')}}" type = "image/x-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>


  <!-- Font Awesome Icons -->

<link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">

<link rel="stylesheet" href="{{ asset('vendor/magnific-popup/magnific-popup.css') }}">

<link rel="stylesheet" href="{{ asset('css/creative.css') }}">

</head>



<body id="page-top">

@include('partials.nav')

@yield('content')




<section class="page-section" style="padding: 5rem 0">
      <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0">Contáctanos</h2>
          <hr class="divider my-4">
          <p class="text-muted mb-5">Realiza una llamada o envía un e-mail, con gusto te asesoraremos e impulsaremos el avance en tus asuntos legales.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
          <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
          <div><a href="https://api.whatsapp.com/send?phone=524444955507&text=Me%20intersa%20una%20asesoria%20legal">(444) 495-55-07</a></div>
        </div>
        <div class="col-lg-4 mr-auto text-center">
          <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
          <!-- Make sure to change the email address in anchor text AND the link below! -->
          <a class="d-block" href="mailto:israelcastro@estudiolegaldc.com">israelcastro@estudiolegaldc.com</a>
        </div>
      </div>
    </div>
</section>



  <footer class="bg-light py-5">
    <div class="container">
      <div class="small text-center text-muted">Copyright &copy; 2020 - S/Dev Project.</div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->

  <script src="{{ asset ('vendor/jquery/jquery.min.js') }}"></script>

  <script src="{{ asset ('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Plugin JavaScript -->

  <script src="{{ asset ('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <script src="{{ asset ('vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

 <script src="{{ asset ('js/creative.min.js') }}"></script>




</body>

</html>

