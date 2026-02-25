@extends('layouts.app')
@push('css')
    <meta property="og:title" content="{{ '$article->title' }} " />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="{'!!$article->description!!'}" />
    <meta property="og:url" content="{{ route('articles') }}" />
    <meta property="og:image" content="{{ '$article->getImage()??asset(assets/img/article/article.jpg)' }}" />
@endpush
@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>News & Blogs</h2>
                    <ol>
                        <li><a href="{{ route('welcome') }}">Home</a></li>
                        <li>News & Blogs</li>
                    </ol>
                </div>

            </div>
        </section>
        <!-- End Breadcrumbs -->


        <!-- News and Blogs Section Start -->
        <section class="news-blogs" id="news-blogs">

            <div class="row">
                <div class="container">

                    <div class="col-9 mx-auto">
                        <h3 class="heading-title">News & Articles</h3>
                        <div class="row gx-4 gy-5">
                            @foreach ($articles as $article)
                                <div class="col-md-6 col-xl-4">
                                    <div onclick="window.location.href='{{ route('article-details', $article->slug) }}';"
                                        class="card border-0 img-date">
                                        <div class="img-container">
                                            <img src="{{ $article->getImage() ?? asset('assets/img/article/article.jpg') }}"
                                                class="card-img-top rounded-0" alt="{{ $article->title }}">
                                            <div class="date">
                                                <p class="day">{{ $article->created_at->format('d') }}</p>
                                                <p class="month-year">{{ $article->created_at->format('M Y') }}</p>
                                            </div>
                                        </div>
                                        <div class="card-text-content">
                                            <h6 class="card-subtitle my-3 text-body-secondary"><i
                                                    class='bx bxs-user me-1'></i>{{ $article->user->name ?? 'Admin' }}</h6>
                                            <h5 class="card-title"><a href="#">{{ $article->title }}</a></h5>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <br>
                        {{ $articles->links() }}
                    </div>
                </div>
            </div>
        </section>
        <!-- News and Blogs Section End -->


    </main><!-- End #main -->
@endsection
