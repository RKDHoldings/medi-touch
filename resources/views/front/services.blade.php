@extends('layouts.app')
@push('css')
    <meta property="og:title" content="Our Special Services - Meditouch Hair & Skin Clinic" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Explore our special services at Meditouch Hair & Skin Clinic. " />
    <meta property="og:url" content="{{ route('services') }}" />
    <meta property="og:image" content="{{  asset('assets/img/meta/service.png') }}" />
@endpush

@section('content')


    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="">
                    <h2>Our Special Services</h2>
                    <ol>
                        <li><a href="{{ route('welcome') }}">Home</a></li>
                        <li>Services</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- what we do section start-->

        <section class="services-area text-center" id="what-we-do">
            <div class="container">
                <div class="services-items">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="">
                                <h3 class="heading-title ">Departments</h3>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @forelse($services as $service)
                            <!-- Single Item -->
                            <div class="services-single col-lg-6">
                                <div class="item">
                                    <div class="info">
                                        <div class="top">
                                            @if($service->icon)
                                                <img src="{{ asset($service->icon) }}" class="img-fluid"
                                                    alt="{{ $service->title }}">
                                            @else
                                                <img src="{{ asset('assets/img/icon/orthopedic.png') }}" class="img-fluid" alt="">
                                            @endif
                                            <strong>{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</strong>
                                        </div>
                                        <h4>
                                            <a href="#">{{ $service->title }}</a>
                                        </h4>
                                        @if($service->description)
                                            {!! $service->description !!}
                                        @endif
                                        <a class="btn btn-md btn-primary" href="{{ route('appointment') }}">Get Appointment <i
                                                class="fas fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        @empty
                            <!-- Fallback: Static services if none in DB -->
                            <div class="services-single col-lg-6">
                                <div class="item">
                                    <div class="info">
                                        <div class="top">
                                            <img src="{{ asset('assets/img/icon/orthopedic.png')}}" class="img-fluid" alt="">
                                            <strong>01</strong>
                                        </div>
                                        <h4><a href="#">OPD Service</a></h4>
                                        <ul>
                                            <li><i class="bi bi-check-circle"></i> Skin, hair, nails, sexually transmitted
                                                diseases treatment and counseling</li>
                                            <li><i class="bi bi-check-circle"></i>Successful treatment of facial scars, black
                                                spots, scars, wrinkles, pimples will be done </li>
                                            <li><i class="bi bi-check-circle"></i>Treatment for quick ejaculation, sexual desire
                                                and sexual weakness</li>
                                            <li><i class="bi bi-check-circle"></i>Allergic Test (Patch Test and Prick Test)</li>
                                        </ul>
                                        <a class="btn btn-md btn-primary" href="{{ route('appointment') }}">Get Appointment <i
                                                class="fas fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="services-single col-lg-6">
                                <div class="item">
                                    <div class="info">
                                        <div class="top">
                                            <img src="{{ asset('assets/img/icon/skin.png')}}" class="img-fluid" alt="">
                                            <strong>02</strong>
                                        </div>
                                        <h4><a href="#">Dermatology Services</a></h4>
                                        <ul>
                                            <li><i class="bi bi-check-circle"></i>Removal of moles, acne, skin tag, lumps and
                                                many more </li>
                                            <li><i class="bi bi-check-circle"></i>Electrocautery, Radiocautery</li>
                                            <li><i class="bi bi-check-circle"></i>Split ear repair</li>
                                            <li><i class="bi bi-check-circle"></i>Successful treatment of nails will be done
                                            </li>
                                        </ul>
                                        <a class="btn btn-md btn-primary" href="{{ route('appointment') }}">Get Appointment <i
                                                class="fas fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="services-single col-lg-6">
                                <div class="item">
                                    <div class="info">
                                        <div class="top">
                                            <img src="{{ asset('assets/img/icon/surgery.png')}}" class="img-fluid" alt="">
                                            <strong>03</strong>
                                        </div>
                                        <h4><a href="#">Aesthetic Service</a></h4>
                                        <ul>
                                            <li><i class="bi bi-check-circle"></i>Hydrafacial</li>
                                            <li><i class="bi bi-check-circle"></i>PRP (Plastic Rich Plasma Therapy)</li>
                                            <li><i class="bi bi-check-circle"></i>Acne Scar Management</li>
                                            <li><i class="bi bi-check-circle"></i>Chemical Peeling </li>
                                            <li><i class="bi bi-check-circle"></i>Botox </li>
                                            <li><i class="bi bi-check-circle"></i>Laser therapy (Hair, Tattoo removal) </li>
                                        </ul>
                                        <a class="btn btn-md btn-primary" href="{{ route('appointment') }}">Get Appointment <i
                                                class="fas fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="services-single col-lg-6">
                                <div class="item">
                                    <div class="info">
                                        <div class="top">
                                            <img src="{{ asset('assets/img/icon/medicine.png')}}" class="img-fluid" alt="">
                                            <strong>04</strong>
                                        </div>
                                        <h4><a href="#">Pharmacy Service</a></h4>
                                        <ul>
                                            <li><i class="bi bi-check-circle"></i>Medication Dispensing</li>
                                            <li><i class="bi bi-check-circle"></i>Prescription Management</li>
                                            <li><i class="bi bi-check-circle"></i>Medication Consultation</li>
                                            <li><i class="bi bi-check-circle"></i>Health and Wellness Products </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </section>
        <!-- what we do section end -->

        <!-- Book an appointment banner section Start  -->
        <section id="appointment" class="appointment intl-patient">
            <div class="container p-0">
                <div class="appointment-banner intl-patient-banner">
                    <div class="row">
                        <div class="me-auto text-content">
                            <div class="px-4">
                                <h3 class="title mb-3">Explore International Patient Services</h3>
                                <p class="subtitle text-center">Discover specialized care tailored to international patients
                                </p>
                                <button type="button"
                                    onclick="window.location.href='{{ route('international-patient-services')}}';"
                                    class="btn btn-primary">Learn More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Book an appointment banner section end  -->

    </main>

@endsection