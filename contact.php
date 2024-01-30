<?php
include('include/html-header.php');
?>

<?php
include('include/navbar.php');
?>

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Contact</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Contact</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->



  <!-- ======= Contact Section ======= -->




  <section id="contact" class="contact">


    <div class="row py-5 justify-content-center contact-form-section" >
      <div class="container" data-aos="fade-up">
        <h3 class="mb-5 text-center">Contact Us</h3>
        <div class="col">
          <div class="container">
          <div class="row">
            <div class="col-12 col-xl-6">
              <img src="assets/img/model-contact-section.jpg" class="rounded-1 contact-us-img" alt="A girl posing for picture for skin clinic" />
            </div>
            <div class="col-12 col-xl-6">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form border-0">
                <div class="form-group">
                  <label for="name" class="form-label fw-bold">Name</label>
                  <input type="text" name="name" class="form-control " id="name" placeholder="Your Name" required>
                </div>
                <div class=" form-group mt-3">
                  <label for="email" class="form-label fw-bold">Email</label>
                  <input type="email" class="form-control " name="email" id="email" placeholder="Your Email" required>
                </div>
                <div class="form-group mt-3">
                  <label for="subject" class="form-label fw-bold">Subject</label>
                  <input type="text" class="form-control " name="subject" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group mt-3">
                  <label for="message" class="form-label fw-bold">Message</label>
                  <textarea class="form-control " name="message" rows="5" placeholder="Message" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>



    <!-- Contact Info Section -->
    <div class="contact-info pb-5">
      <div class="container">
      <div class="row justify-content-center" data-aos="fade-up">
        <div class="col">
          <div class="info-wrap">
            <div class="row gx-3">
              <div class="col-lg-3">
                <div class="info">
                  <div class="icon-container">
                    <i class="bi bi-geo-alt-fill"></i>
                  </div>
                  <h4>Location:</h4>
                  <p>New Road<br>Pokhara, Kaski</p>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="info">
                  <div class="icon-container">
                    <i class="bi bi-envelope-fill"></i>
                  </div>
                  <h4>Email:</h4>
                  <p class="mb-4">info@meditouch.com.np</p>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="info">
                  <div class="icon-container">
                    <i class="bi bi-telephone-fill"></i>
                  </div>
                  <h4>Call:</h4>
                  <p> 061 - 581564
                    <br>061-581564
                  </p>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="info">
                  <div class="icon-container">
                    <i class="bi bi-clock-fill"></i>
                  </div>
                  <h4>Call:</h4>
                  <p> Sunday - Friday</p>
                  <p>9:30 - 7:30</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>

      <!-- Google Map Section -->
      <div class="container">
      <div class="map-section mt-5">
        <h3 class="mb-5 text-center">Google Map</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14063.493851078929!2d83.97544390560462!3d28.211156814356034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399595d66423603b%3A0x3da6e17cef7ecb07!2sMediTouch%20Health%20Clinic!5e0!3m2!1sen!2snp!4v1706605013467!5m2!1sen!2snp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      </div>
      <!-- End of Google Map Section -->
    </div>
    <!-- End of Contact Info Section  -->


  </section>
  <!-- End Contact Section -->

</main><!-- End #main -->

<?php
include('include/footer.php');
?>