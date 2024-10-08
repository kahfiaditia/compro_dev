@extends('layouts.main')
@section('inivaluenya')
    

    @include('serpihan.service')

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