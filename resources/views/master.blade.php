<!doctype html>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Links of CSS files -->
        <link rel="stylesheet" href="{{ asset('template/css/aos.css') }}">
        <link rel="stylesheet" href="{{ asset('template/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('template/css/boxicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('template/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('template/css/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('template/css/magnific-popup.min.css') }}">
        <link rel="stylesheet" href="{{ asset('template/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('template/css/header.css') }}">
        <link rel="stylesheet" href="{{ asset('template/css/responsive.css') }}">
        <link rel="stylesheet" href="{{ asset('template/css/responsive.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.2/flickity.min.css">
        <style>
            .carousel {
                width: 100%;
                margin-bottom: 0;
            }
            .flickity-viewport {
                height: 120px !important;
                padding: 10px;
            }
            .carousel-cell {
                width: 250px;
                height: 100px;
                margin-right: 10px;
                background: #FFF;
                border-radius: 10px;
                display: flex;
                align-items: center;
                justify-content: center;
                box-shadow: 0 2px 5px rgba(0,0,0,0.2);
                font-size: 18px;
                text-align: center;
                transition: transform 0.5s ease-in-out;
                color: #333;
            }
            .carousel-cell img {
                max-width: 3em;
                max-height: 3em;
                margin-bottom: 10px;
            }
            .carousel-cell h3 {
                font-size: 16px;
                margin: 0;
                font-weight: 700;
            }
            .carousel-cell p {
                font-size: 12px;
                color: #666;
                margin: 0;
            }
            .table.dataTable {
                width: 100%;
                margin: 0 auto;
                border-collapse: collapse;
                background-color: white;
                overflow: hidden;
                border: none;
            }

            .table.dataTable thead {
                background-color: #f17a3d;
            }

            .table.dataTable thead th {
                font-weight: bold;
                color: white;
                text-align: center;
                padding: 15px;
                border-bottom: 1px solid #dee2e6;
                border-left: none; /* Remove left border */
                border-right: none;
            }

            .table.dataTable tbody tr {
                border-bottom: 1px solid #e2e8f0;
            }

            .table.dataTable tbody tr:last-child {
                border-bottom: none;
            }

            .table.dataTable tbody td {
                padding: 15px;
                text-align: center;
                color: #333;
                border-left: none; /* Remove left border */
                border-right: none; /* Remove right border */
            }

            .table.dataTable tbody tr:nth-child(even) {
                background-color: #f9fafb;
            }

            .table.dataTable tbody tr:hover {
                background-color: #f1f5f9;
            }

            .table-striped tbody tr:nth-of-type(odd) {
                background-color: #f9fafb; /* Light gray color for odd rows */
            }

            .table-hover tbody tr:hover {
                background-color: #f1f5f9; /* Light blue color for hover */
            }

            .table-bordered td, .table-bordered th {
                border: 1px solid #dee2e6;
            }
        </style>
        <title>Arneva Teknologi Solusi</title>
        <link rel="icon" type="image/png" href="{{ asset('template/img/all-img/favicon.png') }}">
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
        <script src="{{ asset('template/js/jquery.min.js') }}"></script>
        <script src="{{ asset('template/js/aos.js') }}"></script>
        <script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('template/js/magnific-popup.min.js') }}"></script>
        <script src="{{ asset('template/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('template/js/main.js') }}"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
        {{-- <link rel="stylesheet" href="{{ asset('template/js/flickity/flickity.pkgd.min.js') }}"> --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.2/flickity.pkgd.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#table-karir').DataTable({
                    "paging": false,
                    "ordering": false,
                    "info": false,
                    "searching": false,
                    "order": [[0, 'asc']]
                });
                // Initialize Flickity for both carousels
                var flkty1 = new Flickity('#carousel1', {
                    autoPlay: 2000,
                    wrapAround: true,
                    prevNextButtons: false,
                    pageDots: false,
                    pauseAutoPlayOnHover: false,
                    selectedAttraction: 0.01,
                    friction: 0.15,
                    draggable: false
                });

                var flkty2 = new Flickity('#carousel2', {
                    autoPlay: 2000,
                    wrapAround: true,
                    prevNextButtons: false,
                    pageDots: false,
                    rightToLeft: true,
                    pauseAutoPlayOnHover: false,
                    selectedAttraction: 0.01,
                    friction: 0.15,
                    draggable: false
                });

                // Function to keep playing the carousel on hover and click
                function keepPlaying(flkty) {
                    flkty.playPlayer();
                }

                 // Add custom event listeners to prevent pausing on hover and click
                document.getElementById('carousel1').addEventListener('mouseenter', function() {
                    keepPlaying(flkty1);
                });

                document.getElementById('carousel1').addEventListener('click', function() {
                    keepPlaying(flkty1);
                });

                document.getElementById('carousel2').addEventListener('mouseenter', function() {
                    keepPlaying(flkty2);
                });

                document.getElementById('carousel2').addEventListener('click', function() {
                    keepPlaying(flkty2);
                });

                // var flkty = new Flickity( '.main-carousel', {
                //     // options
                //     cellAlign: 'left',
                //     contain: true
                // });
                // $('.main-carousel').flickity({
                //     // options
                //     cellAlign: 'left',
                //     contain: true
                // });
            });
        </script>

    </body>
</html>

