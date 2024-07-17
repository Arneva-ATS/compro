@extends('master')
@section('content')
<!-- Start Section Banner Area -->
<div class="section-banner bg-1">
    <div class="container">
        <div class="banner-spacing">
            <div class="section-info karir w-100">
                <h2 class="mb-3" data-aos="fade-up" data-aos-delay="100">Cari Karir</h2>
                {{-- <p class="title-anim">Kami berdedikasi untuk memberdayakan individu dan bisnis dengan solusi IT transformatif. Sebagai penyedia layanan teknologi inovatif terkemuka, kami berusaha untuk membantu klien kami menavigasi lanskap digital yang selalu berubah dan mencapai tujuan mereka dengan percaya diri.</p> --}}

                <div class="row mb-3">
                    <div class="col-7 mb-3 mb-lg-0">
                        <input type="text" name="posisi" id="" class="form-control" placeholder="cari berdasarkan posisi (Contoh: Designer, Engineer...)">
                    </div>
                    <div class="col-5 col-lg-3 mb-3 mb-lg-0">
                        <select name="departement" id="" class="form-control">
                            <option value="" disabled selected>Pilih Departement</option>
                            <option value="Manajer">Marketing</option>
                        </select>
                    </div>
                    <div class="col-12 col-lg-2">
                        <button class="btn btn-primary w-100 h-100">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Section Banner Area -->

<!-- Start About Us Area -->
<div class="about-us-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="card mb-3" style="border-radius: 10px;">
                    <div class="card-body p-0">
                        <h3 class="m-3">Posisi yang tersedia</h3>
                        <table id="table-karir" class="table table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Posisi</th>
                                    <th>Departement</th>
                                    <th>Location</th>
                                    <th width="4%"></th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- <tr>
                                    <td>Designer</td>
                                    <td>Marketing</td>
                                    <td>Jakarta</td>
                                    <td>
                                        <i class="fas fa-chevron-right"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Designer</td>
                                    <td>Marketing</td>
                                    <td>Jakarta</td>
                                    <td>
                                        <i class="fas fa-chevron-right"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Designer</td>
                                    <td>Marketing</td>
                                    <td>Jakarta</td>
                                    <td>
                                        <i class="fas fa-chevron-right"></i>
                                    </td>
                                </tr> --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End About Us Area -->


@endsection
