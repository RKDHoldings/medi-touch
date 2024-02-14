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

      <div class="">
        <h2>Doctors</h2>
        <ol>
          <li><a href="/">Home</a></li>
          <li>Doctors</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->
  
  <section class="about-doctor-area py-5">
        <div class="container mt-4">
            <div class="row">
               <div class="col-lg-5">
                 <div class="doctor-thumb aos-init aos-animate about-img" data-aos="fade-right" data-aos-anchor=".about-doctor-area">
                    <img src="assets/img/office.jpg" alt="doctor-details">
                 </div>
               </div>
               <div class="col-lg-7">
                    <div class="doctor-info">
                         <h4 data-aos="fade-up" data-aos-delay="100" data-aos-anchor=".about-doctor-area" class="aos-init aos-animate">Dr. John Doe</h4>
                            <ul class="doctor-details ps-0">
                                <li data-aos="fade-up" data-aos-delay="150" data-aos-anchor=".about-doctor-area" class="aos-init aos-animate">
                                <p>Speciality</p>: <span>Primary Specialty Cardiology</span>
                                </li>
                                <li data-aos="fade-up" data-aos-delay="200" data-aos-anchor=".doctor-details" class="aos-init aos-animate">
                                <p>Expertise</p>: <span>Reabilitation</span>
                                </li>
                                <li data-aos="fade-up" data-aos-delay="250" data-aos-anchor=".doctor-details" class="aos-init aos-animate">
                                <p>Length of Work</p>: <span>Since 2010</span>
                                </li>
                                <li data-aos="fade-up" data-aos-delay="300" data-aos-anchor=".doctor-details" class="aos-init aos-animate">
                                <p>Medical Education </p>: <span>University of California, San Francisco</span>
                                </li>
                                <li data-aos="fade-up" data-aos-delay="350" data-aos-anchor=".doctor-details" class="aos-init aos-animate">
                                <p>Certifications </p>: <span>American Board of Neurological Surgery</span>
                                </li>
                                <li data-aos="fade-up" data-aos-delay="400" class="aos-init">
                                <p>E-mail </p>: <span>roudysmith@gmail.com</span>
                                </li>
                               
                            </ul>
                    </div>
               </div>
            <div class="col-12">
                <div class="doctor-bio mt-5">
                <h2 data-aos="flip-up" class="aos-init">Biography</h2>
                    <div class="bio-text">
                          <p data-aos="fade-up" class="aos-init">Lorem ipsum dolor, sit amet consectetur adipisicing elit. In illo ea reprehenderit
                             odio suscipit esse ratione nobis veniam consectetur inventore magni earum vero eos ab nihil ipsum, eligendi vitae expedita. </p>
                          <p data-aos="fade-up" data-aos-delay="100" class="aos-init">After graduating from West Virginia University Medical School, Dr. Roudy smith completed
                          a two-year fellowship in sports medicine at Akron Children’s Hospital. During his
                          training at Akron, Dr. Jonathon Alex was team physician for the University of Akron and
                          Walsh University.</p>
                          <p data-aos="fade-up" data-aos-delay="150" class="aos-init">Efficiently myocardinate market-driven innovation via open-source alignments.
                          Dramatically engage high-Phosfluorescently expedite impactful supply chains via focused
                          results. Holistically . Compellingly supply just in time catalysts for change through.
                          </p>
                          
                    </div>
                </div>
            </div>
            </div>
        </div>
      
  </section>


  <?php
    include('include/footer.php');
    ?>