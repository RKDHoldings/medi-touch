@extends('layouts.app')
@push('css')
<meta property="og:title" content="Explore Our Gallery - Meditouch Hair & Skin Clinic" />
<meta property="og:type" content="website"/>
<meta property="og:url" content="{{ route('gallery') }}" />
<meta property="og:image" content="{{ asset('assets/img/meta/gallery.png') }}" />
@endpush
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="">
                <h2>Gallery</h2>
                <ol>
                    <li><a href="{{ route('welcome') }}">Home</a></li>
                    <li>Gallery</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="gallery" id="gallery">
         <div class="container">
            <div class="row gallery-row">
                <h3 class="heading-title">Our Gallery</h3>
                <div class="col-12 mx-auto">
                    <div class="row">
                        @foreach($galleries as $gallery)
                        <div class="col-md-3 img-container">
                            <a href="{{ $gallery->getImage()??asset('assets/img/gallery/ClinicStore.png')}}" class="fancybox" data-fancybox="gallery1">
                                <img src="{{ $gallery->getImage()??asset('assets/img/gallery/ClinicStore.png')}}" width="100%" alt="Meditouch Clinic Counter" />
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            {{ $galleries->links() }}
         </div>
    </section>

</main><!-- End #main -->


@endsection