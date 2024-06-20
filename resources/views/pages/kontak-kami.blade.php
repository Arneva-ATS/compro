@extends('master')
@section('content')
<!-- Start Section Banner Area -->
<div class="section-banner bg-4">
    <div class="container">
        <div class="banner-spacing">
            <div class="section-info">
                <h2 data-aos="fade-up" data-aos-delay="100">Kontak Kami</h2>
                <p data-aos="fade-up" data-aos-delay="200">PT. Arneva Teknologi Solusi adalah partner bisnis Anda di bidang IT Solution</p>
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
                        <p>Jika Anda ingin menjadi partner kami, silahkan email ke <a href="#">arneva.ts@gmail.com</a></p>
                    </div>

                    <div class="contact-form">
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="name">Nama Depan</label>
                                        <input type="text" name="name" class="form-control" id="name" required data-error="Please enter your name" placeholder="">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label for="name">Perusahaan / Instansi</label>
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
                                        <label for="name">Layanan</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Konsultasi IT</option>
                                            <option value="1">Integrasi Sistem</option>
                                            <option value="2">Pengembangan Perangkat Lunak</option>
                                            <option value="3">Keamanan Siber</option>
                                            <option value="3">Dukungan TI</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label for="name">Pesan</label>
                                        <textarea name="message" id="message" class="form-control" cols="30" rows="6" required data-error="Please enter your message" placeholder=""></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn">Kirim</button>
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
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.188685875326!2d106.78291477499059!3d-6.238844293749425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f13d81a65105%3A0xbe8718edfcb92d85!2sGraha%20KAS!5e0!3m2!1sid!2sid!4v1718843998512!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <!-- End Map Area -->

                <div class="info-details">
                    <ul>
                        <li><i class='bx bxs-phone-call'></i>  <a href="tel:+8495160885">(+62) 877-8003-0151</a></li>
                        <li><i class='bx bxs-map'></i>Graha Kas LT. 3 Kebayoran Baru, Jakarta Selatan</li>
                        <li><i class='bx bxs-envelope'></i><a href="arneva.ts@gmail.com">arneva.ts@gmail.com</a></li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Contact Area-->
@endsection
