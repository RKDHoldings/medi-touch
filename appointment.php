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
            <div>
                <h2>Book an Appointment</h2>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Book an Appointment</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->



    <!-- Book an appointment section Start  -->
    <section class="appointment-form-section">
        <!-- <div class="top-img"></div> -->
        <div class="row">
            <div class="container appointment-form-col pt-4 my-5 px-5 col-md-9 mx-auto">
                <h5 class="form-title py-4 mt-3 mb-5 bottom-border bold text-center">Book an Appointment</h5>
                <!-- <form action="http://httpbin.org/post" method="POST"> -->
                    <form>
                    <div class="row bottom-border pb-4 mb-5">
                        <div class="col-md-4">
                            <h6 class="form-section-title bold">Personal Information</h6>
                            <p class="form-section-subtitle">Let's get to know you better. Please provide your up-to-date personal information.</p>
                        </div>
                        <div class="col-md-8 ">
                            <div class="row">
                                <!-- Full Name -->
                                <div class="mb-3 col-md-6">
                                    <label for="fullName" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" required id="fullName">
                                </div>
                                <!-- Email Address -->
                                <div class="mb-3 col-md-6">
                                    <label for="emailAddress" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" required id="emailAddress" aria-describedby="emailHelp">
                                </div>
                            </div>

                            <!-- Contact Number -->
                            <div class="mb-3 col-md-6">
                                <label for="contactNumber" class="form-label">Contact Number</label>
                                <input type="tel" class="form-control" required maxlength="10" id="contactNumber">
                            </div>

                            <!-- Date of Birth -->
                            <div class="mb-3 col-md-6">
                                <label for="dob" class="form-label">Date of Birth(AD)</label>
                                <input type="date" class="form-control" required id="dob">
                            </div>

                            <!-- Gender -->
                            <div class="mb-3 col-md-6">
                                <label for="gender" class="form-label">Gender</label>
                                <select class="form-select" required id="gender">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row border-dark-subtle pb-4 mb-5">
                        <div class="col-md-4">
                            <h6 class="form-section-title bold">Appointment Details</h6>
                            <p class="form-section-subtitle">Let's get to know you better. Please provide your up-to-date personal information.</p>
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <!-- Preferred Date -->
                                <div class="mb-3 col-md-6">
                                    <label for="preferredDate" class="form-label">Preferred Date<span class="bold">(Sun - Fri)<span></label>
                                    <input type="date" class="form-control" required id="preferredDate">
                                </div>

                                <!-- Preferred Time -->
                                <div class="mb-3 col-md-6">
                                    <label for="preferredTime" class="form-label">Preferred Time<span class="bold">(10 AM - 5 PM)</span></label>
                                    <input type="time" class="form-control" required id="preferredTime" name="preferredTime">
                                </div>
                            </div>

                            <!-- Type of Appointment -->
                            <div class="mb-3 col-md-6">
                                <label for="appointmentType" class="form-label">Type of Appointment</label>
                                <select class="form-select" id="appointmentType">
                                    <option value="hair">Hair</option>
                                    <option value="skin">Skin</option>
                                    <option value="custom">Specify Service</option>
                                </select>
                            </div>
                            <div class="mb-3" id="specifyServiceInput" style="display:none;">
                                <label for="specifyService" class="form-label">Service</label>
                                <input type="text" class="form-control" id="specifyService">
                            </div>

                            <!-- Preferred Stylist/Doctor -->
                            <div class="mb-3 col-md-6">
                                <label for="preferredStylist" class="form-label">Preferred Doctor<span class="bold">(Optional)</span></label>
                                <input type="text" class="form-control" id="preferredStylist">
                            </div>

                            <!-- captcha field and client side captcha field -->
                            <div class="g-recaptcha" data-sitekey="6LeoNWYpAAAAAKHk_cuRfOucB8NEj_onjoG2rRlF">
                            </div>
                            <p id="CaptchaWarning" class="CaptchaWarning text-danger" style="display:none;">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                                </svg>
                                You must agree before submitting.
                            </p>

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
    <script src="assets/js/appointment-form.js"></script>

</main><!-- End #main -->

<?php
include('include/footer.php');
?>