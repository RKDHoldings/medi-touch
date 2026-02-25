@extends('layouts.app')
@push('css')
    <meta property="og:title" content="Meet Our Skilled Doctors - Meditouch Hair & Skin Clinic" />
    <meta property="og:type" content="website" />
    <meta property="og:description"
        content="Explore the profiles of our experienced doctors and staff at Meditouch Hair & Skin Clinic." />
    <meta property="og:url" content="{{ route('team') }}" />
    <meta property="og:image" content="{{ asset('assets/img/doctor.png') }}" />
@endpush
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="">
                    <h2>Staffs</h2>
                    <ol>
                        <li><a href="{{ route('welcome') }}">Home</a></li>
                        <li>Staffs</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->


        <!-- ======= Our Team Section ======= -->
        <section id="team" class="team section-bg py-5">
            <div class="container">

                <div class="" data-aos="fade-up">
                    <h3 class="heading-title">Meet our <strong>Doctors</strong></h3>
                    <div class="row my-4">
                        <div class="col-12 mx-auto">
                            <p>Meet our specialized doctors at Meditouch Skin and Hair Clinic, where
                                expertise meets compassion.
                                Our dedicated team is committed to providing personalized care and advanced treatments
                                tailored to your unique needs.</p>
                        </div>
                    </div>
                </div>


                <div class="row">
                    @foreach ($head_staffs as $staff)
                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                            <div class="member" data-aos="fade-up">
                                <div class="member-img">
                                    <img src="{{ $staff->getImage() ?? 'https://images.unsplash.com/photo-1612349316228-5942a9b489c2?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' }}"
                                        class="img-fluid" alt="">
                                </div>
                                <div class="member-info ">
                                    <h4 class="">{{ $staff->name }}</h4>
                                    <span>{{ $staff->designation }}
                                        {{ $staff->designation == 'Doctor' ? '- ' . $staff->specialist : '' }}</span>
                                    {{-- <p>{{ $staff->qualification }}</p> --}}
                                    <a href="{{ route('doctor-details', $staff->slug) }}">Learn More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <section class="staff-section mt-4">
                    <div class="" data-aos="fade-up">
                        <h3 class="heading-title">Meet our <strong>Staffs</strong></h3>
                        <div class="row my-4">
                            <div class="col-12 mx-auto">
                                <p>Meet our exceptional staff at Meditouch Skin and Hair Clinic,
                                    dedicated to ensuring your comfort and well-being
                                    throughout your healthcare journey. Our team is committed to delivering professional and
                                    compassionate service at every step.</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        @foreach ($staffs as $staff)
                            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                                <div class="member" data-aos="fade-up" data-aos-delay="300">
                                    <div class="member-img">
                                        <img src="{{ $staff->getImage() ?? 'https://images.unsplash.com/photo-1612349316228-5942a9b489c2?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' }}"
                                            class="img-fluid" alt="">
                                    </div>
                                    <div class="member-info">
                                        <h4>{{ $staff->name }}</h4>
                                        <span>{{ $staff->designation == 'Accountant' ? 'Junior ' : '' }}{{ $staff->designation }}</span>
                                        <a href="{{ route('staff-details') }}">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </section>

            </div>
        </section><!-- End Our Team Section -->

    </main>
@endsection
