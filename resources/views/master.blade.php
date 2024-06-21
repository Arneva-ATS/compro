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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">

        <style>
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
        <script>
            $(document).ready(function() {
                $('#table-karir').DataTable({
                    "paging": false,
                    "ordering": false,
                    "info": false,
                    "searching": false,
                    "order": [[0, 'asc']]
                });
            });

        </script>

    </body>
</html>

