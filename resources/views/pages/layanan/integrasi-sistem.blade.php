@extends('master')
@section('content')
<!-- Start Section Banner Area -->
<div class="section-banner bg-7">
    <div class="container">
        <div class="banner-spacing">
            <div class="section-info">
                <h2 data-aos="fade-up" data-aos-delay="100">Courses Details</h2>
                <p data-aos="fade-up" data-aos-delay="200">Clgun University is more than just a place of learning; it's a place where dreams take flight, where ideas flourish, and where you'll find the support and...</p>
            </div>
        </div>
    </div>
</div>
<!-- End Section Banner Area -->

<!-- Start Courses Details Area -->
<div class="courses-details-section pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="courses-details">
                    <div class="header-title">
                        <span>Layanan</span>
                        <h2>Konsultasi IT</h2>
                    </div>
                    <div class="content">
                        <div class="content-pra">
                            <div class="title">
                                <h3>About This Course</h3>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem incid idunt ut labore et dolore magna aliqua. Ut enim ad minim ven iam quis nostrud xerci tation ulla mco laboris nisi ut Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem incid idunt ut labore</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem incid idunt ut labore et doloremgna aliqua. Ut enim ad minim ven iam quis nostrud xerci.</p>
                        </div>
                        <div class="content-pra">
                            <div class="title">
                                <h3>Learning Objectives</h3>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem incid idunt ut labore et doloremgna aliqua. Ut enim ad minim ven iam quis nostrud xerci.</p>
                            <ul class="lists">
                                <li>
                                    <div class="icon">
                                        <i class='bx bx-check'></i>
                                    </div>
                                    <p>To promote an entrepreneurial spirit and to consider the option of setting up a company as an employment opportunity</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class='bx bx-check'></i>
                                    </div>
                                    <p>Development of entrepreneurial skills and use of tools that equip people to work in an entrepreneurial project</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class='bx bx-check'></i>
                                    </div>
                                    <p>Essential knowledge for those interested in managing their own business</p>
                                </li>
                            </ul>
                        </div>
                        <div class="content-pra">
                            <div class="title">
                                <h3>Learning Objectives</h3>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem incid idunt ut labore et doloremgna aliqua. Ut enim ad minim ven iam quis nostrud xerci.</p>
                            <ul class="lists">
                                <li>
                                    <div class="icon">
                                        <i class='bx bx-check'></i>
                                    </div>
                                    <p>To promote an entrepreneurial spirit and to consider the option of setting up a company as an employment opportunity</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class='bx bx-check'></i>
                                    </div>
                                    <p>Development of entrepreneurial skills and use of tools that equip people to work in an entrepreneurial project</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class='bx bx-check'></i>
                                    </div>
                                    <p>Essential knowledge for those interested in managing their own business</p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem incid idunt ut labore et doloremgna aliqua. Ut enim ad minim ven iam quis nostrud xerci.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="course-widget-area">
                    <div class="image">
                        <img src="{{ asset('template/img/all-img/course-video.png') }}" alt="image">
                        <div class="play-btn">
                            <a href="https://youtu.be/SbuRnwgG8rs?si=Oew2tM_U0WQPjJte" class="popup-youtube"><i class='bx bx-play'></i></a>
                        </div>
                    </div>
                    <div class="content">
                        <div class="pricing">
                            <h4>$0</h4>
                        </div>
                        <ul>
                            <li>
                                <span>Level</span>
                                <p>Graduate</p>
                            </li>
                            <li>
                                <span>Duration</span>
                                <p>21.3 hours</p>
                            </li>
                            <li>
                                <span>Subject</span>
                                <p>Business</p>
                            </li>
                            <li>
                                <span>Language</span>
                                <p>English</p>
                            </li>
                        </ul>
                        <a class="enroll-btn" href="#">Enroll Now</a>
                        <a class="wish-btn" href="#">Add to wishlist</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Courses Details Area -->
@endsection
