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
  <section class="before-after" id="before-after">
    <div class="container mb-5">
      <div class="row mt-5">
        <div class="col-lg-12">
          <h3 class="text-center my-4">Success Stories</h3>
          <div class="row">
            <p class="text-center col-md-8 mx-auto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus dapibus iaculis scelerisque. Suspendisse mattis, neque sed blandit auctor, dolor leo efficitur magna, id luctus erat massa nec ipsum. Donec libero justo,Suspendisse mattis, neque sed blandit auctor, dolor leo efficitur magna</p>
          </div>
        </div>
      </div>

      <div class="row gx-5 my-5">
        <div class="col-xl-6 mb-5 slider1">
          <div class="slider-wrapper">
            <div class="images">
              <div class="img-1"></div>
              <div class="img-2"></div>
            </div>
            <div class="slider">
              <div class="drag-line">
                <span></span>
              </div>
              <input type="range" min="0" max="100" value="50">
            </div>
          </div>
        </div>
        <div class="col-xl-6 mb-5 slider2">
          <div class="slider-wrapper">
            <div class="images">
              <div class="img-1"></div>
              <div class="img-2"></div>
            </div>
            <div class="slider">
              <div class="drag-line">
                <span></span>
              </div>
              <input type="range" min="0" max="100" value="50">
            </div>
          </div>
        </div>
      </div>
  </section>
  <!-- Before and After section end  -->

</main><!-- End #main -->

<?php
include('include/footer.php');
?>