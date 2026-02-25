<!-- ======= Header ======= -->
@php $site_setting = \App\Models\SiteSetting::firstOrCreate([]); @endphp
<header class="">
  <div class="topbar-wrapper" id="topbar-wrapper">
    <div class=" container-xl container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-5 col-sm-12">
          <div class="topbar-menu">
            <ul class="top-contact text-left float-start p-0">
              <li>
                <img src=" {{asset('assets/img/icon/mail.png')}}" /> <a
                  href="mailto:{{ $site_setting->email ?? 'clinic.meditouch@gmail.com' }}"> {{ $site_setting->email ??
                  'clinic.meditouch@gmail.com' }}</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-8 col-md-7 col-sm-12">
          <div class="topbar-right text-end">
            <ul class="top-contact">
              <li>
                <img src=" {{asset('assets/img/icon/location.png')}}" /> <a href="#">
                  {{ $site_setting->header_address ?? 'Newroad-09, Pokhara' }}</a>
              </li>
              <li>
                <img src=" {{asset('assets/img/icon/phone.png')}}" /> <a
                  href="tel:{{ $site_setting->header_phone ?? '061-590664' }}">
                  {{ $site_setting->header_phone ?? '061-590664' }}</a>
              </li>
            </ul>
          </div>

        </div>
      </div>
    </div>
  </div>
  <div class="" id="header">
    <div class=" container-xl container-fluid d-flex align-items-center justify-content-lg-between nav-head ">
      <a href="/" class="logo me-auto me-lg-0">
        <img src="{{ asset('assets/img/logo.png')}}" alt="logo" class="img-fluid">
      </a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto {{ url()->current() == url('/') ? 'active' : '' }}"
              href="{{ route('welcome') }}">Home</a></li>
          <li><a class="nav-link scrollto {{ url()->current() == url('/about') ? 'active' : '' }}"
              href="{{ route('about') }}">Who We Are</a></li>
          <li><a class="nav-link scrollto {{ url()->current() == url('/services') ? 'active' : '' }}"
              href="{{ route('services') }}">What We Do</a></li>
          <li><a class="nav-link scrollto {{ url()->current() == url('/success-stories') ? 'active' : '' }}"
              href="{{ route('success-stories') }}">Success Stories</a></li>
          <li><a class="nav-link scrollto {{ url()->current() == url('/articles') ? 'active' : '' }}"
              href="{{ route('articles') }}">News</a></li>


          <li><a class="nav-link scrollto {{ url()->current() == url('/gallery') ? 'active' : '' }}"
              href="{{ route('gallery') }}">Gallery</a></li>
          <li><a class="nav-link scrollto {{ url()->current() == url('/team') ? 'active' : '' }}"
              href="{{ route('team') }}">Team</a></li>
          <li><a class="nav-link scrollto {{ url()->current() == url('/careers') ? 'active' : '' }}"
              href="{{ route('careers') }}">Careers</a></li>
          <!-- <li class="dropdown"><a href="{{ route('team') }}"><span>Team</span> <i class="bi bi-chevron-down"></i></a> -->
          <!-- <ul>
              <li><a href="{{ route('team') }}">Doctors Details</a></li>
            </ul> -->
          </li>
          <li><a class="nav-link scrollto {{ url()->current() == url('/contact') ? 'active' : '' }}"
              href="{{ route('contact') }}">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->