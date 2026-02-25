@extends('layouts.app')

@push('css')
    <meta property="og:title" content="Contact Us - Meditouch Hair & Skin Clinic" />
    <meta property="og:type" content="website" />
    <meta property="og:description"
        content="Get in touch with the experts at Meditouch Hair & Skin Clinic. Whether you have questions, want to schedule an appointment, or need personalized skincare advice, our team is here to assist you. Reach out to us through our contact form or visit our clinic. Your journey to radiant skin and healthy hair starts with a simple message." />
    <meta property="og:url" content="{{ route('contact') }}" />
    <meta property="og:image" content="{{ asset('assets/img/meta/contact.jpeg') }}" />
@endpush

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="">
                    <h2>Contact</h2>
                    <ol>
                        <li><a href="{{ route('welcome') }}">Home</a></li>
                        <li>Contact</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->



        <!-- ======= Contact Section ======= -->




        <section id="contact" class="contact py-0">


            <div class="row py-5 justify-content-center contact-form-section">
                <div class="container" data-aos="fade-up">

                    <div class="col">
                        <div class="container">
                            <div class="row">
                                <h3 class=" heading-title">Contact Us</h3>
                                <div class="col-12 col-xl-5">
                                    <!-- <img src="{{ asset('assets/img/model-contact-section.jpg') }}" class="rounded-1 contact-us-img" alt="A girl posing for picture for skin clinic" /> -->
                                    <div class="info-items">
                                        @php $site_setting = \App\Models\SiteSetting::firstOrCreate([]); @endphp
                                        <!-- Single Item -->
                                        <div class="item">
                                            <div class="icon">
                                                <img src="{{ asset('assets/img/icon/location.png') }}" class="" alt="" />
                                            </div>
                                            <div class="info">
                                                <h5>Location</h5>
                                                <p>{{ $site_setting->header_address ?? 'Newroad-09, Pokhara' }}</p>

                                            </div>
                                        </div>
                                        <!-- End Single Item -->
                                        <!-- Single Item -->
                                        <div class="item">
                                            <div class="icon">
                                                <img src="{{ asset('assets/img/icon/phone.png') }}" class="" alt="" />
                                            </div>
                                            <div class="info">
                                                <h5>Make a Call</h5>
                                                <p> {{ $site_setting->header_phone ?? '061-590664' }}
                                                </p>
                                            </div>
                                        </div>
                                        <!-- End Single Item -->
                                        <!-- Single Item -->
                                        <div class="item">
                                            <div class="icon">
                                                <img src="{{ asset('assets/img/icon/mail.png') }}" class="" alt="" />
                                            </div>
                                            <div class="info">
                                                <h5>Send a Mail</h5>
                                                <p>
                                                    {{ $site_setting->email ?? 'clinic.meditouch@gmail.com' }}
                                                </p>
                                            </div>
                                        </div>
                                        <!-- End Single Item -->
                                        <!-- Single Item -->
                                        <div class="item">
                                            <div class="icon">
                                                <img src="{{ asset('assets/img/icon/time.png') }}" class="" alt="" />
                                            </div>
                                            <div class="info">
                                                <h5>Opening Hours</h5>
                                                <h6>Doctors Timing :</h6>
                                                <p>
                                                    {{ $site_setting->doctor_visit_days ?? 'Sun - Fri' }}:
                                                    <span>{{ $site_setting->doctor_visit_hours ?? '11:00 AM - 6:00 PM' }}</span><br>
                                                </p>
                                                <h6>Clinic Timing</h6>
                                                <p> {{ $site_setting->clinic_timing_days ?? 'Sun - Fri' }}:
                                                    <span>{{ $site_setting->clinic_timing_hours ?? '9:30 AM - 7:00 PM' }}</span>
                                                </p>
                                            </div>
                                        </div>
                                        <!-- End Single Item -->
                                    </div>
                                </div>
                                <div class="col-12 col-xl-7">
                                    <div id="success-message" class="alert alert-success mt-3" style="display:none;"></div>

                                    <form action="{{ route('contact-submit') }}" method="post" role="form" class="php-form">
                                        @csrf <!-- Add CSRF protection -->
                                        <div class="form-group">
                                            <label for="name" class="form-label fw-bold">Name</label>
                                            <input type="text" name="name" class="form-control" id="name"
                                                placeholder="Your Name" required>
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="email" class="form-label fw-bold">Email</label>
                                            <input type="email" class="form-control" name="email" id="email"
                                                placeholder="Your Email" required>
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="subject" class="form-label fw-bold">Subject</label>
                                            <input type="text" class="form-control" name="subject" id="subject"
                                                placeholder="Subject" required>
                                        </div>
                                        <div class="form-group mt-3">
                                            <label for="message" class="form-label fw-bold">Message</label>
                                            <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                                required></textarea>
                                        </div>

                                        <div class="mt-3"><button type="submit">Send Message</button></div>
                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Contact Info Section -->
            <!--<div class="contact-info ">
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
                          </div> -->

            <!-- Google Map Section -->
            <div class="container mb-5">
                <div class="map-section mt-5">
                    <h3 class="heading-title">Google Map</h3>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14063.493851078929!2d83.97544390560462!3d28.211156814356034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399595d66423603b%3A0x3da6e17cef7ecb07!2sMediTouch%20Health%20Clinic!5e0!3m2!1sen!2snp!4v1706605013467!5m2!1sen!2snp"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <!-- End of Google Map Section -->
            <!-- Navigation Section Start -->
            <div class="navigation pt-4 pb-5">
                <div class="container">
                    <h3 class=" mt-5 heading-title">Navigation</h3>
                    <!-- <h3 class="heading-title text-md-start">Why choose us</h3>
                              <h6>We Are Always Open For Your Health Services</h6> -->
                    <div class="landmark-container-box">
                        <div class="row g-5">
                            <div class="col-6 col-md-4 col-lg-4 col-xl-3 landmark-container">
                                <div class="landmark odd">
                                    <p class="step-number">1</p>
                                    <div class="landmark-img-container">
                                        <img src="{{ asset('assets/img/navigation/roadpng.png') }}" alt="png of road">
                                    </div>
                                    <h3 class="landmark-name">Samsung Galli</h3>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-4 col-xl-3 landmark-container">
                                <div class="landmark even">
                                    <p class="step-number">2</p>
                                    <div class="landmark-img-container">
                                        <img src="{{ asset('assets/img/navigation/office-building.png') }}"
                                            alt="png of an office building">
                                    </div>
                                    <h3 class="landmark-name">MediTouch Building</h3>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-4 col-xl-3 landmark-container">
                                <div class="landmark odd">
                                    <p class="step-number">3</p>
                                    <div class="landmark-img-container">
                                        <img src="{{ asset('assets/img/navigation/parking.png') }}"
                                            alt="png of cars in parking area">
                                    </div>
                                    <h3 class="landmark-name">Underground Parking</h3>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-4 col-xl-3 landmark-container">
                                <div class="landmark even">
                                    <p class="step-number">4</p>
                                    <div class="landmark-img-container">
                                        <img src="{{ asset('assets/img/navigation/cafe.png') }}"
                                            alt="png of cafe signboard written cafe">
                                    </div>
                                    <h3 class="landmark-name">Cafeteria</h3>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-4 col-xl-3 landmark-container">
                                <div class="landmark odd">
                                    <p class="step-number">5</p>
                                    <div class="landmark-img-container">
                                        <img src="{{ asset('assets/img/navigation/pharmacy.png') }}" alt="png of pharmacy">
                                    </div>
                                    <h3 class="landmark-name">Pharmacy</h3>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-4 col-xl-3 landmark-container">
                                <div class="landmark even">
                                    <p class="step-number">6</p>
                                    <div class="landmark-img-container">
                                        <img src="{{ asset('assets/img/navigation/salon.png') }}"
                                            alt="png of a comb and scissor">
                                    </div>
                                    <h3 class="landmark-name">Salon</h3>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-4 col-xl-3 landmark-container">
                                <div class="landmark odd destination">
                                    <p class="step-number">7</p>
                                    <div class="landmark-img-container">
                                        <img src="{{ asset('assets/img/navigation/clinic.png') }}"
                                            alt="png of clinic front">
                                    </div>
                                    <h3 class="landmark-name">MediTouch Clinic</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Navigation Section End -->

            <!-- Navigation Section End -->
            </div>
            <!-- End of Contact Info Section  -->


        </section>
        <!-- End Contact Section -->
        <script>
            function showSuccessMessage(message) {
                var successMessage = document.getElementById('success-message');
                successMessage.innerHTML = message;
                successMessage.style.display = 'block';
                setTimeout(function () {
                    successMessage.style.display = 'none';
                }, 5000); // hide after five second
            }

            var successMessage = '{{ session("success") }}';
            if (successMessage) {
                showSuccessMessage(successMessage);
            }
        </script>
    </main><!-- End #main -->
@endsection