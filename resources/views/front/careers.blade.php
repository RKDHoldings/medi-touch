@extends('layouts.app')
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="">
                    <h2>Our Job Vacancies</h2>
                    <ol>
                        <li><a href="{{ route('welcome') }}">Home</a></li>
                        <li>Join Us</li>
                    </ol>
                </div>
            </div>
        </section><!-- End Breadcrumbs -->

        <!-- Career section start-->

        <section class="careers-area" id="careers">
            <div class="container">
                <div class="services-items">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="site-heading">
                                <h3 class="heading-title">Interested in working with us?</h3>
                                <p>Our hiring process is different than the conventional hiring process. We follow following
                                    steps before accepting the team member.
                                    Take a look at our Vacancies or send us your full resume by e-mail :
                                    @php $site_setting = \App\Models\SiteSetting::firstOrCreate([]); @endphp
                                    <a href="mailto:{{ $site_setting->email ?? 'clinic.meditouch@gmail.com' }}">{{ $site_setting->email ?? 'clinic.meditouch@gmail.com' }}</a>
                                </p>
                            </div>
                            <div class="jobs-heading d-flex align-items-center">
                                <h3>Open Positions</h3>
                                <img src="{{ asset('assets/img/icon/portfolio.png') }}" class="ms-2 job-icon" alt="" />
                            </div>
                            <div class="row mt-4">
                                <!-- Single Item -->
                                <div class="jobs-single col-lg-12">
                                    <div class="accordion accordion-flush" id="faqlist1">
                                        <div class="accordion-item w-100">
                                            @foreach ($careers as $index => $career)
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#faq-content-{{ $index + 1 }}">
                                                        <div
                                                            class="d-block d-sm-flex justify-content-between w-100 job-listings">

                                                            <div class="position">
                                                                <h5>
                                                                    {!! $career->position !!}
                                                                    <span class="num-vacancy"> - {{ $career->vacancy }}</span>
                                                                </h5>
                                                            </div>

                                                            <div class="vacancy-type">
                                                                <span> {!! $career->status !!}</span>
                                                            </div>
                                                            <div class="vacancy-post-time">
                                                                <ul class="meta me-3">
                                                                    <li class="job-type full-time">{!! $career->timing !!}</li>
                                                                    <li class="date"><time>Posted on
                                                                            {{ date('Y-m-d', strtotime($career->created_at)) }}</time>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </button>
                                                </h2>
                                                <div id="faq-content-{{ $index + 1 }}" class="accordion-collapse collapse"
                                                    data-bs-parent="#faqlist1">
                                                    <div class="accordion-body">
                                                        <h6>Roles and Responsibilities</h6>
                                                        <p>{!! $career->description !!}</p>

                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <!-- single job list end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </section>
        <!-- Career we do section end -->

    </main>
@endsection