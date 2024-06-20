@extends('master')
@section('content')
<!-- Start Section Banner Area -->
<div class="section-banner bg-4">
    <div class="container">
        <div class="banner-spacing">
            <div class="section-info">
                <h2 data-aos="fade-up" data-aos-delay="100">Contact Us</h2>
                <p data-aos="fade-up" data-aos-delay="200">Clgun University is more than just a place of learning; it's a place where dreams take flight, where ideas flourish, and where you'll find the support and...</p>
            </div>
        </div>
    </div>
</div>
<!-- End Section Banner Area -->

<!-- Start Contact  Area-->
<div class="contact-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="contact-content">
                    <div class="header-content">
                        <h2>We’d Love To Hear From You</h2>
                        <p>Clgun University offers a supportive educational experience, from developing an academic plan to graduation. Clgun University students earn bachelor’s and master’s degrees in business, education, health sciences, and nursing.</p>
                        <p>For verifications, please email <a href="#">registrar@clgununiversity.edu.</a></p>
                    </div>

                    <div class="contact-form">
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="name">First Name</label>
                                        <input type="text" name="name" class="form-control" id="name" required data-error="Please enter your name" placeholder="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="name">Last Name</label>
                                        <input type="text" name="name" class="form-control" id="name2" required data-error="Please enter your name" placeholder="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="name">Email</label>
                                        <input type="email" name="email" class="form-control" id="email" required data-error="Please enter your email" placeholder="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="name">Phone</label>
                                        <input type="text" name="phone_number" class="form-control" id="phone_number" required data-error="Please enter your phone number" placeholder="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label for="name">Inquiry Type</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Admission</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label for="name">Inquiry</label>
                                        <textarea name="message" id="message" class="form-control" cols="30" rows="6" required data-error="Please enter your message" placeholder=""></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn">Submit Now</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-info">

                 <!-- Start Map Area -->
                <div id="map" class="map-pd">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.9476519598093!2d-73.99185268459418!3d40.74117737932881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a3f81d549f%3A0xb2a39bb5cacc7da0!2s175%205th%20Ave%2C%20New%20York%2C%20NY%2010010%2C%20USA!5e0!3m2!1sen!2sbd!4v1588746137032!5m2!1sen!2sbd"></iframe>
                </div>
                <!-- End Map Area -->

                <div class="info-details">
                    <ul>
                        <li><i class='bx bxs-phone-call'></i> General Inquiries - <a href="tel:+8495160885">(849) 516-0885</a></li>
                        <li><i class='bx bxs-phone-call'></i> Enrollment Inquiries - <a href="tel:+18554750885">1-855-475-0885</a></li>
                        <li><i class='bx bxs-phone-call'></i> Financial Inquiries - <a href="tel:+18554750885"> (849) 516-0885</a>(Option 4)</li>
                        <li><i class='bx bxs-phone-call'></i> Student Account Inquiries - <a href="tel:+18554750885"> (849) 516-0885</a>(Option 5)</li>
                        <li><i class='bx bxs-map'></i> 404 Camino Del Rio S, Suite 102San Diego, CA 92108</li>
                        <li><i class='bx bxs-envelope'></i><a class="info-mail" href="registrar@clgununiversity.edu.">registrar@clgununiversity.edu.</a></li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Contact Area-->
@endsection