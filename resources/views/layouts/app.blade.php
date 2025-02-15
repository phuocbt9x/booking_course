    <!DOCTYPE html>
    <html lang="en">


    <!-- Mirrored from demo.egenslab.com/html/scooby/preview/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Feb 2025 06:07:16 GMT -->

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'Coach - Lãnh đạo từ tâm')</title>

        <link rel="icon" href="{{ asset('assets/images/icon/favicon_frog.png') }}" type="image/gif" sizes="20x20">

        <!-- css file link -->
        <link rel="stylesheet" href="{{ asset('assets/css/all.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">

        <!-- bootstrap 5 -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

        <!-- box-icon -->
        <link rel="stylesheet" href="{{ asset('assets/css/boxicons.min.css') }}">

        <!-- bootstrap icon -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-icons.css') }}">

        <!-- jquery ui -->
        <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">

        <!-- swiper-slide -->
        <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.css') }}">

        <!-- nice-select -->
        <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">

        <!-- magnefic popup css -->
        <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">

        <!-- animate css -->
        <link rel="stylesheet" href="{{ asset('assets/css/jquery.fancybox.min.css') }}">

        <!-- odometer css -->
        <link rel="stylesheet" href="{{ asset('assets/css/odometer.css') }}">

        <!-- datepicker css -->
        <link rel="stylesheet" href="{{ asset('assets/css/datepicker.min.css') }}">

        <!-- uiicss -->
        <link rel="stylesheet" href="{{ asset('assets/css/uiicss.css') }}">

        <!-- style css -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    </head>

    <body class="home-pages-2">



        <!-- ========== header============= -->
        @includeIf('partials.header')
        <!-- ========== header end============= -->

        @yield('content')

        <!-- ========== Footer Area Start============= -->
        @includeIf('partials.footer')
        <!-- ========== Footer Area end============= -->


        <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.timepicker.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.nice-select.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>
        <script src="{{ asset('assets/js/morphext.min.js') }}"></script>
        <script src="{{ asset('assets/js/odometer.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.marquee.min.js') }}"></script>
        <script src="{{ asset('assets/js/viewport.jquery.js') }}"></script>
        <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/js/SmoothScroll.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.nice-number.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('assets/js/masonry.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>

    </body>

    </html>
