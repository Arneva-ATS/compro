<div class="navbar-area style-2" id="navbar">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="index.html">
                <img class="logo-light" style="max-width: 9em;" src="template/img/logo/logo_ats-07.png" alt="logo">
                <img class="logo-dark" style="max-width: 9em;" src="template/img/logo/logo_ats-07.png" alt="logo">
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
                        <a href="{{ route('tentang-kami') }}" class="dropdown-toggle nav-link {{ request()->routeIs('tentang-kami') ? 'active' : '' }}">
                            Tentang Kami
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a href="{{ route('tentang-kami') }}" class="nav-link {{ request()->routeIs('tentang-kami') ? 'active' : '' }}">Visi & Misi</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void(0)" class="dropdown-toggle nav-link">
                            Produk
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a href="academics.html" class="nav-link">Academics</a></li>
                            <li class="nav-item"><a href="undergraduate.html" class="nav-link">Undergraduate</a></li>
                            <li class="nav-item"><a href="graduate.html" class="nav-link">Graduate</a></li>
                            <li class="nav-item"><a href="online-education.html" class="nav-link">Online Education</a>
                            </li>
                            <li class="nav-item"><a href="faculty.html" class="nav-link">Faculty</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void(0)" class="nav-link">
                            Blog
                        </a>

                    </li>

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
                            <a href="contact-us.html" class="default-btn" style="background-color:#102C57">Contact Us</a>
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
        <a href="index.html" class="logo d-inline-block">
            <img class="logo-light" src="template/img/logo/logo_ats-07.png" alt="logo">
        </a>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="accordion" id="navbarAccordion">
            <div class="accordion-item">
                <a class="accordion-link without-icon" href="contact-us.html">
                    Beranda
                </a>
            </div>
            <div class="accordion-item">
                <button class="accordion-button collapsed active" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    Tentang Kami
                </button>
                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                    <div class="accordion-body">
                        <div class="accordion" id="navbarAccordion7">
                            <div class="accordion-item">
                                <a href="index.html" class="accordion-link">
                                    Visi & Misi
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Produk
                </button>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#navbarAccordion">
                    <div class="accordion-body">
                        <div class="accordion" id="navbarAccordion30">
                            <div class="accordion-item">
                                <a href="academics.html" class="accordion-link">
                                    Academics
                                </a>
                            </div>
                            <div class="accordion-item">
                                <a href="undergraduate.html" class="accordion-link">
                                    Undergraduate
                                </a>
                            </div>
                            <div class="accordion-item">
                                <a href="graduate.html" class="accordion-link">
                                    Graduate
                                </a>
                            </div>
                            <div class="accordion-item">
                                <a href="online-education.html" class="accordion-link">
                                    Online Education
                                </a>
                            </div>
                            <div class="accordion-item">
                                <a href="faculty.html" class="accordion-link">
                                    Faculty
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <a class="accordion-link without-icon" href="contact-us.html">
                    Blog
                </a>
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
