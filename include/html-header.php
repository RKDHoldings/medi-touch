<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Meditouch</title>
  <meta content="Meditouch Hair & Skin Clinic" name="description">
  <meta content="Meditouch Hair & Skin Clinic" name="keywords">

  <?php
    $basePath = "https://meditouch.com.np";
?>



  <!-- Favicons -->
  <link href="<?php echo $basePath; ?>/assets/img/favicon.ico" rel="icon">
  <link href="<?php echo $basePath; ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo $basePath; ?>/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?php echo $basePath; ?>/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo $basePath; ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo $basePath; ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo $basePath; ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo $basePath; ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo $basePath; ?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo $basePath; ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css"  />


  <!--  Main CSS File -->
  <link href="<?php echo $basePath; ?>/assets/css/style.css" rel="stylesheet">

</head>
<script>
    document.addEventListener("DOMContentLoaded", function(){
		
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
 