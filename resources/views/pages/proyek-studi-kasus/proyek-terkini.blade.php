@extends('master');
@section('content')
<!-- Start Section Banner Area -->
<div class="section-banner bg-20">
    <div class="container">
        <div class="banner-spacing">
            <div class="section-info">
                <h2 data-aos="fade-up" data-aos-delay="100">RKI App</h2>
                <p data-aos="fade-up" data-aos-delay="200">Sebuah aplikasi untuk membantu para pelaku usaha koperasi dan anggotanya. Aplikasi ini dirancang untuk simpan pinjam anggota, point of sales, ppob, accounting dan lain sebagainya....</p>
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
                            <li><a class="active" href="{{ route('proyek-studi-kasus.proyek-terkini') }}">RKI</a></li>
                            <li><a href="{{ route('proyek-studi-kasus.pet-clinic') }}">Pet Clinic</a></li>
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
                            RKIApp adalah aplikasi inovatif yang dirancang khusus untuk para pelaku usaha koperasi dan anggota koperasi, menawarkan berbagai fitur lengkap seperti point of sales, layanan simpan pinjam, PPOB pulsa, PPOB PLN, PPOB PDAM, e-wallet, perhitungan akuntansi, dan banyak lagi, guna mempermudah dan mengoptimalkan operasional koperasi.</p>
                        <div class="univercity-life">
                            <div class="image">
                                <img src="{{ asset('template/img/proyek/pos.jpg') }}" alt="image">
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="aid-pra">
                                        <h3>Layanan</h3>
                                        <p>Android & Website</p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="aid-pra">
                                        <h3>Client</h3>
                                        <p>Rumah Kesejahteraan Indonesia</p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="aid-pra">
                                        <h3>Tahun</h3>
                                        <p>2023/2024</p>
                                    </div>
                                </div>
                                <div class="col-lg-3">
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
                                                <p class="text-danger"> Pelaku usaha koperasi harus mencatat setiap transaksi secara manual, yang rentan terhadap kesalahan dan memakan waktu.</p>
                                            </div>
                                            <div class="row-2 mt-4">
                                                <p class="text-danger">Anggota koperasi harus datang langsung ke kantor untuk melakukan transaksi simpan pinjam, yang dapat menyulitkan dan memakan waktu.</p>
                                            </div>
                                            <div class="row-2 mt-5">
                                                <p class="text-danger">Pembayaran PPOB seperti pulsa, PLN, dan PDAM harus dilakukan di tempat terpisah, menyulitkan anggota koperasi.</p>
                                            </div>
                                            <div class="row-2 mt-4">
                                                <p class="text-danger">Pengelolaan keuangan dilakukan secara manual dengan menggunakan buku besar atau spreadsheet, yang rentan terhadap kesalahan dan kurang efisien.</p>
                                            </div>
                                            <div class="row-2 mt-4">
                                                <p class="text-danger">Tidak ada sistem e-wallet, sehingga transaksi digital tidak dapat dilakukan.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 text-info">
                                        <h4>Dengan Aplikasi</h4>
                                        <div class="col">
                                            <div class="row-2 mt-4">
                                                <p>RKIApp memungkinkan pencatatan transaksi secara otomatis dan real-time, mengurangi kesalahan dan meningkatkan efisiensi.</p>
                                            </div>
                                            <div class="row-2 mt-4">
                                                <p> Anggota koperasi dapat melakukan transaksi simpan pinjam kapan saja dan di mana saja melalui aplikasi, memudahkan akses dan mempercepat proses.</p>
                                            </div>
                                            <div class="row-2 mt-4">
                                                <p>Pembayaran PPOB seperti pulsa, PLN, dan PDAM dapat dilakukan langsung melalui aplikasi, memudahkan anggota koperasi.</p>
                                            </div>
                                            <div class="row-2 mt-4">
                                                <p>RKIApp menyediakan fitur pengelolaan keuangan otomatis yang aman dan efisien, mengurangi risiko kesalahan.</p>
                                            </div>
                                            <div class="row-2 mt-5">
                                                <p>Perhitungan akuntansi dilakukan secara otomatis oleh aplikasi, menghemat waktu dan meminimalkan risiko kesalahan.</p>
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
                                            <p>Sistem yang kami kembangkan bersama pelaku koperasi memberikan dampak positif. Kemudahan transaksi dirasakan oleh anggota koperasi dan efisiensi operasional dirasakan oleh pengurus koperasi. </p>
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
