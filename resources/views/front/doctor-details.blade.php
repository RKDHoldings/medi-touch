@extends('layouts.app')

@push('css')
    <meta property="og:title" content="Meet Our Skilled Doctors - Meditouch Hair & Skin Clinic" />
    <meta property="og:type" content="website" />
    <meta property="og:description"
        content="Explore the profiles of our experienced doctors at Meditouch Hair & Skin Clinic. Learn about their expertise, professional background, and achievements. Our team is committed to providing top-notch dermatological and cosmetological care, ensuring your health and beauty are in expert hands." />
    <meta property="og:url" content="{{ route('team') }}" />
    <meta property="og:image" content="{{ asset('assets/img/doctor.png') }}" />
@endpush


@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="">
                    <h2>{{ $item->designation == 'Doctor' ? 'Doctor' : 'Staff' }}</h2>
                    <ol>
                        <li><a href="{{ route('welcome') }}">Home</a></li>
                        <li>{{ $item->designation == 'Doctor' ? 'Doctor' : $item->designation }}</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <section class="about-doctor-area py-5">
            <div class="container mt-4">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="about-box-container mb-5 row gx-4 gy-4">
                            <div class="col-12 col-xl-12">
                                <div class="card border-0 doctor-card about-box">
                                    <img class="card-img-top"
                                        src="{{ $item->getImage() ?? asset('assets/img/DoctorPotrait.jpg') }}"
                                        alt="Image of a Doctor">
                                    <div class="card-body">
                                        <h3 class="doctor-name card-title">{{ $item->name }}</h3>
                                        <p class="designation mb-4">{{ $item->designation }}
                                            {{ $item->designation == 'Doctor' ? '- ' . $item->specialist : '' }}</p>
                                        {{-- <p class="card-text" data-aos="fade-up" class="aos-init">{{ $item->qualification }}
                                        </p> --}}
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-6 col-xl-12">
                                                                                                                                              <div class="personal-information about-box">
                                                                                                                                                <div class="card-body">
                                                                                                                                                  <h3 class="card-title mb-4">Personal Information</h3>
                                                                                                                                                  <p class="box-link mb-3"><span class="icon-btn me-3"><i class="bi bi-telephone-fill"></i></span><a>{{ $item->phone ?? '--' }}</a></p>
                                                                                                                                                  <p class="box-link mb-3"><span class="icon-btn me-3"><i class="bi bi-envelope-fill"></i></span><a>{{ $item->email ?? '--' }}</a></p>
                                                                                                                                                </div>
                                                                                                                                              </div>
                                                                                                                                            </div> -->

                        </div>
                    </div>
                    <div class="col-xl-8 px-5">
                        <div class="doctor-bio ">
                            <h2 data-aos="fade-u
                            p" class="aos-init introduction">Introduction
                            </h2>
                            <div class="bio-text">
                                <p data-aos="fade-up" class="aos-init pb-3">{!! $item->introduction !!}</p>

                            </div>
                            <div class="education pb-5 aos-init" data-aos="fade-up">
                                <h4>Educational Info</h4>

                                {{-- <h4 data-aos="flip-up" class="aos-init">Educational Info</h4>
                                <p data-aos="fade-up" class=" aos-init mb-0">{!! $item->qualification !!}</p> --}}

                                <p data-aos="fade-up" class="aos-init pb-3">{!! $item->qualification !!}</p>

                            </div>
                            @if ($item->designation == 'Doctor')
                                <div class="experience pb-5 aos-init" data-aos="fade-up">
                                    <h4>Professional Experience</h4>
                                    {{-- <div data-aos="fade-up" class=" aos-init aos-animate">{!! $item->experience !!}</div> --}}

                                    <p data-aos="fade-up" class="aos-init pb-3">{!! $item->experience !!}</p>

                                </div>
                            @endif

                            @if ($item->designation == 'Doctor')
                                <div class="experience pb-5 aos-init" data-aos="fade-up">
                                    <h4>Awards/Achievements</h4>


                                    <p data-aos="fade-up" class="aos-init pb-3">{!! $item->awards !!}</p>

                                </div>
                            @endif
                            <div class="experience pb-5 aos-init" data-aos="fade-up">
                                <h4>Skills</h4>


                                <p data-aos="fade-up" class="aos-init pb-3">{!! $item->skills !!}</p>

                            </div>
                            <div class="experience pb-5 aos-init" data-aos="fade-up">
                                <h4>Others</h4>


                                <p data-aos="fade-up" class="aos-init pb-3">{!! $item->others !!}</p>

                            </div>



                        </div>

                    </div>
                    <!-- Book an appointment banner section Start  -->
                    <section id="appointment" class="appointment">
                        <div class="container p-0">
                            <div class="appointment-banner">
                                <div class="row">
                                    <div class="me-auto text-content">
                                        <div class="px-4">
                                            <h3 class="title mb-3">Book an appointment today</h3>
                                            <p class="subtitle text-center">Transform your look with our expert care</p>
                                            <button type="button"
                                                onclick="window.location.href='{{ route('appointment') }}';"
                                                class="btn btn-primary">Book Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Book an appointment banner section end  -->
                </div>
            </div>

        </section>

    </main>
@endsection
