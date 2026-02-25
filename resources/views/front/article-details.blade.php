@extends('layouts.app')


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
        </section><!-- End Breadcrumbs -->


        <!-- News and Blogs Section Start -->
        <section class="article-detail" id="article-detail">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 main-content px-5 py-4 ">
                        <div class="inner-container px-3">
                            <h3 class="mb-4">{{ $article->title }}</h3>
                            <div class="publish-and-share d-flex justify-content-between">
                                <div class="publish-info d-flex">
                                    <p class="author  me-4">By <u>{{ $article->user->name ?? 'Admin' }}</u></p>
                                    <p class="publish-date">• Published on {{ $article->created_at->format('M d, Y') }}</p>
                                </div>
                                <div class="share-buttons">
                                    <a target="blank" class="facebook"><i class='bx bxl-facebook-circle'></i></a>
                                    <a target="blank" class="twitter"><i class='bx bxl-twitter'></i></i></a>
                                    <a target="blank" class="linkedin"><i class='bx bxl-linkedin-square'></i></a>
                                </div>
                            </div>
                            <div class="img-container mb-4">
                                <img src="{{ $article->getImage() ?? asset('assets/img/article/article.jpg') }}"
                                    alt="{{ $article->title }}" class="">
                                <!-- <p class="img-caption text-center"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, voluptas rem. Nam dolorem ducimus neque deserunt temporibus praesentium optio itaque!</p> -->
                            </div>
                            <div class="text-content">
                                {!! $article->description !!}
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 side-content  px-5 py-5">
                        <h5 class="text-uppercase">Most Recent</h5>
                        <div class="recent-posts">
                            <ul>
                                @foreach ($relatedArticles as $article)
                                    <li>
                                        <a href="{{ route('article-details', $article->slug) }}">{{ $article->title }}</a>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- News and Blogs Section End -->

        <!-- Share on social media JS File -->
        <script src="{{ asset('assets/js/social-media.js') }}"></script>

    </main><!-- End #main -->
@endsection
