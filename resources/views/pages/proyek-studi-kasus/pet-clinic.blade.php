@extends('master');
@section('content')
    <!-- Start Section Banner Area -->
    <div class="section-banner bg-23">
        <div class="container">
            <div class="banner-spacing">
                <div class="section-info">
                    <h2 data-aos="fade-up" data-aos-delay="100">Pet Clinic</h2>
                    <p data-aos="fade-up" data-aos-delay="200">Aplikasi pet clinic menawarkan solusi untuk reservasi hingga
                        pemeriksaan hewan peliharaan. Aplikasi ini memilik fitur reservasi jadwal dokter, pendaftaran jadwal
                        pemeriksaan, tindakan, dan transaksi obat...</p>
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
                                <li><a class="active" href="{{ route('proyek-studi-kasus.pet-clinic') }}">Pet Clinic</a>
                                </li>
                                <li><a href="#">HR System</a></li>
                                <li><a href="#">Core Accounting</a></li>
                                <li><a href="{{ route('proyek-studi-kasus.cms-web') }}">CMS Web Profile</a></li>
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
                                Aplikasi Pet Clinic menawarkan solusi lengkap untuk kebutuhan kesehatan dan perawatan hewan
                                peliharaan Anda. Dengan berbagai fitur yang dirancang khusus, aplikasi ini memastikan setiap
                                aspek perawatan hewan peliharaan dapat dilakukan dengan mudah dan efisien. Beberapa fitur
                                unggulan dari Pet Clinic meliputi:
                            </p>
                            <ul>
                                <li class="fw-bold">Reservasi Jadwal Dokter</li>
                                <li class="fw-bold">Pendaftaran Jadwal Pemeriksaan</li>
                                <li class="fw-bold">Layanan Tindakan Medis</li>
                                <li class="fw-bold">Transaksi Obat</li>
                                <li class="fw-bold">Pengingat Jadwal</li>
                                <li class="fw-bold">Rekam Medis Digital</li>
                            </ul>
                            <div class="univercity-life">
                                <div class="image">
                                    <img src="{{ asset('template/img/proyek/pos.jpg') }}" alt="image">
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
                                            <p>MyVets</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                        <div class="aid-pra">
                                            <h3>Tahun</h3>
                                            <p>2023</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                        <div class="aid-pra">
                                            <h3>Durasi</h3>
                                            <p>4 Bulan</p>
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
                                                    <p class="text-danger"> Pemilik hewan peliharaan harus menelepon atau datang langsung ke klinik untuk membuat janji, yang sering kali memakan waktu dan rentan terhadap kesalahan dalam pencatatan.</p>
                                                </div>
                                                <div class="row-2 mt-4">
                                                    <p class="text-danger">Proses pendaftaran pemeriksaan dilakukan secara manual di klinik, yang bisa menyebabkan antrian panjang dan ketidaknyamanan bagi pemilik hewan peliharaan.</p>
                                                </div>
                                                <div class="row-2 mt-5">
                                                    <p class="text-danger">Informasi tentang layanan medis yang tersedia tidak selalu mudah diakses oleh pemilik hewan, menyebabkan kebingungan dan ketidakpastian.
                                                    </p>
                                                </div>
                                                <div class="row-2 mt-5">
                                                    <p class="text-danger">Pembelian obat dan produk kesehatan hewan dilakukan secara manual di klinik, yang bisa memakan waktu dan tidak efisien.</p>
                                                </div>
                                                <div class="row-2 mt-5">
                                                    <p class="text-danger">Pemilik hewan peliharaan harus mengingat sendiri jadwal pemeriksaan atau vaksinasi, yang bisa mengakibatkan terlupanya jadwal penting.</p>
                                                </div>
                                                <div class="row-2 mt-5">
                                                    <p class="text-danger">Riwayat kesehatan hewan peliharaan disimpan dalam bentuk fisik di klinik, yang bisa hilang atau sulit diakses saat dibutuhkan.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 text-info">
                                            <h4>Dengan Aplikasi</h4>
                                            <div class="col">
                                                <div class="row-2 mt-4">
                                                    <p>Aplikasi Pet Clinic memungkinkan pemilik hewan peliharaan untuk membuat janji secara online dengan mudah, mengurangi waktu tunggu dan meminimalkan kesalahan pencatatan.</p>
                                                </div>
                                                <div class="row-2 mt-4">
                                                    <p> Proses pendaftaran pemeriksaan dilakukan secara otomatis melalui aplikasi, mengurangi antrian dan meningkatkan kenyamanan bagi pemilik hewan peliharaan.</p>
                                                </div>
                                                <div class="row-2 mt-5">
                                                    <p>Informasi lengkap tentang layanan medis tersedia dalam aplikasi, memberikan kemudahan akses dan memastikan pemilik hewan mendapatkan informasi yang mereka butuhkan.</p>
                                                </div>
                                                <div class="row-2 mt-4">
                                                    <p> Pembelian obat dan produk kesehatan hewan dapat dilakukan langsung melalui aplikasi, membuat proses lebih cepat dan efisien.</p>
                                                </div>
                                                <div class="row-2 mt-5">
                                                    <p>Aplikasi mengirimkan pengingat otomatis untuk jadwal pemeriksaan atau vaksinasi, memastikan pemilik hewan tidak melewatkan janji penting.</p>
                                                </div>
                                                <div class="row-2 mt-5">
                                                    <p>Semua riwayat kesehatan hewan peliharaan tercatat secara digital dalam aplikasi, memudahkan akses dan keamanan data.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="apply-program">
                                    <div class="row align-items-center">
                                        <div class="col-lg-7 col-md-7">
                                            <div class="image">
                                                <img src="{{ asset('template/img/proyek/ppob.jpg') }}" alt="image">
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-5">
                                            <div class="content">
                                                <h3>Manfaat yang dirasakan</h3>
                                                <p>Sistem pet clinic membantu pasien dengan mudah membuat janji temu dengan dokter hewan secara online, menghemat waktu dan mengurangi kesalahan dalam pencatatan. Pendaftaran untuk pemeriksaan kesehatan hewan peliharaan dapat dilakukan melalui aplikasi, mengurangi antrian dan mempercepat proses administrasi.</p>
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
