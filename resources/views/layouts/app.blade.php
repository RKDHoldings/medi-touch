<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link rel="icon" href="assets/img/logo.png" type="image/x-icon">

  <title>Meditouch Skin & Hair Clinic </title>
  <meta content="Meditouch, clinic, hair transplant, hair restoration, hair loss solutions, hair growth treatments, non-surgical hair restoration
   skin care, aesthetic treatments, cosmetic procedures, prp therapy, botox and fillers, dermatology, acne treatment,
   dermatologist services, microneedling, anti-aging treatments, laser skin resurfacing, wrinkle reduction, laser hair reduction
   painless hair removal, laser treatment, beauty clinic, skin health, expert dermatologists, professional consultations
   trusted skincare, meditouch clinic services" name="keywords">

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="color-scheme" content="light">
  <meta name="supported-color-schemes" content="light">
  <meta charset="UTF-8">
  <meta name="description" content="At Meditouch Skin & Hair Clinic, we enhance your health, well-being, and confidence by providing personalized treatment experiences in dermatology, and aesthetic practices. Trust, loyalty, and exceptional care are at the core of our mission.">
  <meta name="robots" content="index, follow">
  <meta name="author" content="Meditouch Skin & Hair Clinic">


  <meta property="og:title" content="Meditouch Skin & Hair Clinic | Transform your look with our expert care">
  <meta property="og:description" content="Enhancing your health, well-being, and confidence with personalized treatment experiences in dermatology, and aesthetic practices.">
  <meta property="og:url" content="https://www.meditouch.com.np">
  <meta property="og:type" content="website">
  <meta property="og:image" content="assets/img/logo.png">
  <meta property="og:site_name" content="Meditouch Skin & Hair Clinic">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.ico')}}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" />
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



  <!--  Main CSS File -->
  <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
  @stack('css')
</head>
<script>
  document.addEventListener("DOMContentLoaded", function() {

    window.addEventListener('scroll', function() {

      if (window.scrollY > 200) {
        document.getElementById('header').classList.add('fixed-top');
        // add padding top to show content behind navbar
        navbar_height = document.querySelector('.header').offsetHeight;
        document.body.style.paddingTop = navbar_height + 'px';
      } else {
        document.getElementById('header').classList.remove('fixed-top');
        // remove padding top from body
        document.body.style.paddingTop = '0';
      }
    });
  });
</script>

<body>

  @include('layouts.partials.header')

  @yield('content')

  @include('layouts.partials.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!--  JS Files -->
  <script src="{{ asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>


  <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->

  <!--  Main JS File -->
  <script src="{{ asset('assets/js/main.js')}}"></script>

  <!-- Before and After Slider JS File -->
  <script src="{{ asset('assets/js/slider.js')}}"></script>

  <!-- For adding js from other pages -->
  @stack('js')

  <!-- slider open on page load -->
  <script>
    var myModal = new bootstrap.Modal(document.getElementById('myModal'), {})
    myModal.show()
  </script>



</body>

</html>