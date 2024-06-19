<!doctype html>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Links of CSS files -->
        <link rel="stylesheet" href="template/css/aos.css">
        <link rel="stylesheet" href="template/css/bootstrap.min.css">
        <link rel="stylesheet" href="template/css/boxicons.min.css">
        <link rel="stylesheet" href="template/css/owl.carousel.min.css">
        <link rel="stylesheet" href="template/css/flaticon.css">
        <link rel="stylesheet" href="template/css/magnific-popup.min.css">
        <link rel="stylesheet" href="template/css/style.css">
        <link rel="stylesheet" href="template/css/header.css">
        <link rel="stylesheet" href="template/css/responsive.css">

        <title>Arneva Teknologi Solusi</title>
        <link rel="icon" type="image/png" href="template/img/all-img/favicon.png">
    </head>
    <body>

        <!-- preloader -->
        <div class="preloader-container" id="preloader">
            <div class="preloader-dot"></div>
            <div class="preloader-dot"></div>
            <div class="preloader-dot"></div>
            <div class="preloader-dot"></div>
            <div class="preloader-dot"></div>
        </div>
        <!-- preloader -->

       <!-- Start Navbar Area Start -->
       @include('layout.navbar')
        <!-- End Responsive Navbar Area -->

        <!-- Start Clgun Searchbar Area -->
        @include('layout.searchbar')
        <!-- End Clgun Searchbar Area -->
        <!-- Start Content -->
        @yield('content')
        <!-- End Content -->

        <!-- Start Footer Area -->
        @include('layout.footer')
        <!-- End Footer Area -->

        <div class="go-top active">
            <i class="bx bx-up-arrow-alt"></i>
        </div>

        <!-- Links of JS files -->
        <script src="template/js/jquery.min.js"></script>
        <script src="template/js/aos.js"></script>
        <script src="template/js/bootstrap.min.js"></script>
        <script src="template/js/magnific-popup.min.js"></script>
        <script src="template/js/owl.carousel.min.js"></script>
        <script src="template/js/main.js"></script>
    </body>
</html>
