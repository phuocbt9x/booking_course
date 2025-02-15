@extends('layouts.app')

@section('title', 'Blog - Chia sẻ kiến thức')

@section('content')

    <!-- ========== Breadcumb Start============= -->
    <div class="inner-page-banner">
        <div class="breadcrumb-vec-btm">
            <img class="img-fluid" src="assets/images/bg/inner-banner-btm-vec.png" alt="">
        </div>
        <div class="container">
            <div class="row justify-content-center align-items-center text-center">
                <div class="col-lg-6 align-items-center">
                    <div class="banner-content">
                        <h1>Coaching về Kinh Doanh & Sự Nghiệp</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Coaching về Kinh Doanh & Sự Nghiệp
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-img d-lg-block d-none">
                        <div class="banner-img-bg">
                            <img class="img-fluid" src="assets/images/slide/banner_3.png" alt="">
                        </div>
                        <img class="img-fluid" src="assets/images/slide/slide_1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========== Breadcumb end============= -->

    <!-- ========== Blog Grid Pages Start============= -->
    <div class="blog-grid-pages pt-120 mb-120">
        <div class="container">
            <div class="row g-lg-4 gy-5 justify-content-center">

                <div class="col-lg-8">
                    <div class="row g-lg-4 gy-5 justify-content-center mb-70">
                        <div class="col-lg-6 col-md-6 col-sm-10">
                            <div class="h1-blog-card">
                                <div class="blog-img">
                                    <img class="img-fluid" src="assets/images/blog/blog-grid-01.png" alt="">
                                    <div class="category">
                                        <a href="blog-grid.html">Dog bording</a>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a href="blog-grid.html">August 13, 2022</a>
                                    </div>
                                    <h4><a href="{{ route('blog.detail') }}">lobortis pharetra In necat boi risuse osae that
                                            one far
                                            This fox.</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-10">
                            <div class="h1-blog-card">
                                <div class="blog-img">
                                    <img class="img-fluid" src="assets/images/blog/blog-grid-02.png" alt="">
                                    <div class="category">
                                        <a href="blog-grid.html">Day Care</a>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a href="blog-grid.html">August 10, 2022</a>
                                    </div>
                                    <h4><a href="{{ route('blog.detail') }}">Donec venenatis ex id nibh iaculisoni Clonal
                                            interdum
                                            Curabitur.</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-10">
                            <div class="h1-blog-card">
                                <div class="blog-img">
                                    <img class="img-fluid" src="assets/images/blog/blog-grid-03.png" alt="">
                                    <div class="category">
                                        <a href="blog-grid.html">Grooming</a>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a href="blog-grid.html">August 05, 2022</a>
                                    </div>
                                    <h4><a href="{{ route('blog.detail') }}">Orci varius natoque penatibus etmal dis
                                            parturient
                                            montes.</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-10">
                            <div class="h1-blog-card">
                                <div class="blog-img">
                                    <img class="img-fluid" src="assets/images/blog/blog-grid-04.png" alt="">
                                    <div class="category">
                                        <a href="blog-grid.html">Pet Checkup</a>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a href="blog-grid.html">June 25, 2022</a>
                                    </div>
                                    <h4><a href="{{ route('blog.detail') }}">gravida ut malesuada in tristique sed eros Nunc
                                            sed
                                            efficitur.</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-10">
                            <div class="h1-blog-card">
                                <div class="blog-img">
                                    <img class="img-fluid" src="assets/images/blog/blog-grid-05.png" alt="">
                                    <div class="category">
                                        <a href="blog-grid.html">Medical Care</a>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a href="blog-grid.html">June 15, 2022</a>
                                    </div>
                                    <h4><a href="{{ route('blog.detail') }}">luctus justo quis feugiat lacus orcha ornare
                                            augue
                                            Integer.</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-10">
                            <div class="h1-blog-card">
                                <div class="blog-img">
                                    <img class="img-fluid" src="assets/images/blog/blog-grid-06.png" alt="">
                                    <div class="category">
                                        <a href="blog-grid.html">Pet Grong</a>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a href="blog-grid.html">June 02, 2022</a>
                                    </div>
                                    <h4><a href="{{ route('blog.detail') }}">malesuada nibh Nulla lacinia miegetol bibendum
                                            euismod.</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-10">
                            <div class="h1-blog-card">
                                <div class="blog-img">
                                    <img class="img-fluid" src="assets/images/blog/blog-grid-07.png" alt="">
                                    <div class="category">
                                        <a href="blog-grid.html">Grooming</a>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a href="blog-grid.html">May 30, 2022</a>
                                    </div>
                                    <h4><a href="{{ route('blog.detail') }}">vitae tortor Maecenas in dui eget orci dapibus
                                            imperdiet.</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-10">
                            <div class="h1-blog-card">
                                <div class="blog-img">
                                    <img class="img-fluid" src="assets/images/blog/blog-grid-08.png" alt="">
                                    <div class="category">
                                        <a href="blog-grid.html">Day Care</a>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a href="blog-grid.html">May 21, 2022</a>
                                    </div>
                                    <h4><a href="{{ route('blog.detail') }}">semper Praesent sit amet nisi quison massa
                                            euismod
                                            facilisis.</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <div class="paginations-area">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#"><i
                                                    class="bi bi-arrow-left-short"></i></a></li>
                                        <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                        <li class="page-item"><a class="page-link" href="#">02</a></li>
                                        <li class="page-item"><a class="page-link" href="#">03</a></li>
                                        <li class="page-item"><a class="page-link" href="#"><i
                                                    class="bi bi-arrow-right-short"></i></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="widget-area">

                        <div class="single-widgets widget_search mb-30">
                            <form>
                                <div class="wp-block-search__inside-wrapper ">
                                    <input type="search" id="wp-block-search__input-1" class="wp-block-search__input"
                                        name="s" value="" placeholder="Search Here" required="">
                                    <button type="submit" class="wp-block-search__button">
                                        <svg width="20" height="20" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.10227 0.0713005C1.983 0.760967 -1.22002 5.91264 0.44166 10.7773C1.13596 12.8 2.60323 14.471 4.55652 15.4476C6.38483 16.3595 8.59269 16.5354 10.5737 15.9151C11.4023 15.6559 12.6011 15.0218 13.2121 14.5126L13.3509 14.3969L16.1281 17.1695C19.1413 20.1735 18.9932 20.0531 19.4237 19.9698C19.6505 19.9281 19.9282 19.6504 19.9699 19.4236C20.0532 18.9932 20.1735 19.1413 17.1695 16.128L14.397 13.3509L14.5127 13.212C14.7858 12.8834 15.2394 12.152 15.4755 11.6614C17.0029 8.48153 16.3271 4.74159 13.7814 2.28379C11.9994 0.561935 9.52304 -0.257332 7.10227 0.0713005ZM9.38418 1.59412C11.0135 1.9135 12.4669 2.82534 13.4666 4.15376C14.0591 4.94062 14.4572 5.82469 14.6793 6.83836C14.8136 7.44471 14.8228 8.75925 14.7025 9.34708C14.3507 11.055 13.4713 12.4622 12.1336 13.4666C11.3467 14.059 10.4627 14.4571 9.44898 14.6793C8.80097 14.8228 7.48644 14.8228 6.83843 14.6793C4.78332 14.2303 3.0985 12.9389 2.20054 11.1337C1.75156 10.2312 1.54328 9.43503 1.49699 8.4445C1.36276 5.62566 3.01055 3.05677 5.6535 1.96904C6.10248 1.7839 6.8014 1.59412 7.28741 1.52932C7.74102 1.46452 8.92595 1.50155 9.38418 1.59412Z">
                                            </path>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>

                        <div class="single-widgets widget_egns_categoris mb-30">
                            <div class="widget-title">
                                <h3>Category</h3>
                            </div>
                            <ul class="wp-block-categoris-cloud">
                                <li><a href="blog-grid.html"><span>Pet Grooming</span> <span><span
                                                class="number-of-categoris">(30)</span><i
                                                class="bi bi-arrow-right-short"></i></span></a></li>
                                <li><a href="blog-grid.html"><span>Medical Care</span> <span><span
                                                class="number-of-categoris">(18)</span><i
                                                class="bi bi-arrow-right-short"></i></span> </a></li>
                                <li><a href="blog-grid.html"><span>Pet Bording</span> <span><span
                                                class="number-of-categoris">(21)</span><i
                                                class="bi bi-arrow-right-short"></i></span> </a></li>
                                <li><a href="blog-grid.html"><span>Pet Daycare</span> <span><span
                                                class="number-of-categoris">(25)</span><i
                                                class="bi bi-arrow-right-short"></i></span> </a></li>
                                <li><a href="blog-grid.html"><span>Pet Walking</span> <span><span
                                                class="number-of-categoris">(29)</span><i
                                                class="bi bi-arrow-right-short"></i></span> </a></li>
                                <li><a href="blog-grid.html"><span>Education Pet</span> <span><span
                                                class="number-of-categoris">(31)</span><i
                                                class="bi bi-arrow-right-short"></i></span> </a></li>
                            </ul>
                        </div>

                        <div class="single-widgets widget_egns_recent_post mb-30">
                            <div class="widget-title">
                                <h3>Newest Posts</h3>
                            </div>
                            <div class="recent-post-wraper">
                                <div class="widget-cnt mb-25">
                                    <div class="wi">
                                        <a href="{{ route('blog.detail') }}"><img
                                                src="assets/images/blog/blog-sidebar-1.png" alt="image"></a>
                                    </div>
                                    <div class="wc">
                                        <a href="blog-grid.html">July 18, 2022</a>
                                        <h6><a href="{{ route('blog.detail') }}">Quisque laoreet Maecento facilisis
                                                tristique.</a>
                                        </h6>
                                    </div>
                                </div>
                                <div class="widget-cnt mb-25">
                                    <div class="wi">
                                        <a href="{{ route('blog.detail') }}"><img
                                                src="assets/images/blog/blog-sidebar-2.png" alt="image"></a>
                                    </div>
                                    <div class="wc">
                                        <a href="blog-grid.html">July 15, 2022</a>
                                        <h6><a href="{{ route('blog.detail') }}">Etiam vel diam volutpatha
                                                pellentesque.</a></h6>
                                    </div>
                                </div>
                                <div class="widget-cnt">
                                    <div class="wi">
                                        <a href="{{ route('blog.detail') }}"><img
                                                src="assets/images/blog/blog-sidebar-3.png" alt="image"></a>
                                    </div>
                                    <div class="wc">
                                        <a href="blog-grid.html">July 14, 2022</a>
                                        <h6><a href="{{ route('blog.detail') }}">Nunc finibus gravidato on porta. Nulla
                                                vitae.</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="single-widgets widget_egns_tag mb-30">
                            <div class="widget-title">
                                <h3>All Tag</h3>
                            </div>
                            <p class="wp-block-tag-cloud">
                                <a href="blog-grid.html">Grooming</a>
                                <a href="blog-grid.html">Walking</a>
                                <a href="blog-grid.html">Pet Care</a>
                                <a href="blog-grid.html">Daycare</a>
                                <a href="blog-grid.html">Bording</a>
                                <a href="blog-grid.html">Madical</a>
                                <a href="blog-grid.html">Vakcine</a>
                                <a href="blog-grid.html">Education</a>
                                <a href="blog-grid.html">Services</a>
                            </p>
                        </div>

                        <div class="single-widgets widget_egns_social">
                            <div class="widget-title">
                                <h3>Social</h3>
                            </div>
                            <ul class="social-link d-flex align-items-center">
                                <li><a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a></li>
                                <li><a href="https://twitter.com/"><i class="bx bxl-twitter"></i></a></li>
                                <li><a href="https://www.pinterest.com/"><i class="bx bxl-pinterest-alt"></i></a></li>
                                <li><a href="https://www.instagram.com/"><i class="bx bxl-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- ========== Blog Grid Pages End============= -->

@endsection
