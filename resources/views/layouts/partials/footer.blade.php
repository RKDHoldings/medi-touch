<!-- ======= Footer ======= -->
@php $site_setting = \App\Models\SiteSetting::firstOrCreate([]); @endphp
<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 footer-contact">
          <h3>Get in touch</h3>
          <p>
            <i class="bi bi-map"></i>
            {!! nl2br(e($site_setting->footer_address ?? 'Newroad, \n Pokhara, Kaski')) !!}
          </p>
          <p> <i class="bi bi-phone"></i> {{ $site_setting->footer_phone ?? '061-590664' }}</p>

          <!-- <p><i class="bi bi-envelope"></i>clinic.meditouch@gmail.com </p>  -->


          <ul class="footer-social d-flex p-0">
            <li><a href="{{ $site_setting->facebook_link ?? 'https://www.facebook.com/skinhairaesthetic' }}"
                target="_blank"><i class="bi bi-facebook"></i></a></li>
            <li><a href="mailto:{{ $site_setting->email ?? 'clinic.meditouch@gmail.com' }}" target="_blank"><i
                  class="bt bi-envelope"></i></a></li>
            <li><a href="{{ $site_setting->instagram_link ?? 'https://www.instagram.com/meditouchskinclinic/' }}"
                target="_blank"><i class="bt bi-instagram"></i></a></li>

          </ul>
        </div>

        <div class="col-lg-2 col-md-6 footer-contact">
          <h3>Useful Links</h3>
          <ul class="ps-0">
            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('welcome') }}">Home</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('about') }}">About us</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="{{ route('services') }}">Services</a></li>
            <li><i class="bx bx-chevron-right"></i> <a
                href="{{ route('international-patient-services') }}">International Patients</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-6 footer-contact">
          <!-- <img src="assets/img/logo.png" class="logo" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus dapibus iaculis scelerisque. Suspendisse mattis, neque sed blandit auctor,</p> -->
          <h3>Hospital Timings</h3>
          <div class="office-timings mt-5"> <!-- Widget -->
            <table class="table table-bordered footer-text">
              <tbody>
                <tr>
                  <td>Doctor Visit</td>
                  <td>{{ $site_setting->doctor_visit_days ?? 'Sun - Fri' }}</td>
                  <td>{{ $site_setting->doctor_visit_hours ?? '11:00 am to 6:00 pm' }}</td>
                </tr>
                <tr>
                  <td>Clinic Timing</td>
                  <td>{{ $site_setting->clinic_timing_days ?? 'Sun - Fri' }}</td>
                  <td>{{ $site_setting->clinic_timing_hours ?? '9:30 am to 7:00 pm' }}</td>
                </tr>
                <!-- <tr>
                                    <td>Sunday</td>
                                    <td>Weekly Off</td>
                                </tr> -->
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 footer-contact">
          <h3>Recent News</h3>
          <div class="footer-news-post">
            @foreach(App\Models\News::orderBy('created_at', 'desc')->limit(2)->get() as $news)
              <div class="footer-news">
                <img src="{{ $news->getImage() ?? asset('assets/img/store.jpg')}}" alt="News" class="object-fit-cover">
                <h6><a href="{{ route('article-details', $news->slug) }}">{{ $news->title }}</a></h6>
                <p class="float-start">{{ $news->created_at->format('D M Y') }}</p>
              </div>
            @endforeach
          </div>
        </div>




      </div>
    </div>
  </div>


  <div class="footer-bottom">
    <div class="container d-md-flex justify-content-between">
      <div class="copyright">
        <p> Copyright @2024 | Medi-Touch </p>
      </div>
      <div class="developed">
        <p><a class="credits" href="https://bizbazar.com.np/" target="_blank">Designed and developed by <span
              class="bizbazar">Bizbazar Limited</span></a></p>
      </div>
    </div>
  </div>

</footer><!-- End Footer -->