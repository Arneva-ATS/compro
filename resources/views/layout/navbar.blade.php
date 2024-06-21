<div class="navbar-area style-2" id="navbar">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="index.html">
                <img class="logo-light" style="max-width: 9em;" src="{{ asset('template/img/logo/logo_ats-08.png') }}" alt="logo">
                <img class="logo-dark" style="max-width: 9em;" src="{{ asset('template/img/logo/logo_ats-07.png') }}" alt="logo">
            </a>
            <div class="other-option d-lg-none">
                <div class="option-item">
                    <button type="button" class="search-btn" data-bs-toggle="offcanvas"
                        data-bs-target="#staticBackdrop">
                        <i class='bx bx-search'></i>
                    </button>
                </div>
            </div>
            <a class="navbar-toggler" data-bs-toggle="offcanvas" href="#navbarOffcanvas" role="button"
                aria-controls="navbarOffcanvas">
                <i class='bx bx-menu'></i>
            </a>
            <div class="collapse navbar-collapse justify-content-between">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                            Beranda
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void(0)" class="dropdown-toggle nav-link {{ request()->routeIs(['tentang-kami.visi-misi', 'tentang-kami.nilai-nilai-perusahaan']) ? 'active' : '' }}">
                            Tentang Kami
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a href="{{ route('tentang-kami.visi-misi') }}" class="nav-link {{ request()->routeIs('tentang-kami.visi-misi') ? 'active' : '' }}">Visi & Misi</a></li>
                            <li class="nav-item"><a href="{{ route('tentang-kami.nilai-nilai-perusahaan') }}" class="nav-link {{ request()->routeIs('tentang-kami.nilai-nilai-perusahaan') ? 'active' : '' }}">Nilai-Nilai Perusahaan</a></li>
                            {{-- <li class="nav-item"><a href="#!" class="nav-link">Tim Kami</a></li> --}}
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void(0)" class="dropdown-toggle nav-link {{ request()->routeIs(['layanan.konsultasi-it', 'layanan.integrasi-sistem', 'layanan.pengembangan-perangkat-lunak', 'layanan.keamanan-siber', 'layanan.dukungan-it']) ? 'active' : '' }}">
                            Layanan
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a href="{{ route('layanan.konsultasi-it') }}" class="nav-link {{ request()->routeIs('layanan.konsultasi-it') ? 'active' : '' }}">Konsultasi TI</a></li>
                            <li class="nav-item"><a href="{{ route('layanan.integrasi-sistem') }}" class="nav-link {{ request()->routeIs('layanan.integrasi-sistem') ? 'active' : '' }}">Integrasi Sistem</a></li>
                            <li class="nav-item"><a href="{{ route('layanan.pengembangan-perangkat-lunak') }}" class="nav-link {{ request()->routeIs('layanan.pengembangan-perangkat-lunak') ? 'active' : '' }}">Pengembangan Perangkat Lunak</a></li>
                            <li class="nav-item"><a href="{{ route('layanan.keamanan-siber') }}" class="nav-link {{ request()->routeIs('layanan.keamanan-siber') ? 'active' : '' }}">Keamanan Siber</a></li>
                            <li class="nav-item"><a href="{{ route('layanan.dukungan-it') }}" class="nav-link {{ request()->routeIs('layanan.dukungan-it') ? 'active' : '' }}">Dukungan TI</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void(0)" class="dropdown-toggle nav-link {{ request()->routeIs(['solusi-bisnis.koperasi-digital', 'solusi-bisnis.rumah-sakit-digital', 'solusi-bisnis.manajemen-rantai-pemasok', 'solusi-bisnis.manajemen-gedung']) ? 'active' : '' }}">
                            Solusi Bisnis
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a href="{{ route('solusi-bisnis.koperasi-digital') }}" class="nav-link {{ request()->routeIs('solusi-bisnis.koperasi-digital') ? 'active' : '' }}">Koperasi Digital</a></li>
                            <li class="nav-item"><a href="{{ route('solusi-bisnis.rumah-sakit-digital') }}" class="nav-link {{ request()->routeIs('solusi-bisnis.rumah-sakit-digital') ? 'active' : '' }}">Rumah Sakit Digital</a></li>
                            <li class="nav-item"><a href="{{ route('solusi-bisnis.manajemen-rantai-pemasok') }}" class="nav-link {{ request()->routeIs('solusi-bisnis.manajemen-rantai-pemasok') ? 'active' : '' }}">Manajemen Rantai Pemasok</a></li>
                            <li class="nav-item"><a href="{{ route('solusi-bisnis.manajemen-gedung') }}" class="nav-link {{ request()->routeIs('solusi-bisnis.manajemen-gedung') ? 'active' : '' }}">Manajemen Gedung</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('karir') }}" class="nav-link {{ request()->routeIs('karir') ? 'active' : '' }}">
                            Karir
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('produk') }}" class="dropdown-toggle nav-link {{ request()->routeIs('produk') ? 'active' : '' }}">
                            Proyek dan Studi Kasus
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a href="#!" class="nav-link">Proyek Terkini</a></li>
                            <li class="nav-item"><a href="#!" class="nav-link">Studi Kasus</a></li>
                            <li class="nav-item"><a href="#!" class="nav-link">Testimoni Klien</a></li>                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('blog') }}" class="dropdown-toggle nav-link {{ request()->routeIs('blog') ? 'active' : '' }}">
                            blog
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a href="#!" class="nav-link">Artikel Teknologi</a></li>
                            <li class="nav-item"><a href="#!" class="nav-link">Berita dan Pembaruan</a></li>
                            <li class="nav-item"><a href="#!" class="nav-link">Tips & Trik</a></li>                            </li>
                        </ul>
                    </li>
                    {{-- <li class="nav-item">
                        <a href="#!" class="dropdown-toggle nav-link">
                            Sumber Daya
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a href="#!" class="nav-link">Dokumentasi</a></li>
                            <li class="nav-item"><a href="#!" class="nav-link">White Papers</a></li>
                            <li class="nav-item"><a href="#!" class="nav-link">e-Books</a></li>                            </li>
                        </ul>
                    </li> --}}

                    {{-- <li class="nav-item">
                        <a href="a.html" class="dropdown-toggle nav-link">
                            Bahasa
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a href="university-life.html" class="nav-link">University Life</a>
                            </li>
                            <li class="nav-item"><a href="the-campus-experience.html" class="nav-link">The Campus
                                    Experience</a></li>
                            <li class="nav-item"><a href="fitness-athletics.html" class="nav-link">Fitness &
                                    Athletics</a></li>
                            <li class="nav-item"><a href="support-guidance.html" class="nav-link">Support & Guidance</a>
                            </li>
                            <li class="nav-item"><a href="student-activities.html" class="nav-link">Student
                                    Activities</a></li>
                        </ul>
                    </li> --}}
                </ul>
                <div class="others-option d-flex align-items-center">
                    <div class="option-item">
                        <div class="nav-btn">
                            <a href="{{ route('kontak-kami') }}" class="default-btn" style="background-color:#f17a3d">Kontak Kami</a>
                        </div>
                    </div>
                    <div class="option-item">
                        <div class="nav-search">
                            <a href="#" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop"
                                aria-controls="staticBackdrop" class="search-button"><i class='bx bx-search'></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- End Navbar Area Start -->

<!-- Start Responsive Navbar Area -->
<div class="responsive-navbar offcanvas offcanvas-end" data-bs-backdrop="static" tabindex="-1" id="navbarOffcanvas">
    <div class="offcanvas-header">
        <a href="{{ route('home') }}" class="logo d-inline-block">
            <img class="logo-light" src="{{ asset('template/img/logo/logo_ats-07.png') }}" alt="logo">
        </a>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="accordion" id="navbarAccordion">
            <div class="accordion-item">
                <a class="accordion-link without-icon {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                    Beranda
                </a>
            </div>
            <div class="accordion-item">
                <button class="accordion-button collapsed {{ request()->routeIs(['tentang-kami.visi-misi', 'tentang-kami.nilai-nilai-perusahaan']) ? 'active' : '' }}" type="button" data-bs-toggle="collapse"
                    data-bs-target="#tentang-kami" aria-expanded="false" aria-controls="tentang-kami">
                    Tentang Kami
                </button>
                <div id="tentang-kami" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                    <div class="accordion-body">
                        <div class="accordion" id="navbarAccordion7">
                            <div class="accordion-item">
                                <a href="{{ route('tentang-kami.visi-misi') }}" class="accordion-link {{ request()->routeIs('tentang-kami.visi-misi') ? 'active' : '' }}">
                                    Visi & Misi
                                </a>
                            </div>
                            <div class="accordion-item">
                                <a href="{{ route('tentang-kami.nilai-nilai-perusahaan') }}" class="accordion-link {{ request()->routeIs('tentang-kami.nilai-nilai-perusahaan') ? 'active' : '' }}">
                                    Nilai-Nilai Perusahaan
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <button class="accordion-button collapsed {{ request()->routeIs(['layanan.konsultasi-it', 'layanan.integrasi-sistem', 'layanan.pengembangan-perangkat-lunak', 'layanan.keamanan-siber', 'layanan.dukungan-it']) ? 'active' : '' }}" type="button" data-bs-toggle="collapse"
                    data-bs-target="#layanan" aria-expanded="false" aria-controls="layanan">
                    Layanan
                </button>
                <div id="layanan" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                    <div class="accordion-body">
                        <div class="accordion" id="navbarAccordion30">
                            <div class="accordion-item">
                                <a href="{{ route('layanan.konsultasi-it') }}" class="accordion-link {{ request()->routeIs('layanan.konsultasi-it') ? 'active' : '' }}">
                                    Konsultasi TI
                                </a>
                            </div>
                            <div class="accordion-item">
                                <a href="{{ route('layanan.integrasi-sistem') }}" class="accordion-link {{ request()->routeIs('layanan.integrasi-sistem') ? 'active' : '' }}">
                                    Integrasi Sistem
                                </a>
                            </div>
                            <div class="accordion-item">
                                <a href="{{ route('layanan.pengembangan-perangkat-lunak') }}" class="accordion-link {{ request()->routeIs('layanan.pengembangan-perangkat-lunak') ? 'active' : '' }}">
                                    Pengembangan Perangkat Lunak
                                </a>
                            </div>
                            <div class="accordion-item">
                                <a href="{{ route('layanan.keamanan-siber') }}" class="accordion-link {{ request()->routeIs('layanan.keamanan-siber') ? 'active' : '' }}">
                                    Keamanan Siber
                                </a>
                            </div>
                            <div class="accordion-item">
                                <a href="{{ route('layanan.dukungan-it') }}" class="accordion-link {{ request()->routeIs('layanan.dukungan-it') ? 'active' : '' }}">
                                    Dukungan TI
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <button class="accordion-button collapsed {{ request()->routeIs(['solusi-bisnis.koperasi-digital', 'solusi-bisnis.rumah-sakit-digital', 'solusi-bisnis.manajemen-rantai-pemasok', 'solusi-bisnis.manajemen-gedung']) ? 'active' : '' }}" type="button" data-bs-toggle="collapse"
                    data-bs-target="#solusi-bisnis" aria-expanded="false" aria-controls="solusi-bisnis">
                    Solusi Bisnis
                </button>
                <div id="solusi-bisnis" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                    <div class="accordion-body">
                        <div class="accordion" id="navbarAccordion30">
                            <div class="accordion-item">
                                <a href="{{ route('solusi-bisnis.koperasi-digital') }}" class="accordion-link {{ request()->routeIs('solusi-bisnis.koperasi-digital') ? 'active' : '' }}">
                                    Koperasi Digital
                                </a>
                            </div>
                            <div class="accordion-item">
                                <a href="{{ route('solusi-bisnis.rumah-sakit-digital') }}" class="accordion-link {{ request()->routeIs('solusi-bisnis.rumah-sakit-digital') ? 'active' : '' }}">
                                    Rumah Sakit Digital
                                </a>
                            </div>
                            <div class="accordion-item">
                                <a href="{{ route('solusi-bisnis.manajemen-rantai-pemasok') }}" class="accordion-link {{ request()->routeIs('solusi-bisnis.manajemen-rantai-pemasok') ? 'active' : '' }}">
                                    Manajemen Rantai Pemasok
                                </a>
                            </div>
                            <div class="accordion-item">
                                <a href="{{ route('solusi-bisnis.manajemen-gedung') }}" class="accordion-link {{ request()->routeIs('solusi-bisnis.manajemen-gedung') ? 'active' : '' }}">
                                    Manajemen Gedung
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <a class="accordion-link without-icon {{ request()->routeIs('karir') ? 'active' : '' }}" href="{{ route('karir') }}">
                    Karir
                </a>
            </div>
            <div class="accordion-item">
                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse"
                    data-bs-target="#proyek&case" aria-expanded="false" aria-controls="proyek&case">
                    Proyek dan Studi Kasus
                </button>
                <div id="proyek&case" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                    <div class="accordion-body">
                        <div class="accordion" id="navbarAccordion30">
                            <div class="accordion-item">
                                <a href="#!" class="accordion-link">
                                    Proyek Terkini
                                </a>
                            </div>
                            <div class="accordion-item">
                                <a href="#!" class="accordion-link">
                                    Studi Kasus
                                </a>
                            </div>
                            <div class="accordion-item">
                                <a href="#!" class="accordion-link">
                                    Testimoni Klien
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse"
                    data-bs-target="#blog" aria-expanded="false" aria-controls="blog">
                    Blog
                </button>
                <div id="blog" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                    <div class="accordion-body">
                        <div class="accordion" id="navbarAccordion30">
                            <div class="accordion-item">
                                <a href="#!" class="accordion-link">
                                    Artikel Teknologi
                                </a>
                            </div>
                            <div class="accordion-item">
                                <a href="#!" class="accordion-link">
                                    Berita dan Pembaruan
                                </a>
                            </div>
                            <div class="accordion-item">
                                <a href="#!" class="accordion-link">
                                    Tips & Trik
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="accordion-item">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Bahasa
                </button>
                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                    <div class="accordion-body">
                        <div class="accordion" id="navbarAccordion31">
                            <div class="accordion-item">
                                <a href="admission.html" class="accordion-link">
                                    Admissions
                                </a>
                            </div>
                            <div class="accordion-item">
                                <a href="how-to-apply.html" class="accordion-link">
                                    How to Apply
                                </a>
                            </div>
                            <div class="accordion-item">
                                <a href="tuition-fees.html" class="accordion-link">
                                    Tuition &amp; Fees
                                </a>
                            </div>
                            <div class="accordion-item">
                                <a href="financial-aid.html" class="accordion-link">
                                    Financial Aid
                                </a>
                            </div>
                            <div class="accordion-item">
                                <a href="date-deadlines.html" class="accordion-link">
                                    Date &amp; Deadlines
                                </a>
                            </div>
                            <div class="accordion-item">
                                <a href="schedule-tour.html" class="accordion-link">
                                    Schedule a Tour
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

        </div>
        <div class="offcanvas-contact-info">
            <h4>Contact Info</h4>
            <ul class="contact-info list-style">
                <li>
                    <i class="bx bxs-envelope"></i>
                    <a href="contact@Clgunme.edu">contact@Clgunme.edu</a>
                </li>
                <li>
                    <i class="bx bxs-time"></i>
                    <p>Mon - Fri: 9:00 - 18:00</p>
                </li>
            </ul>
            <ul class="social-profile list-style">
                <li><a href="https://www.fb.com" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                <li><a href="https://www.instagram.com" target="_blank"><i class='bx bxl-instagram'></i></a></li>
                <li><a href="https://www.linkedin.com" target="_blank"><i class='bx bxl-linkedin'></i></a></li>
            </ul>
        </div>
        <div class="offcanvas-other-options">
            <div class="option-item">
                <a href="contact-us.html" class="default-btn"  style="background-color:#102C57" >Contact Us</a>
            </div>
        </div>
    </div>
</div>
