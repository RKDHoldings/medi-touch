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
        <h2>Success Stories</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Success Stories</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->



  <!-- Before and After section Start  -->
  <section class="before-after-page" id="before-after-page">
    <div class="container">
      <h3 class="page-title mb-3 text-center">
        Before and After Stories
      </h3>
      <div class="row mb-5 gx-5 gy-3">
        <div class="col-md-6">
          <div class="before-after-container">
            <div class="row mt-5 images-container ">
              <div class="col item" >
                <a href="assets/img/before-after/wrinkle-before.jpg" class="fancybox" data-fancybox="gallery1">
                  <img src="assets/img/before-after/wrinkle-before.jpg" alt="A picture of a woman's face before botox treatment" class="before"/>
                 </a>
              </div>
              <div class="col item" >
                <a href="assets/img/before-after/no-wrinkle-after.jpg" class="fancybox" data-fancybox="gallery1">
                  <img src="assets/img/before-after/no-wrinkle-after.jpg" alt="A picture of a woman's face after botox treatment" class="after" />
                </a>
              </div>
            </div>
            <h6 class="card-title text-center">Botox Treatment</h6>
          </div>
        </div>

        <div class="col-md-6">
          <div class="before-after-container">
            <div class="row mt-5 images-container ">
              <div class="col item" >
                <a href="assets/img/before-after/wrinkle-before.jpg" class="fancybox" data-fancybox="gallery1">
                  <img src="assets/img/before-after/wrinkle-before.jpg" alt="A picture of a woman's face before botox treatment" class="before"/>
                 </a> 
              </div> 
              <div class="col item">
                <a href="assets/img/before-after/no-wrinkle-after.jpg" class="fancybox" data-fancybox="gallery1">
                  <img src="assets/img/before-after/no-wrinkle-after.jpg" alt="A picture of a woman's face after botox treatment" class="after" />
                </a>
              </div>
            </div>
            <h6 class="card-title text-center">Botox Treatment</h6>
          </div>
        </div>
      </div>
  </section>
  <!-- Before and After section end  -->

</main><!-- End #main -->

<?php
include('include/footer.php');
?>