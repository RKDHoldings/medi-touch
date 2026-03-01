@extends('layouts.app')
@section('content')
    <!-- Popup/Modal Section Start -->

    <!-- Modal -->

    <!-- <div class="modal fade myModal" id="myModal"  data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                          <button type="button" class="btn-close modal-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                          <div class="modal-grid">
                                            <div class=" text-content"> -->

    <!-- <div class="text">
                                                <p class="top-text">International</p>
                                                <h5 class="occasion">Women's Day</h5>
                                                <h5 class="offer">Discount</h5>
                                                <div class="line mx-auto"></div>
                                                <div class="discount d-flex justify-content-center">
                                                  <h2 class="percentsign">
                                                    <span>9</span>
                                                    <sup>%</sup>
                                                    <sub>OFF</sub>
                                                  </h2>
                                                </div>
                                                <p class="bottom-text">On all packages and services</p>
                                              </div> -->

    <!-- <img class="card-img-top" src="assets/img/womenday-offer.webp" alt="Women Day Offer">
                                            </div>
                                            <div class=" cta">
                                              <div class="content">
                                                <img src="{{ asset('assets/img/women-march.png') }}" alt="An illustration of group of women holding each others' hand as they climb up the ladder." />
                                                <button class="btn btn-primary d-block mx-auto my-4" onclick="window.location.href='{{ route('offer-form') }}';">Book an Appointment</button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div> -->


    @if ($popups && $popups->count() > 0)
        <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">
                            @if($popups->count() > 1) Offers & Announcements @else {{ $popups->first()->title }} @endif
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-0">
                        <div id="popupCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @foreach($popups as $index => $popup)
                                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                        @if($popups->count() > 1)
                                            <div class="px-3 pt-3">
                                                <h5 class="text-center">{{ $popup->title }}</h5>
                                            </div>
                                        @endif
                                        <img class="card-img-top w-100 object-fit-cover"
                                            style="max-height: 80vh; object-position: center;" src="{{ $popup->getImage() }}"
                                            alt="{{ $popup->title }}">
                                        <div class="modal-footer justify-content-center border-0">
                                            <button class="btn btn-primary"
                                                onclick="window.location.href='{{ $popup->url }}';">{{ $popup->text }}</button>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            @if($popups->count() > 1)
                                <button class="carousel-control-prev" type="button" data-bs-target="#popupCarousel"
                                    data-bs-slide="prev"
                                    style="filter: invert(100%); align-items: center; justify-content: flex-start; padding-left: 10px; opacity: 0.8 !important;">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#popupCarousel"
                                    data-bs-slide="next"
                                    style="filter: invert(100%); align-items: center; justify-content: flex-end; padding-right: 10px; opacity: 0.8 !important;">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif




    <!-- Popup/Modal Section End -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center pt-4">
        <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
            <div class="hero-wrapper">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h5>Welcome to our Clinic</h5>
                        <h1>We Are Ready <span>For Your Skin</span>Care Help! </h1>
                        <p>Follow us to improve health, <br class="d-sm-none d-md-block" /> to enjoy and relax</p>
                        <div class="btns">
                            <a href="{{ route('appointment') }}"
                                class="btn btn-primary me-3 animated fadeInUp scrollto">Book now
                                <!-- <i class="bi bi-chevron-double-right"></i> -->
                            </a>
                            <a href="{{ route('services') }}" class="btn btn-secondary animated fadeInUp scrollto">Our
                                Services
                                <!-- <i class="bi bi-chevron-double-right"></i> -->
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="200">
                        <img src="{{ asset('assets/img/banner-hero.png') }}" class="hero-img" alt="">
                        <!-- <a href="https://www.youtube.com/watch?v=u6BOC7CDUTQ" class="glightbox play-btn"></a> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- container end -->
        <div class="shape-1">
            <img src="{{ asset('assets/img/shape/shape-1.png') }}" alt="Image">
        </div>
        <div class="shape-2">
            <img src="{{ asset('assets/img/shape/shape-2.png') }}" alt="Image">
        </div>


        <img src="{{ asset('assets/img/polygon.png') }}" class="polygon-icon img-move" alt="">


    </section><!-- End Hero -->

    <main id="main">

        <section class="about-wrapper">
            <div class="container mt-5" data-aos="fade-up">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-5 col-md-6 col-sm-12 col-12  d-flex align-items-center" data-aos="zoom-out"
                        data-aos-delay="100">
                        <div class="image-stack">
                            <img src="{{ $home_about && $home_about->image_front ? asset($home_about->image_front) : asset('assets/img/image4-meditouch.com.np.webp') }}"
                                alt="" class="stack-front img-fluid  ">
                            <img src="{{ $home_about && $home_about->image_back ? asset($home_about->image_back) : asset('assets/img/image10-meditouch.com.np.webp') }}"
                                alt="" class="stack-back img-fluid">
                            <img src="{{ $home_about && $home_about->image_middle ? asset($home_about->image_middle) : asset('assets/img/about-2.jpg') }}"
                                alt="" class="stack-middle">

                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-7 col-md-5 col-sm-12 col-12">
                        <div class="about-info">
                            <h3 class="heading-title">{{ $home_about->heading_title ?? 'About us' }}</h3>
                            <div class="heading-wrapper">
                                <h2>
                                    {!! $home_about->main_heading ?? 'We have 4+ Years , <br class="d-none d-md-block" />Experience.' !!}
                                </h2>
                            </div>
                            <p class="mb-3">
                                {!! $home_about->subheading ?? 'Follow us to improve health, <br class="d-  d-md-block" /> to enjoy and relax' !!}
                            </p>
                            <div class="more-about mt-3">
                                <h4>{{ $home_about->mission_title ?? 'Our mission and Vision' }}</h4>
                                <p>
                                    {{ $home_about->mission_description ?? "Our mission at Meditouch Skin & Hair Clinic is to enhance every individual's health, well-being, and confidence by prioritizing trust, loyalty, and personalized treatment experiences. We aim to bridge the healthcare service gap in dermatology, venereology, and aesthetic practices, providing exceptional care with compassion, integrity, and innovation." }}
                                </p>
                                <a href="{{ $home_about->button_link ?? '/about' }}" class="btn btn-primary mb-0">
                                    {{ $home_about->button_text ?? 'More about us' }}
                                    <i class="bi bi-chevron-double-right"></i>
                                </a>
                                <span class="call-box">
                                    <div class="icon">
                                        <img src="{{ asset('assets/img/call.png') }}" alt="shape">
                                    </div>
                                    <div class="text">
                                        <strong>Call Us Anytime</strong>
                                        <a href="tel:{{ $home_about->phone_number ?? '061-590664' }}">
                                            {{ $home_about->phone_number ?? '061-590664' }}</a>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="what-we-do">
            <div class="container">
                <div class="service-wrappper">
                    <div class="heading-double d-md-flex justify-content-between align-items-base">
                        <h3 class="heading-title mt-3 text-sm-left">What services we provide you</h3>
                        <a href="/services" class="">
                            <h5>View all Services <i class="bi bi-arrow-right ms-2"></i></h5>
                        </a>
                    </div>
                    <!-- <div class="col-12 col-md-7 mx-auto">
                                              <p class="text-center ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus dapibus iaculis scelerisque.</p>
                                            </div> -->
                    <div class="row">
                        @forelse($services as $service)
                            <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1200"
                                data-aos-delay="{{ 200 + ($loop->index * 200) }}">
                                <div class="single-service-card">
                                    <a href="{{ route('services') }}"><img class="object-fit-cover"
                                            src="{{ $service->image ? asset($service->image) : asset('assets/img/services/opd-meditouch.com.np.webp') }}"
                                            alt="{{ $service->title }}"></a>
                                    <div class="service-content mt-0">
                                        <h3>
                                            <a href="{{ route('services') }}">{{ $service->title }}</a>
                                        </h3>
                                        <div class="bottom">
                                            <a href="{{ route('services') }}"><i class="bi bi-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                                <div class="single-service-card">
                                    <a href=""><img class="object-fit-cover"
                                            src="{{ asset('assets/img/services/opd-meditouch.com.np.webp') }}" alt="image"></a>
                                    <div class="service-content mt-0">
                                        <h3>
                                            <a href="{{ route('services') }}">OPD Service </a>
                                        </h3>
                                        <div class="bottom">
                                            <a href="{{ route('services') }}"><i class="bi bi-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">
                                <div class="single-service-card">
                                    <a href=""><img class="object-fit-cover"
                                            src="{{ asset('assets/img/services/dermatosurgery-meditouch.com.np.webp') }}"
                                            alt="image"></a>
                                    <div class="service-content mt-0">
                                        <h3>
                                            <a href="{{ route('services') }}">Dermatosurgery</a>
                                        </h3>
                                        <div class="bottom">
                                            <a href="{{ route('services') }}"><i class="bi bi-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="600">
                                <div class="single-service-card ">
                                    <a href=""><img class="object-fit-cover"
                                            src="{{ asset('assets/img/services/aestheticservices-meditouch.com.np.webp') }}"
                                            alt="image"></a>
                                    <div class="service-content mt-0">
                                        <h3>
                                            <a href="{{ route('services') }}">Aesthetic Service</a>
                                        </h3>
                                        <div class="bottom">
                                            <a href="{{ route('services') }}"><i class="bi bi-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </section>


        <!-- why choose us section start  -->
        <section id="why-choose-us" class="why-choose-us position-relative">
            <div class="shape">
                <img src="{{ asset('assets/img/shape/new.svg') }}" alt="Shape" class="w-100">
            </div>
            <div class="container px-4">
                <div class="inner-container ">
                    <div class=" text-container" data-aos="fade-right" data-aos-duration="1400" data-aos-delay="200">
                        <div class="div text-sm-center text-md-start section-small-title">
                            <!-- <img src="{{ asset('assets/img/meditouch-cropped.png') }}" alt="meditouch logo" width="55px" class="" /> -->
                            <!-- <span class="text-uppercase">why choose us</span> -->
                        </div>
                        <h3 class="heading-title text-md-start">Why choose us</h3>
                        <div class="heading-wrapper">
                            <h2>
                                We Are Always Open <br class="d-none d-md-block">For Your Health Services
                            </h2>
                        </div>
                        <div class="feature-list">
                            <div class="feature row ">
                                <div class="number-box me-4 col-2">01</div>
                                <div class="feature-text col">
                                    <h3 class="feature-title mt-0">Comprehensive Care</h3>
                                    <p class="feature-description">We specialize in holistic skin and hair health,
                                        addressing dermatology, cosmetology, and venereology management.</p>
                                </div>
                            </div>
                            <div class="feature row ">
                                <div class="number-box me-4 col-2">02</div>
                                <div class="feature-text col">
                                    <h3 class="feature-title">Innovation and Technology</h3>
                                    <p class="feature-description">Committed to excellence, we employ cutting-edge
                                        diagnostic tools, and innovative treatments to ensure optimal outcomes for our
                                        patients.</p>
                                </div>
                            </div>
                            <div class="feature row ">
                                <div class="number-box me-4 col-2">03</div>
                                <div class="feature-text border-0 col">
                                    <h3 class="feature-title ">Trust and Loyalty</h3>
                                    <p class="feature-description">Pioneering healthcare excellence in Pokhara, we build
                                        trust and loyalty by prioritizing transparent communication to patient satisfaction.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="image-container h-100 h-sm-auto" data-aos="fade-left" data-aos-duration="1400"
                        data-aos-delay="400">
                        <img src="{{ asset('assets/img/whychooseus-meditouch.com.np.webp') }}"
                            alt="young-female-doctor-prepares-surgery-wears-blue-surgical-gloves-coat-mask"
                            class="ms-md-5" />
                    </div>
                </div>
            </div>

        </section>
        <!-- why choose us section end  -->
        <!-- <section id="what-we-do">
                                        <div class="container">
                                          <div class="row">
                                            <div class="col-lg-12">
                                              <h3 class="mt-3 text-start">What we provide you</h3>
                                            </div>
                                          </div>

                                          <div class="row">
                                            <div class="d-flex video-wrapper w-100 ">
                                              <div class="video-background">
                                                <a href="https://www.youtube.com/watch?v=u6BOC7CDUTQ" class="glightbox play-btn"></a>
                                              </div>

                                            </div>
                                          </div>
                                        </div>
                                      </section> -->


        <!-- appointment process -->
        <section class="process-area default-padding-bottom">
            <!-- Shape -->
            <!-- <div class="shape">
                                                <img src="assets/img/shape/1.png" alt="Shape">
                                            </div> -->
            <!-- End Shape -->

            <div class="container">
                <div class="process-items">
                    <div class="row">
                        <div class="col-lg-5 heading">
                            <h3 class="heading-title">How to get a <br class="d-none d-md-block"> consultation from us?
                            </h3>
                            <p>Getting a consultation from us is simple and convenient. Follow these easy steps:</p>
                            <a class="btn btn-md btn-primary mb-4" href="{{ route('appointment') }}">Full Process <i
                                    class="fas fa-angle-right"></i></a>
                        </div>
                        <div class="col-lg-7">
                            <div class="process-items text-center">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 single-item" data-aos="fade-up" data-aos-duration="1200"
                                        data-aos-delay="200">
                                        <div class="item">
                                            <img src="{{ asset('assets/img/icon/schedule.png') }}" alt="">
                                            <h5>Make an Appointment</h5>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 single-item" data-aos="fade-up" data-aos-duration="1200"
                                        data-aos-delay="400">
                                        <div class="item">
                                            <img src="{{ asset('assets/img/icon/doctor.png') }}" alt="">
                                            <h5>Select Expert Doctor</h5>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 single-item " data-aos="fade-up" data-aos-duration="1200"
                                        data-aos-delay="600">
                                        <div class="item">
                                            <img src="{{ asset('assets/img/icon/consultation.png') }}" alt="">
                                            <h5>Confirm Consultation</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ceo section start -->
        <section id="ceo-message" class="ceo-message">
            <div class="container" data-aos="fade-up">
                <h3 class="heading-title">Message from founder</h3>
                <div class="events-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="row event-item">
                                <div class="col-lg-8 pt-4 pt-lg-0 ">
                                    <div class="ceo-content">

                                        <h5>
                                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                            Welcome to Meditouch, where serenity meets innovation in healthcare. We're
                                            passionate pioneers of holistic dermatology & cosmetology,
                                            offering personalized care and cutting-edge treatments for a healthier, more
                                            vibrant you. Thank you for choosing us!
                                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                        </h5>
                                        <h3>Gautam Sunar </h3>
                                        <a href="/about" class="btn btn-primary mt-3">Our story</a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <img src="{{ asset('assets/img/testimonials/gautam-meditouch.com.np.webp') }}"
                                        class="img-fluid post-img" alt="">
                                </div>
                            </div>
                        </div><!-- End testimonial item -->





                    </div>
                    <div class="swiper-pagination"></div>
                    <!-- <div class="swiper-button-prev"></div>
                                      <div class="swiper-button-next"></div>

                                      <div class="swiper-scrollbar"></div>
                                          </div> -->

                </div>
        </section>


        <!-- news and articles start -->
        <section class="news-blogs" id="news-blogs">
            <div class="container">
                <div class="heading-double d-md-flex justify-content-between align-items-base">
                    <h3 class="heading-title">News & Articles</h3>
                    <a href="{{ route('articles') }}" class="">
                        <h5>View more news <i class="bi bi-arrow-right ms-2"></i></h5>
                    </a>
                </div>
                <div class="row gx-5 gy-4">
                    @foreach ($articles as $article)
                        <div class="col-md-6 col-xl-4">
                            <div onclick="window.location.href='{{ route('article-details', $article->slug) }}';"
                                class="card border-0 img-date">
                                <div class="img-container">
                                    <img src="{{ $article->getImage() ?? asset('assets/img/article/article.jpg') }}"
                                        class="card-img-top rounded-2 shadow" alt="{{ $article->title }}">
                                    <div class="date">
                                        <p class="day">{{ $article->created_at->format('d') }}</p>
                                        <p class="month-year">{{ $article->created_at->format('M Y') }}</p>
                                    </div>
                                </div>
                                <div class="px-3">
                                    <h6 class="card-subtitle my-3 text-body-secondary"><i
                                            class='bx bxs-user me-1'></i>{{ $article->user->name ?? 'Admin' }}</h6>
                                    <h5 class="card-title"><a href="#">{{ $article->title }}</a></h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>

        </section>
        <!-- news and articles end -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials position-relative">
            <div class="container">
                <div class="testimonial-wrapper">
                    <h3 class="heading-title">Testimonials</h3>
                    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                        <div class="swiper-wrapper">
                            @foreach ($testimonials as $testimonial)
                                <div class="swiper-slide">
                                    <div class="testimonial-wrap">
                                        <div class="testimonial-item">
                                            <img src="{{ $testimonial->getImage() ?? asset('assets/img/testimonials/testimonials-1.jpg') }}"
                                                class="testimonial-img object-fit-cover" alt="{{ $testimonial->name }}">
                                            <h3>{{ $testimonial->name }}</h3>
                                            <!-- <h4>Ceo &amp; Founder</h4> -->
                                            <p class="text-center">
                                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                                {!! $testimonial->message !!}
                                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- End testimonial item -->
                                <div class="swiper-pagination"></div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <!-- <img src="{{ asset('assets/img/shape.png') }}" class="bg-shape" alt=""> -->
        </section>
        <!-- End Testimonials Section -->



        <!-- Contact section -->
        <!-- <section id="feedback" class="feedback contact">
                                               <div class="container"  data-aos="fade-up">
                                                    <div class="row" data-aos="fade-up" data-aos-delay="100">

                                                         <div class="col-lg-6">

                                                            <img src="assets/img/feedback.png" alt="">
                                                         </div>
                                                         <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                                                              <div class="heading-wrapper">
                                                                      <h2>
                                                                        Give Us Suggestions
                                                                      </h2>
                                                                      <p>Please leave a  message of a suggestion </p>
                                                              </div>

                                                            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                                              <div class="row">
                                                                <div class="form-group">
                                                                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
                                                                </div>
                                                                <div class="form-group mt-3 mt-md-0">
                                                                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
                                                                </div>
                                                              </div>
                                                              <div class="form-group mt-3">
                                                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="">
                                                              </div>
                                                              <div class="form-group mt-3">
                                                                <textarea class="form-control" name="message" rows="4" placeholder="Message" required=""></textarea>
                                                              </div>

                                                              <div class="mt-3">
                                                                <button type="submit">Submit</button>
                                                              </div>
                                                            </form>
                                                         </div>
                                                    </div>
                                               </div>
                                         </section> -->

        <!-- FAQ Section Start -->
        <section class="faq" id="faq">


            <div class="container">
                <div class="row gx-5">
                    <div class="col-12 col-lg-6">
                        <div class="accordion" id="accordionExample">
                            <h3 class="heading-title text-capitalize">Have any questions or verify information</h3>
                            <p class="faq-subtitle mb-4">Welcome to Meditouch Skin and Hair Clinic's FAQ section, designed
                                to address your most
                                common inquiries. If you don't find what you're looking for, don't hesitate to ask us
                                directly on our contact page.</p>
                            <div class="faq-container">
                                @foreach ($faqs as $k => $faq)
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse{{ $k }}" aria-expanded="true"
                                                aria-controls="collapse{{ $k }}">
                                                {{ $k + 1 }}. {{ $faq->question }}
                                            </button>
                                        </h2>
                                        <div id="collapse{{ $k }}"
                                            class="accordion-collapse collapse {{ $k == 0 ? 'show' : '' }}"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>
                                                    {!! $faq->answer !!}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 mt-lg-5 mt-xl-5 mt-xxl-5">
                        <div class="img-container my-auto ">
                            <img src="{{ asset('assets/img/faq-meditouch.com.np.webp') }}" class="rounded"
                                alt="An image of senior doctor consulting patient" />
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- FAQ Section End -->

        <!-- Book an appointment banner section Start  -->
        <section id="appointment" class="appointment apmt">
            <div class="container p-0">
                <div class="appointment-banner apmt-banner">
                    <div class="row">
                        <div class="me-auto text-content">
                            <div class="px-4">
                                <h3 class="title mb-3">Book an appointment today</h3>
                                <p class="subtitle text-center">Transform your look with our expert care</p>
                                <button type="button" onclick="window.location.href='{{ route('appointment') }}';"
                                    class="btn btn-primary">Book Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Book an appointment banner section end  -->




    </main><!-- End #main -->
@endsection