@extends('layouts.main')
@section('inivaluenya')
    

    <!--====== CARD WITH ICON SECTION START ======-->
    <div class="sotcox-about-section theme-light-bg pt-120 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-img-wrapper">
                        <img src="assets/img/hero/service.jpeg" alt="">
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-content-wrapper pl-80">
                        <div class="sotcox-section-heading">
                            <span class="sub-heading">Service</span>
                            <h2 class="heading mb-30">Temukan Kemudahan Bertransaksi Digital.</h2>
                            <p>Didirikan pada tahun 2023 dan memiliki visi kemudahan dalam bertransaksi berbagai produk dan layanan. Kami juga berkomitmen untuk:</p>
                        </div>
                        <ul class="featured-lists list-unstyled mt-30">
                            <li> <i class="fas fa-circle-notch"></i> Meningkatkan Penjualan.</li>
                            <li><i class="fas fa-circle-notch"></i> Loyalitas terhadap Agent</li>
                            <li><i class="fas fa-circle-notch"></i> Menjangkau lapisan Msayarakat </li>
                            <li><i class="fas fa-circle-notch"></i> Inovasi Sistem </li>
                            <li><i class="fas fa-circle-notch"></i> Transparasi harga dan biaya produk</li>
                        </ul>
                        <a href="about.html" class="sotcox-btn mt-35">more about us <span></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== CARD WITH ICON SECTION END ======-->

    <!--====== SERVICE SECTION START ======-->
    <div class="sotcox-service-section pt-125 pb-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="sotcox-section-heading text-center mb-60">
                        <span class="sub-heading">our services</span>
                        <h2 class="heading">Solusi untuk bisnis pembayaran</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="sotcox-service-wrapper owl-carousel sotcox-slide-nav" data-service-slider>
                        <div class="sotcox-service-item">
                            <div class="icon">
                                <img src="assets/img/icons/service-icon-1.png" alt="">
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="">Produk</a></h4>
                                <a href="" class="sotcox-inline-btn">
                                    <i class="far fa-arrow-right"></i>
                                    <i class="far fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="sotcox-service-item">
                            <div class="icon">
                                <img src="assets/img/icons/service-icon-2.png" alt="">
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="s">IT Managemen</a></h4>
                                <a href="" class="sotcox-inline-btn">
                                    <i class="far fa-arrow-right"></i>
                                    <i class="far fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="sotcox-service-item">
                            <div class="icon">
                                <img src="assets/img/icons/service-icon-3.png" alt="">
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="service-details.html">Data Transaksi</a></h4>
                                <a href="service-details.html" class="sotcox-inline-btn">
                                    <i class="far fa-arrow-right"></i>
                                    <i class="far fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="sotcox-service-item">
                            <div class="icon">
                                <img src="assets/img/icons/service-icon-4.png" alt="">
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="">Keamanan Transaksi</a></h4>
                                <a href="" class="sotcox-inline-btn">
                                    <i class="far fa-arrow-right"></i>
                                    <i class="far fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="sotcox-service-item">
                            <div class="icon">
                                <img src="assets/img/icons/service-icon-5.png" alt="">
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="">Inovasi</a></h4>
                                <a href="" class="sotcox-inline-btn">
                                    <i class="far fa-arrow-right"></i>
                                    <i class="far fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-xl-12 text-center">
                    <a href="about.html" class="sotcox-btn mt-60">view all services <span></span></a>
                </div> --}}
            </div>
        </div>
    </div>
    <!--====== SERVICE SECTION END ======-->

    
@endsection