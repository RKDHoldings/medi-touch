@extends('layouts.app')
@push('css')
    <meta property="og:title" content="Women's Day Offer" />
    <meta property="og:description"
        content="Free Gynecologist consultation and sanitary pad distributation. 35% Off on skin service and 12% off on products. For group bookings please contact our nursing service 061-590664, 061-581564" />
    <meta property="og:image" content="{{ asset('assets/img/womenday.jpg') }}" />
    <meta property="og:url" content="{{ route('offer-form') }}" />

@endpush
@section('content')

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <div>
                    <h2>Book an Appointment</h2>
                    <ol>
                        <li><a href="{{ route('welcome') }}">Home</a></li>
                        <li>Book an Appointment</li>
                    </ol>
                </div>
            </div>
        </section><!-- End Breadcrumbs -->


        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <img src="..." class="rounded me-2" alt="...">
                    <strong class="me-auto">Bootstrap</strong>
                    <small>11 mins ago</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    Hello, world! This is a toast message.
                </div>
            </div>
        </div>



        <!-- Book an appointment section Start  -->
        <section class="appointment-form-section">
            <!-- <div class="top-img"></div> -->
            <div class="row">
                <div class="container appointment-form-col pt-4 my-5 px-5 col-md-9 mx-auto">
                    <div class="row form-title py-4  bottom-border bold text-center">
                        <div class="col-md-3">
                            <img src="{{ $setting->image_1 ? asset($setting->image_1) : asset('assets/img/1.jpg') }}"
                                class="dr-img" alt="{{ $setting->dermatologist_doctor_1 }}">
                        </div>
                        <div class="col-md-3">
                            <img src="{{ $setting->image_2 ? asset($setting->image_2) : asset('assets/img/2.jpg') }}"
                                class="dr-img" alt="{{ $setting->dermatologist_doctor_2 }}">
                        </div>
                        <div class="col-md-3">
                            <img src="{{ $setting->image_3 ? asset($setting->image_3) : asset('assets/img/3.jpg') }}"
                                class="dr-img" alt="{{ $setting->gynecologist_doctor_1 }}">
                        </div>
                        <div class="col-md-3">
                            <img src="{{ $setting->image_4 ? asset($setting->image_4) : asset('assets/img/4.jpg') }}"
                                class="dr-img" alt="{{ $setting->gynecologist_doctor_2 }}">
                        </div>
                    </div>
                    <h5 class="form-title py-4 mt-3 mb-5 bottom-border bold text-center">{{ $setting->page_title }}</h5>
                    <!-- <form action="http://httpbin.org/post" method="POST"> -->
                    <form action="{{ route('womans-day-form') }}" method="POST">
                        @csrf
                        <div class="row bottom-border pb-4 mb-5">
                            <div class="col-md-4">
                                <h6 class="form-section-title bold">Personal Information</h6>
                                <p class="form-section-subtitle">Let's get to know you better. Please provide your
                                    up-to-date personal information.</p>
                            </div>
                            <div class="col-md-8 ">
                                <div class="row">
                                    <!-- Full Name -->
                                    <div class="mb-3  col-xl-6">
                                        <label for="fullName" class="form-label">Full Name</label>
                                        <input type="text" class="form-control" name="name" required id="fullName">
                                    </div>
                                    <!--  Address -->
                                    <div class="mb-3  col-xl-6">
                                        <label for="address" class="form-label">Address</label>
                                        <input type="text" class="form-control" name="address" required id="address">
                                    </div>
                                </div>

                                <!-- Contact Number -->
                                <div class="mb-3 col-xl-6">
                                    <label for="contactNumber" class="form-label">Contact Number</label>
                                    <input type="tel" class="form-control" name="phone" required maxlength="10"
                                        id="contactNumber">
                                </div>

                            </div>
                        </div>
                        <div class="row border-dark-subtle pb-4 mb-2">
                            <div class="col-md-4">
                                <h6 class="form-section-title bold">Appointment Details</h6>
                                <p class="form-section-subtitle">{{ $setting->appointment_subtitle }}</p>
                            </div>
                            <div class="col-md-8">


                                <!-- Type of Appointment -->
                                <div class="mb-3">
                                    {{-- <label for="appointmentType" class="form-label">Type of Appointment</label> --}}
                                    <label class="form-label">
                                        {{ $setting->gynecologist_label }}
                                    </label>
                                    <div class="row ms-2">
                                        <div class="col-4 mb-2 form-check">
                                            <input class="form-check-input" type="checkbox"
                                                value="{{ $setting->gynecologist_doctor_1 }}" name="doctor[]"
                                                id="micro-needling">
                                            <label class="form-check-label" for="otherServices">
                                                {{ $setting->gynecologist_doctor_1 }}
                                            </label>
                                        </div>
                                        <div class="col-4 mb-2 form-check">
                                            <input class="form-check-input" type="checkbox"
                                                value="{{ $setting->gynecologist_doctor_2 }}" name="doctor[]"
                                                id="micro-needling">
                                            <label class="form-check-label" for="otherServices">
                                                {{ $setting->gynecologist_doctor_2 }}
                                            </label>
                                        </div>
                                    </div>

                                    <div class="row">


                                        <!-- Preferred Date & Time -->
                                        <label for="preferred-date"
                                            class="form-label">{!! $setting->preferred_date_label !!}</label>
                                        <div class="mb-3 col-xl-4">
                                            <input class="form-check-input" type="radio"
                                                value="{{ $setting->preferred_date_1 }}" name="appointment_date">
                                            <label class="form-check-label" for="otherServices">
                                                {{ $setting->preferred_date_1 }}
                                            </label>
                                        </div>
                                        <div class="mb-3 col-xl-4">
                                            <input class="form-check-input" type="radio"
                                                value="{{ $setting->preferred_date_2 }}" name="appointment_date">
                                            <label class="form-check-label" for="otherServices">
                                                {{ $setting->preferred_date_2 }}
                                            </label>
                                        </div>
                                        <div class="mb-3 col-xl-4">
                                            <input class="form-check-input" type="radio"
                                                value="{{ $setting->preferred_date_3 }}" name="appointment_date">
                                            <label class="form-check-label" for="otherServices">
                                                {{ $setting->preferred_date_3 }}
                                            </label>
                                        </div>
                                    </div>






                                    <label class="form-label">
                                        {{ $setting->dermatologist_label }}
                                    </label>
                                    <div class="row ms-2">
                                        <div class="col-4 mb-2 form-check">
                                            <input class="form-check-input" type="checkbox"
                                                value="{{ $setting->dermatologist_doctor_1 }}" name="doctor[]"
                                                id="hydra-facial">
                                            {{-- <input class="form-check-input" type="checkbox" value="0"
                                                onclick="checkboxUpdate('hydra-facial')" name="hydra_facial"
                                                id="hydra-facial"> --}}
                                            <label class="form-check-label" for="hydra-facial">
                                                {{ $setting->dermatologist_doctor_1 }}
                                            </label>
                                        </div>
                                        <div class="col-4 mb-2 form-check">
                                            <input class="form-check-input" type="checkbox"
                                                value="{{ $setting->dermatologist_doctor_2 }}" name="doctor[]"
                                                id="carbon-peeling">
                                            <label class="form-check-label" for="carbon-peeling">
                                                {{ $setting->dermatologist_doctor_2 }}
                                            </label>
                                        </div>
                                    </div>

                                </div>
                                <div class="mb-3">
                                    <label for="details" class="form-label">Extra Details(Please mention Arrival time and
                                        number of person)</label>
                                    <textarea name="details" class="form-control" id="details" row="3"></textarea>
                                </div>
                                <br />

                                <div class="row mt-2"><button type="submit" class="cta py-2">Submit</button></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- Book an appointment section end  -->

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- Appointment Form JS File -->
        <!-- <script src="{{ asset('assets/js/appointment-form.js')}}"></script> -->

    </main><!-- End #main -->

@endsection

@push('js')
    <script>

        function checkboxUpdate(name) {
            var checkbox_value = document.getElementById(name).value
            if (checkbox_value === '0') {
                document.getElementById(name).value = 1
            } else {
                document.getElementById(name).value = 0
            }
        }
    </script>
    <!-- <script>
        $(document).ready(function() {
            $('.toast').toast('show');
        });
    </script> -->
@endpush