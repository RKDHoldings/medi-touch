@extends('layouts.app')

@push('css')
<meta property="og:title" content="About Meditouch Hair & Skin Clinic " />
<meta property="og:type" content="website"/>
<meta property="og:description" content="Explore the story, values, and commitment of Meditouch Hair & Skin Clinic — a haven for dermatological excellence and personalized care." />
<meta property="og:url" content="{{ route('about') }}" />
<meta property="og:image" content="{{ asset('assets/img/meta/aboutus-meditouch.com.np.webp') }}"/>
@endpush

@section('content')

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="">
        <h2>About</h2>
        <ol>
          <li><a href="{{ route('welcome') }}">Home</a></li>
          <li>About</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <section class="about-wrapper">
    <div class="container" data-aos="fade-up">
      <div class="row align-items-center">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
          <div class="about-img" data-aos="zoom-in" data-aos-delay="100">
            <img src="{{ asset('assets/img/front-meditouch.com.np.webp')}}" alt="">
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
          <div class="about-info">
            <h3 class="heading-title">About us</h3>  
            <div class="heading-wrapper">
              <h2>
                We have 4+ Years , <br class="d-none d-md-block" />Experience.
              </h2>
            </div>
            <p class="mb-3">
              From its humble beginnings, Meditouch's journey has been characterized by a relentless pursuit of excellence
              and a dedication to patient-centric principles. Every interaction at the clinic is imbued with warmth, empathy,
              and professionalism, fostering enduring relationships built on trust and reliability.
            </p>
            <a href="{{ route('appointment') }}" class="btn btn-primary">Book now</a>
          </div>
        </div>
      </div>
    </div>
  </section>

   <!-- ======= Our story start Section ======= -->     
   <section id="our-story"> 
        <div class="container">
             <div class="story-wrapper">
             <div class="row">
                   <div class="col-lg-12">
                        <div class="about-story">
                            <h3 class="heading-title">Our Story</h3>
                            <p> The Story of Meditouch Skin and Hair Clinic:</p>

                            <p>
                            In February 2020, amidst the global turmoil of the COVID-19 crisis, a visionary initiative was born in Pokhara,
                             Nepal — Meditouch Skin and Hair Clinic. Founded with a purpose to address the glaring gap in specialized healthcare services, particularly in 
                             dermatology, cosmetology, and venereology, Meditouch emerged as a beacon of hope and excellence.
                             </p>

                             <p>
                             Driven by a dynamic duo, the clinic's inception was the culmination of diverse expertise and a 
                             shared passion for healthcare. One founder, armed with a pharmacy degree and an MBA, brought strategic business acumen, while the other,
                             a seasoned consultant dermatologist, contributed invaluable clinical proficiency.

                             </p>
                             <p>
                              In a region where access to specialized dermatological care was limited, Meditouch set out to redefine 
                              standards by offering comprehensive and cutting-edge treatments tailored to individual needs. Despite the daunting challenges posed by 
                              the pandemic, the founders remained unwavering in their commitment to serve the community. They swiftly adapted, implementing stringent safety
                              measures while maintaining a steadfast focus on patient care and satisfaction.
                             </p>

                             <p>
                             From its humble beginnings, Meditouch's journey has been characterized by a relentless pursuit of excellence and a dedication to 
                             patient-centric principles. Every interaction at the clinic is imbued with warmth, empathy, and professionalism, fostering enduring relationships
                              built on trust and reliability.
                             </p>
                             <p>
                               As word spread of Meditouch's exceptional services, the clinic quickly gained renown for its efficacy and compassion. 
                               Patients praised not only the treatments' effectiveness but also the personalized attention and expertise of the entire team. Guided by a 
                               commitment to continuous improvement, Meditouch remains at the forefront of medical advancements, ensuring that patients receive nothing but 
                               the best in dermatological and cosmetological care.
                             </p>
                             <p>
                             Today, Meditouch Skin and Hair Clinic stands tall as a testament to the power of vision, perseverance, and dedication. What began as a 
                             humble endeavor to fill a void in healthcare has blossomed into a cornerstone of excellence, enriching the lives of countless individuals and
                              embodying the spirit of healing and compassion.
                             From its founders' pioneering spirit to its unwavering commitment to patient well-being, Meditouch's journey reflects a story of resilience,
                              innovation, and the transformative impact of compassionate care. As it continues to evolve and thrive, Meditouch remains dedicated to its mission 
                              of providing exceptional care that truly makes a difference in the lives of its patients.

                             </p>

                        </div>
                   </div>
              </div>
             </div>
        </div>
  </section> 
  <!-- ======= Our story end Section ======= -->      

  <!-- Mission and Vision -->
  <section class="vission-misson-section bg-four mb-150 rmb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mission vision-mission bg-alternate">
                            <h3>Our Mission.</h3>
                            <ul class="p-0">
                                <li><i class="bi bi-check-circle"></i>To enhance the health well-being and confidence of every 
                                     individual by prioritizing trust, loyalty, and personalized treatment experiences.
                                </li>
                                <li><i class="bi bi-check-circle"></i>To bridge the healthcare service gap in dermatology, venereology and Aesthetic practices.</li>
                                <li><i class="bi bi-check-circle"></i>To provide exceptional dermatological and Aesthetics care services with compassion, integrity, and innovation.</li>
                                <li><i class="bi bi-check-circle"></i>To be recognized as a trusted partner in our patient’s journey by providing integrative health care services </li>
                                </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="vision vision-mission background text-white d-flex align-items-center">
                            <div class="vision-content">
                              <h3>Our Vision.</h3>
                              <p> <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                To empower individual and provide unparalleled service experiences that go beyond traditional dermatological treatments enhancing quality of life
                                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                              </p>
                            </div>
                          
                            <!-- <p>It has different attractions – tropical rain, fog, dew, wall jets and it is combined with sound, 
                              caribbian storm, aroma and various lighting effects, what makes you have an unforgettable filling.</p> -->
                            <a href="{{ route('team')}}" class="theme-btn style-four mt-15">Our Experts</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
   
 
  <!-- ======= Our Team Section ======= -->
  <section id="team" class="team section-bg pt-5 mt-5">
    <div class="container">

      <div class="" data-aos="fade-up">
        <h3 class="heading-title">Our expert and <strong>dedicated Specialists</strong></h3>
        <p>
          Our company thrives with the contribution of our team. We are grateful towards everyone for their continued support to achieve our vision.
        </p>
      </div>

      <div class="row">
      @foreach($staffs as $staff)
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member" data-aos="fade-up">
            <div class="member-img">
              <img src="{{ $staff->getImage()??'https://images.unsplash.com/photo-1612349316228-5942a9b489c2?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' }}" class="img-fluid" alt="">
              <!-- <div class="social">
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
              </div> -->

            </div>
            <div class="member-info ">
              <h4 class="">{{ $staff->name }}</h4>
              <span>{{ $staff->designation }} {{ $staff->designation == 'Doctor'?'- '.$staff->specialist:'' }}</span>
              {{-- <p>{!! $staff->qualification !!}</p> --}}
              <a href="{{ route('doctor-details', $staff->slug)}}">Learn More</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>

    </div>
  </section><!-- End Our Team Section -->



</main><!-- End #main -->

@endsection