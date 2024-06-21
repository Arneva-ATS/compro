@extends('master');
@section('content')
    <!-- Start Section Banner Area -->
    <div class="section-banner bg-22">
        <div class="container">
            <div class="banner-spacing">
                <div class="section-info">
                    <h2 data-aos="fade-up" data-aos-delay="100">CMS Web Profile</h2>
                    <p data-aos="fade-up" data-aos-delay="200">Aplikasi content management untuk web profile koperasi yang
                        akan digunakan untuk koperasi di seluruh daerah. CMS ini bertujuan agar pengurus koperasi mudah
                        dalam mengatur setiap perubahan yang diinginkan...</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Section Banner Area -->

    <!-- Start Academics Section Area -->
    <div class="academics-section ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="academics-left">
                        <div class="ac-category">
                            <ul>
                                <li><a href="{{ route('proyek-studi-kasus.proyek-terkini') }}">RKI</a></li>
                                <li><a href="{{ route('proyek-studi-kasus.pet-clinic') }}">Pet Clinic</a>
                                </li>
                                <li><a href="#">HR System</a></li>
                                <li><a href="#">Core Accounting</a></li>
                                <li><a class="active" href="{{ route('proyek-studi-kasus.cms-web') }}">CMS Web Profile</a>
                                </li>
                            </ul>
                        </div>
                        <div class="ac-contact">
                            <span>Quick Links</span>
                            <a href="{{ route('kontak-kami') }}">Contact Us</a>
                            <a class="darkbtn" href="#">Transfer</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="ac-overview">
                        <div class="pera-dec">
                            <p>
                                Aplikasi Content Management System (CMS) untuk web profile koperasi yang dirancang khusus
                                untuk koperasi di seluruh daerah. CMS ini bertujuan untuk memudahkan pengurus koperasi dalam
                                mengatur dan memperbarui setiap informasi dengan cepat dan efisien. Dengan fitur-fitur
                                unggulan, CMS Web Profile membantu koperasi untuk:
                            </p>
                            <ul>
                                <li class="fw-bold">Pengelolaan Konten yang Mudah</li>
                                <li class="fw-bold">Pembaruan Informasi Real-Time</li>
                                <li class="fw-bold">Pengaturan Struktur Halaman</li>
                                <li class="fw-bold">Desain Responsif</li>
                                <li class="fw-bold">Integrasi Media Sosial</li>
                                <li class="fw-bold">Analitik dan Pelaporan</li>
                            </ul>
                            <div class="univercity-life">
                                <div class="image">
                                    <img src="{{ asset('template/img/proyek/branch.jpg') }}" alt="image">
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-6">
                                        <div class="aid-pra">
                                            <h3>Layanan</h3>
                                            <p>Website</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                        <div class="aid-pra">
                                            <h3>Client</h3>
                                            <p>RKI, Dekopin</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                        <div class="aid-pra">
                                            <h3>Tahun</h3>
                                            <p>2024</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                        <div class="aid-pra">
                                            <h3>Durasi</h3>
                                            <p>6 Bulan</p>
                                        </div>
                                    </div>
                                </div>



                                <div class="apply-program my-5">
                                    <div class="text-center mb-5">
                                        <h1>Solusi Kami</h1>
                                    </div>
                                    <div class="row mb-5">
                                        <div class="col-6 text-end text-info">
                                            <h4>Tanpa aplikasi</h4>
                                            <div class="col">
                                                <div class="row-2 mt-4">
                                                    <p class="text-danger"> Pengurus koperasi harus melakukan pengelolaan
                                                        konten web secara manual, yang memakan waktu dan rawan kesalahan.
                                                    </p>
                                                </div>
                                                <div class="row-2 mt-4">
                                                    <p class="text-danger">Setiap perubahan informasi harus melalui proses
                                                        yang panjang, menyebabkan keterlambatan dalam penyampaian informasi
                                                        kepada anggota.</p>
                                                </div>
                                                <div class="row-2 mt-5">
                                                    <p class="text-danger">Desain web profile koperasi mungkin tidak
                                                        responsif, menyebabkan tampilan yang tidak optimal di berbagai
                                                        perangkat.
                                                    </p>
                                                </div>
                                                <div class="row-2 mt-4">
                                                    <p class="text-danger">Mengatur struktur dan konten halaman web bisa
                                                        menjadi rumit tanpa alat yang tepat, mengakibatkan navigasi yang
                                                        kurang efisien.</p>
                                                </div>
                                                <div class="row-2 mt-5">
                                                    <p class="text-danger">Mengintegrasikan media sosial dengan web profile
                                                        bisa menjadi tantangan, membatasi jangkauan informasi dan
                                                        komunikasi.</p>
                                                </div>
                                                <div class="row-2 mt-5">
                                                    <p class="text-danger">Tanpa alat analitik, pengurus koperasi kesulitan
                                                        memantau kinerja web dan mengambil keputusan berbasis data.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 text-info">
                                            <h4>Dengan Aplikasi</h4>
                                            <div class="col">
                                                <div class="row-2 mt-4">
                                                    <p>CMS Web Profile memungkinkan pengurus koperasi untuk mengelola konten
                                                        dengan mudah dan efisien, tanpa memerlukan keahlian teknis khusus.
                                                    </p>
                                                </div>
                                                <div class="row-2 mt-4">
                                                    <p>Setiap perubahan informasi dapat dilakukan secara real-time,
                                                        memastikan anggota selalu mendapatkan informasi terkini. </p>
                                                </div>
                                                <div class="row-2 mt-5">
                                                    <p>Aplikasi ini menyediakan desain web yang responsif dan menarik di
                                                        berbagai perangkat, meningkatkan aksesibilitas dan pengalaman
                                                        pengguna.</p>
                                                </div>
                                                <div class="row-2 mt-4">
                                                    <p>Pengurus koperasi dapat mengatur struktur halaman web dengan mudah,
                                                        membuat navigasi lebih efisien dan ramah pengguna.</p>
                                                </div>
                                                <div class="row-2 mt-5">
                                                    <p>CMS Web Profile memudahkan integrasi dengan platform media sosial,
                                                        memperluas jangkauan informasi dan komunikasi.
                                                    </p>
                                                </div>
                                                <div class="row-2 mt-5">
                                                    <p>Aplikasi ini menyediakan fitur analitik untuk memantau kinerja web,
                                                        membantu pengurus koperasi mengambil keputusan yang lebih baik
                                                        berdasarkan data./p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="apply-program">
                                    <div class="row align-items-center">
                                        <div class="col-lg-7 col-md-7">
                                            <div class="image">
                                                <img src="{{ asset('template/img/proyek/analytics.jpg') }}" alt="image">
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-5">
                                            <div class="content">
                                                <h3>Manfaat yang dirasakan</h3>
                                                <p>Sistem CMS Web Profile koperasi mempermudah pengurus koperasi dalam
                                                    mengelola konten dan memperbarui informasi secara real-time, menghemat
                                                    waktu dan mengurangi kesalahan dalam proses pengelolaan web. Dengan
                                                    fitur desain yang responsif, informasi dapat diakses dengan mudah di
                                                    berbagai perangkat, meningkatkan pengalaman pengguna.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Academics Section Area -->
@endsection
