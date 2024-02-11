    <!-- ======= Header ======= -->
    <header id="header" class="">
      <div class="topbar-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-12">
                        <div class="topbar-menu">
                            <ul class="top-contact text-left float-start p-0">
                                <li>
                                  <i class="bi bi-facebook"></i>
                                </li>
                                <li>
                                  <i class="bi bi-instagram"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-sm-12">
                        <div class="topbar-right text-end">
                            <ul class="top-contact">
                                <li>
                                  <i class="bi bi-house-door"></i> <a href="tel:061-544440"> Newroad-09, Pokhara</a>
                                </li>
                                <li>
                                  <i class="bi bi-phone"></i> <a href="tel:061-590664">  061-590664</a>
                                </li>
                                <li>
                                  <i class="bi bi-envelope"></i> <a href="">  clinic.meditouch@gmail.com</a>
                                </li>
                                                           
                          </ul>
                        </div>
                   </div>
               </div>
            </div>
      </div>
    <div id="stickable-header" class="fixed-top">
          <div class="container d-flex align-items-center justify-content-lg-between nav-head ">
            <a href="/" 
                class="logo me-auto me-lg-0">
              <img src="assets/img/logo.png" alt="" class="img-fluid">
              </a>

              <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                  <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                  <li><a class="nav-link scrollto" href="about.php">Who we are</a></li>
                  <li><a class="nav-link scrollto" href="services.php">What we do</a></li>
                  <li><a class="nav-link scrollto" href="package.php">Packages</a></li>
                  <li><a class="nav-link scrollto" href="before-after.php">Success Stories</a></li>
                
                  <li><a class="nav-link scrollto" href="gallery.php">Gallery</a></li>
                  <li class="dropdown"><a href="doctors.php"><span>Doctors</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                      <li><a href="doctors-detail.php">Doctors Details</a></li>
                    </ul>
                  </li>
                  <li><a class="nav-link scrollto" href="contact.php">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
              </nav><!-- .navbar -->
          </div>

    </div>
  </header><!-- End Header -->

  <script>
    document.addEventListener("DOMContentLoaded", function(){
		
		window.addEventListener('scroll', function() {
	       
			if (window.scrollY > 200) {
				document.getElementById('stickable-header').classList.add('fixed-top');
				// add padding top to show content behind navbar
				navbar_height = document.querySelector('.stickable-header').offsetHeight;
				document.body.style.paddingTop = navbar_height + 'px';
			} else {
			 	document.getElementById('stickable-header').classList.remove('fixed-top');
				 // remove padding top from body
				document.body.style.paddingTop = '0';
			} 
		});
	}); 
</script>
