
<!doctype html>
<html class="no-js" lang="zxx">

<head>

    <!--========= Required meta tags =========-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Agent Biiler</title>

    <!--====== Favicon ======-->
    <link rel="shortcut icon" href="assets/img/logo/favicon1.jpg" type="images/x-icon">

    <!--====== CSS Here ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/lightcase.css">
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/ukit.css">
    <link rel="stylesheet" href="assets/css/odometer.min.css">
    <link rel="stylesheet" href="assets/css/main.css">

</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!--====== HEADER START ======-->
    <div id="sotcox-loadding" class="sotcox-loader">
        <div class="sotcox-spinner">
          <div class="bounce1"></div>
          <div class="bounce2"></div>
          <div class="bounce3"></div>
        </div>
      </div>
     <!--====== HEADER END ======-->

    <!--====== HEADER START ======-->
    <header class="sotcox-header pt-50 pb-50" data-uk-sticky="top: 250; animation: uk-animation-slide-top;">
        <div class="container-fluid sotcox-container__fluid">
            <div class="row">
                <div class="col-xl-10 col-lg-4 col-sm-6 col-7 align-self-center">
                    <div class="sotcox-logo-menu-wrapper">
                        <a href=" {{ route('utama.index')}}" class="sotcox-logo">
                            <img src="assets/img/logo/logo1.jpg" alt="LOGO">
                        </a>
                        <div class="sotcox-menu-wrapper">
                            <div class="sotcox-main-menu">
                                <nav id="sotcox-navbar">
                                    <ul>
                                        <li><a href="{{ route('utama.index')}}">Home</a></li>
                                        <li><a href="{{ route('about.index')}}">About Us</a></li>
                                        <li><a href="">Service</a></li>
                                        <li><a href="">Ketentuan Umum</a></li>
                                        <li><a href="">FAQ</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <a href="" class="sotcox-btn">Ceria Sejati <span></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-8 col-sm-6 col-5 align-self-center">
                    <div class="right-element">
                        <ul class="list-unstyled d-flex align-items-center">
                            <li data-search-trigger>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.7072 18.293L14.3651 12.9509C15.6143 11.3411 16.203 9.31564 16.0114 7.287C15.8197 5.25836 14.8621 3.37901 13.3336 2.03158C11.805 0.68414 9.82038 -0.0300859 7.78373 0.0343085C5.74708 0.0987029 3.81152 0.936876 2.37113 2.37819C0.93074 3.81949 0.0937985 5.75558 0.0307004 7.79227C-0.0323977 9.82896 0.683091 11.8131 2.0315 13.3409C3.37991 14.8686 5.25987 15.8249 7.28863 16.0153C9.31739 16.2056 11.3424 15.6156 12.9515 14.3654L18.2932 19.707C18.4818 19.8892 18.7344 19.9899 18.9966 19.9877C19.2588 19.9854 19.5096 19.8802 19.695 19.6948C19.8804 19.5094 19.9856 19.2586 19.9878 18.9964C19.9901 18.7342 19.8893 18.4816 19.7072 18.293ZM3.80777 12.293C2.82612 11.3115 2.21516 10.02 2.07899 8.63855C1.94282 7.2571 2.28987 5.87117 3.06101 4.71691C3.83214 3.56266 4.97965 2.71149 6.308 2.30846C7.63635 1.90542 9.06335 1.97544 10.3459 2.5066C11.6284 3.03775 12.687 3.99717 13.3415 5.22138C13.9959 6.44559 14.2056 7.85884 13.9348 9.22032C13.664 10.5818 12.9296 11.8073 11.8565 12.6879C10.7835 13.5686 9.43832 14.05 8.05017 14.05C6.45918 14.0491 4.93349 13.4173 3.80777 12.293Z" fill="#1B2E59"/>
                                    </svg>
                            </li>
                            <li class="sideinfo-trigger" data-sideinfo-trigger>
                                <span></span>
                                <span></span>
                                <span></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--====== HEADER END ======-->

    <!--====== OVERLAY START ======-->
    <div class="sotcox-overlay"></div>
    <!--====== OVERLAY END ======-->

    <!--====== SIDE INFO FOR MOBILE START ======-->
    <aside class="side-info-wrapper mm-only">
        <nav>
            <div class="nav" id="nav-tab" role="tablist">
                <a class="nav-link active" id="menu-tab-1-tab" data-bs-toggle="tab"
                    href="#menu-tab-1" role="tab" aria-controls="menu-tab-1"
                    aria-selected="true">Menu</a>
                <a class="nav-link" id="menu-tab-2-tab" data-bs-toggle="tab" href="#menu-tab-2"
                    role="tab" aria-controls="menu-tab-2" aria-selected="false">Info</a>
            </div>
        </nav>
        <div class="side-info__wrapper d-flex align-items-center justify-content-between">
            <div class="side-info__logo">
                <a href="">
                    <img src="assets/img/logo/logo.png" alt="logo">
                </a>
            </div>
            <div class="side-info__close">
                <a href="javascript:void(0);"><i class="far fa-times"></i></a>
            </div>
        </div>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="menu-tab-1" role="tabpanel"
                aria-labelledby="menu-tab-1-tab">
                <div class="search-box">
                    <form class="search-widget sotcox-input-field position-relative" action="blog.html" method="get">
                        <div>
                            <input type="search" value="" required="" name="s" placeholder="Search...">
                            <button type="submit"><i class="far fa-search"></i></button>
                        </div>
                    </form>
                </div>
                <div class="sotcox-mobile-menu"></div>
            </div>
            <div class="tab-pane fade" id="menu-tab-2" role="tabpanel"
                aria-labelledby="menu-tab-2-tab">
                <div class="side-info">
                    <div class="side-info__content mb-35">
                        <h4 class="title mb-10">About us</h4>
                        <p>Adalah Mitra dari Dealer PPOB.</p>
                        <a class="sotcox-btn sotcox-btn__small mt-20" href="">Contact us <span></span></a>
                    </div>
                    <div class="contact__info--wrapper mt-15">
                        <h4 class="title mb-15">Contact us</h4>
                        <ul class="contact__info list-unstyled">
                            <li>
                                <span><i class="fas fa-map-marker-alt"></i></span>
                                <p>Bowery St., New York, NY 10013, USA</p>
                            </li>
                            <li>
                                <span><i class="fas fa-phone"></i></span>
                                <p>+1255-568-6523</p>
                            </li>
                            <li>
                                <span><i class="fas fa-envelope-open-text"></i></span>
                                <p>information@gmail.com</p>
                            </li>
                        </ul>
                    </div>
                    <div class="sotcox-social-links mt-30">
                        <a href="#0"><i class="fab fa-facebook-f"></i></a>
                        <a href="#0"><i class="fab fa-twitter"></i></a>
                        <a href="#0"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#0"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <!--====== SIDE INFO FOR MOBILE END ======-->

    <!--====== SIDE INFO FOR DESKTOP START ======-->
    <aside class="side-info-wrapper show-all">
        <div class="side-info__wrapper d-flex align-items-center justify-content-between">
            <div class="side-info__logo">
                <a href="index.html">
                    <img src="assets/img/logo/logo.png" alt="logo">
                </a>
            </div>
            <div class="side-info__close">
                <a href="javascript:void(0);"><i class="far fa-times"></i></a>
            </div>
        </div>
        <div class="side-info">
            <div class="side-info__content mb-35">
                <h4 class="title mb-10">About us</h4>
                <p>Tentang Agent</p>
                <a class="sotcox-btn sotcox-btn__small mt-20" href="contact.html">Contact us <span></span></a>
            </div>
            <div class="contact__info--wrapper mt-15">
                <h4 class="title mb-15">Contact us</h4>
                <ul class="contact__info list-unstyled">
                    <li>
                        <span><i class="fas fa-map-marker-alt"></i></span>
                        <p>Bowery St., New York, NY 10013, USA</p>
                    </li>
                    <li>
                        <span><i class="fas fa-phone"></i></span>
                        <p>+1255-568-6523</p>
                    </li>
                    <li>
                        <span><i class="fas fa-envelope-open-text"></i></span>
                        <p>information@gmail.com</p>
                    </li>
                </ul>
            </div>
            <div class="sotcox-social-links mt-30">
                <a href="#0"><i class="fab fa-facebook-f"></i></a>
                <a href="#0"><i class="fab fa-twitter"></i></a>
                <a href="#0"><i class="fab fa-google-plus-g"></i></a>
                <a href="#0"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </aside>
    <!--====== SIDE INFO FOR DESKTOP END ======-->

       <!--====== HERO SECTION START ======-->
       <section class="sotcox-hero-section pb-90 pt-80">
        <div class="shape shape__1 position-absolute wow fadeInUp" data-wow-delay="300ms" data-wow-duration="800ms"><img src="assets/img/shapes/hero-shape-1.png" alt=""></div>
        <div class="shape shape__2 position-absolute wow fadeInUp" data-wow-delay="600ms" data-wow-duration="800ms"><img src="assets/img/shapes/hero-shape-2.png" alt=""></div>
        <div class="container">
            <div class="row flex-lg-row flex-md-column-reverse">
                <div class="col-xl-5 col-lg-5">
                    <div class="inner-content">
                        <h1 class="title wow fadeInUp" data-wow-delay="200ms" data-wow-duration="800ms">Solusi Topup dan Voucher Digital</h1>
                        <div class="inner-btns mt-50">
                            <a href="services.html" class="sotcox-btn wow fadeInUp" data-wow-delay="500ms" data-wow-duration="800ms">Our Service <span></span></a>
                            {{-- <div class="sotcox-video-wrapper wow fadeInUp" data-wow-delay="700ms" data-wow-duration="800ms">
                                <a href="//youtube.com/embed/4xe72U7mXNg?rel=0&controls=0&showinfo=0" data-rel="lightcase" class="sotcox-video-btn">
                                    <i class="fas fa-play"></i>
                                </a>
                                <span>video Presentation</span>
                            </div> --}}
                        </div>
                        <div class="sotcox-social-links mt-140">
                            <a href="#0" class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="800ms" target="_blank"><i class="fab fa-facebook-f"></i> <span>Facebook</span></a>
                            <a href="#0" class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="800ms" target="_blank"><i class="fab fa-youtube"></i> <span>Youtube</span></a>
                            <a href="#0" class="wow fadeInUp" data-wow-delay="600ms" data-wow-duration="800ms" target="_blank"><i class="fab fa-twitter"></i> <span>Twitter</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7">
                    <div class="inner-right">
                        <div class="review-wrapper">
                            <div class="item">
                                <div class="icon">
                                    <img src="assets/img/icons/growth.png" alt="">
                                </div>
                                <div class="content">
                                    <h6>Topup Game</h6>
                                    <p><i class="fas fa-star"></i> <span>4.9</span> (1520 Reviews)</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="content">
                                    <h6>Pembayaran</h6>
                                    <p><i class="fas fa-star"></i> <span>4.9</span> (15k Reviews)</p>
                                </div>
                            </div>
                        </div>
                        <div class="img-wrapper wow zoomIn" data-wow-delay="700ms" data-wow-duration="800ms">
                            <img src="assets/img/hero/89.jpeg" alt="">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--====== HERO SECTION END ======-->

    <!--====== CARD WITH ICON SECTION START ======-->
    <div class="sotcox-card-section theme-light-bg pt-130">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="sotcox-card-wrapper d-flex justify-content-between align-items-center">
                        <div class="sotcox-card-box wow fadeInUp" data-wow-delay="00ms" data-wow-duration="800ms">
                            <div class="icon">
                                <img src="assets/img/icons/card-icon-1.png" alt="">
                            </div>
                            <div class="content">
                                <h4 class="title">Mudah dan Aman</h4>
                            </div>
                            <div class="sotcox-dots">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <div class="sotcox-card-box sotcox-card-box__2 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="800ms">
                            <div class="icon">
                                <img src="assets/img/icons/card-icon-2.png" alt="">
                            </div>
                            <div class="content">
                                <h4 class="title">Transaksi Cepat, Hidup Lebih Praktis</h4>
                            </div>
                            <div class="sotcox-dots">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <div class="sotcox-card-box sotcox-card-box__3 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="800ms">
                            <div class="icon">
                                <img src="assets/img/icons/card-icon-3.png" alt="">
                            </div>
                            <div class="content">
                                <h4 class="title">Transaksi Kapan Saja, Di Mana Saja</h4>
                            </div>
                            <div class="sotcox-dots">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== CARD WITH ICON SECTION END ======-->

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

    <!--====== WORKFLOW SECTION START ======-->
    <div class="sotcox-workflow-section theme-light-bg pb-130 pt-125">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="sotcox-section-heading text-center mb-60">
                        <span class="sub-heading">Fitur Sistem</span>
                        <h2 class="heading">Sistem yang Powerfull <br>
                            Untuk transaksi</h2>
                    </div>
                </div>
            </div>
            <div class="row g-0 mt-none-40">
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt-40">
                    <div class="sotcox-workflow-box sotcox-workflow-box__1 text-center wow fadeInUp" data-wow-delay="0ms" data-wow-duration="800ms">
                        <div class="icon">
                            <img src="assets/img/icons/workflow-icon-1.png" alt="">
                            <span class="count">01</span>
                        </div>
                        <div class="content">
                            <h5 class="title">Inovatif</h5>
                            <p>Sistem yang sangat inovatif untuk transaksi PPOB kapan dan dimana saja</p>
                        </div>
                        <div class="sotcox-dots">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt-40 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="800ms">
                    <div class="sotcox-workflow-box sotcox-workflow-box__2 active text-center">
                        <div class="icon">
                            <img src="assets/img/icons/workflow-icon-2.png" alt="">
                            <span class="count">02</span>
                        </div>
                        <div class="content">
                            <h5 class="title">Digital Analysis</h5>
                            <p>Menganalisis data digital termasuk interaksi pada sistem, untuk mendapatkan Trend transaksi </p>
                        </div>
                        <div class="sotcox-dots">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt-40 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="800ms">
                    <div class="sotcox-workflow-box sotcox-workflow-box__3 text-center">
                        <div class="icon">
                            <img src="assets/img/icons/workflow-icon-3.png" alt="">
                            <span class="count">03</span>
                        </div>
                        <div class="content">
                            <h5 class="title">Marketing Research</h5>
                            <p>Pengumpulan, analisis, dan interpretasi data yang sistematis terkait pasar, konsumen, pesaing, dan lingkungan bisnis. </p>
                        </div>
                        <div class="sotcox-dots">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mt-40">
                    <div class="sotcox-workflow-box sotcox-workflow-box__4 text-center wow fadeInUp" data-wow-delay="600ms" data-wow-duration="800ms">
                        <div class="icon">
                            <img src="assets/img/icons/workflow-icon-4.png" alt="">
                            <span class="count">04</span>
                        </div>
                        <div class="content">
                            <h5 class="title">Product Creating</h5>
                            <p>Proses perencanaan, desain, pengujian, dan implementasi ide-ide untuk menciptakan produk yang memenuhi kebutuhan </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== WORKFLOW SECTION END ======-->

    <!--====== PROJECT SECTION START ======-->
    <div class="sotcox-project-section pt-130 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <div class="content-left-wrapper">
                        <div class="sotcox-section-heading">
                            <span class="sub-heading">Produk Kami</span>
                            <h2 class="heading mb-25">Produk-produk kami</h2>
                            <p>Berbagai macam produk yang telah kami sediakan dengan harga yang sangat bersaing</p>
                        </div>
                        <ul class="sotcox-project-filter list-unstyled d-flex align-items-center mt-35">
                            <li class="active" data-filter=".cat-1">Games</li>
                            <li data-filter=".cat-2">Pulsa</li>
                            <li data-filter=".cat-3">Topup</li>
                            <li data-filter=".cat-4">Token Listrik</li>
                            <li data-filter=".cat-5">Tagihan Listrik</li>
                        </ul>
                        {{-- <a href="" class="sotcox-btn mt-45"> <span></span></a> --}}
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="sotcox-project-wrapper">
                        <div class="row sotcox-project-grid mt-none-30">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 cat-1 cat-4 cat-3 mt-30 grid">
                                <div class="sotcox-project-item">
                                    <div class="thumb">
                                        <img src="assets/img/produk/MOBILE.png" alt="">
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="project-details.html">Mobile Legend</a></h4>
                                        <span class="cat">Games</span>
                                        <a href="" class="inline-btn">
                                            <i class="far fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 cat-2 cat-4 cat-3 mt-30 grid">
                                <div class="sotcox-project-item">
                                    <div class="thumb">
                                        <img src="assets/img/produk/IM3.png" alt="">
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="">Voucher Indosat</a></h4>
                                        <span class="cat">Pulsa dan Paket Data</span>
                                        <a href="" class="inline-btn">
                                            <i class="far fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 cat-4 cat-2 cat-3 mt-30 grid">
                                <div class="sotcox-project-item">
                                    <div class="thumb">
                                        <img src="assets/img/produk/TELKOMSEL.png" alt="">
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="">Voucher Telkomsel</a></h4>
                                        <span class="cat">Pulsa dan Paket Data</span>
                                        <a href="" class="inline-btn">
                                            <i class="far fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 cat-5 cat-4 cat-3 mt-30 grid">
                                <div class="sotcox-project-item">
                                    <div class="thumb">
                                        <img src="assets/img/produk/SHOPEEPAY.png" alt="">
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="">SHOPEE</a></h4>
                                        <span class="cat">Topup</span>
                                        <a href="" class="inline-btn">
                                            <i class="far fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== PROJECT SECTION END ======-->

    <!--====== WCU SECTION START ======-->
    <div class="sotcox-wcu-section theme-light-bg pt-125 pb-115">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="wcu-img-wrapper">
                        <img src="assets/img/produk/support.png" alt="">
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="sotcox-section-heading mb-65">
                        <span class="sub-heading">Support</span>
                        <h2 class="heading">Pelayanan Support <br> Tim Kami?</h2>
                    </div>
                    <div class="row mt-none-30">
                        <div class="col-md-6 mt-30">
                            <div class="sotcox-wcu-box wow fadeInUp" data-wow-delay="200ms" data-wow-duration="800ms">
                                <div class="icon">
                                    <img src="assets/img/icons/wcu-icon-1.png" alt="">
                                </div>
                                <div class="content">
                                    <h5 class="title">Full Time Support</h5>
                                    <p>Tim kami siap dalam mensupport kendala yang terjadi, untuk kelancaran transaksi</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mt-30">
                            <div class="sotcox-wcu-box wow fadeInUp" data-wow-delay="500ms" data-wow-duration="800ms">
                                <div class="icon">
                                    <img src="assets/img/icons/wcu-icon-2.png" alt="">
                                </div>
                                <div class="content">
                                    <h5 class="title">Cepat, Berkualitas</h5>
                                    <p>Tidak hanya siap siaga, tim support kami melayani dengan cepat serta kualitas pelayaran yang baik</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== WCU SECTION END ======-->

    <!--====== FAQ SECTION START ======-->
    <section class="sotcox-faq-section pt-130 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-xl-5">
                    <div class="left-wrapper">
                        <div class="sotcox-section-heading sotcox-section-heading__style-2 mb-60">
                            <span class="sub-heading">faq</span>
                            <h2 class="heading">Frequently asked questions</h2>
                        </div>
                        <div class="sotcox-faq-tab">
                            <nav>
                                <div class="nav d-block" role="tablist">
                                    <a class="nav-link active" id="faq-tab-1-tab" data-bs-toggle="tab" href="#faq-tab-1" role="tab" aria-controls="faq-tab-1" aria-selected="true">Registrasi </a>
                                    <a class="nav-link" id="faq-tab-2-tab" data-bs-toggle="tab" href="#faq-tab-2" role="tab" aria-controls="faq-tab-2" aria-selected="false">Akun </a>
                                    <a class="nav-link" id="faq-tab-3-tab" data-bs-toggle="tab" href="#faq-tab-3" role="tab" aria-controls="faq-tab-3" aria-selected="false">Voucher </a>
                                    <a class="nav-link" id="faq-tab-4-tab" data-bs-toggle="tab" href="#faq-tab-4" role="tab" aria-controls="faq-tab-4" aria-selected="false">Topup </a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="tab-content" id="faq-tabContent">
                        <div class="tab-pane sotcox-faq-wrapper fade active show" id="faq-tab-1" role="tabpanel" aria-labelledby="faq-tab-1-tab">
                            <div class="stocox-faq-wrapper faq__wrapper faq__wrapper--style-2">
                                <div class="accordion" id="accordionFaq-1">
                                    <div class="accordion-item faq__item faq__item--style-2">
                                        <h2 class="accordion-header title" id="heading-1-1">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1-1" aria-expanded="true" aria-controls="collapse-1-1">
                                                Apakah saya bisa mendaftarkan satu nomor hp untuk beberapa akun?
                                            </button>
                                        </h2>
                                        <div id="collapse-1-1" class="accordion-collapse collapse show" aria-labelledby="heading-1-1" data-bs-parent="#accordionFaq-1">
                                            <div class="accordion-body content">
                                                <p>Tidak, satu nomor handphone hanya digunakan hanya untuk satu akun</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item faq__item faq__item--style-2">
                                        <h2 class="accordion-header title" id="heading-1-2">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1-2" aria-expanded="false" aria-controls="collapse-1-2">
                                                Apakah bisa mendaftarkan satu email untuk beberapa akun?
                                            </button>
                                        </h2>
                                        <div id="collapse-1-2" class="accordion-collapse collapse" aria-labelledby="heading-1-2" data-bs-parent="#accordionFaq-1">
                                            <div class="accordion-body content">
                                                <p>Tidak, satu email hanya digunakan hanya untuk satu akun</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item faq__item faq__item--style-2">
                                        <h2 class="accordion-header title" id="heading-1-3">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1-3" aria-expanded="false" aria-controls="collapse-1-3">
                                                Apa bisa mendaftar tanpa nomor Handphone?
                                            </button>
                                        </h2>
                                        <div id="collapse-1-3" class="accordion-collapse collapse" aria-labelledby="heading-1-3" data-bs-parent="#accordionFaq-1">
                                            <div class="accordion-body content">
                                                <p>Syarat mendaftar adalah dengan memakai nomor handphone</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item faq__item faq__item--style-2">
                                        <h2 class="accordion-header title" id="heading-1-4">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1-4" aria-expanded="false" aria-controls="collapse-1-4">
                                                Dimana saya bisa melakukan pendaftaran?
                                            </button>
                                        </h2>
                                        <div id="collapse-1-4" class="accordion-collapse collapse" aria-labelledby="heading-1-4" data-bs-parent="#accordionFaq-1">
                                            <div class="accordion-body content">
                                                <p>Untuk pendaftaran silahkan bisa melalui browser, pilih akun, dan pilih register, isi form pendaftaran</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane sotcox-faq-wrapper fade" id="faq-tab-2" role="tabpanel" aria-labelledby="faq-tab-2-tab">
                            <div class="stocox-faq-wrapper faq__wrapper faq__wrapper--style-2">
                                <div class="accordion" id="accordionFaq-2">
                                    <div class="accordion-item faq__item faq__item--style-2">
                                        <h2 class="accordion-header title" id="heading-2-1">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2-1" aria-expanded="true" aria-controls="collapse-2-1">
                                                Bagaimana cara mengganti password akun saya?
                                            </button>
                                        </h2>
                                        <div id="collapse-2-1" class="accordion-collapse collapse show" aria-labelledby="heading-2-1" data-bs-parent="#accordionFaq-2">
                                            <div class="accordion-body content">
                                                <p>Pilih tombol Akun, pilih Lost Your Password, halaman konfirmasi email unttk akun terdaftar. Lalu kirim tautan reset</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item faq__item faq__item--style-2">
                                        <h2 class="accordion-header title" id="heading-2-2">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2-2" aria-expanded="false" aria-controls="collapse-2-2">
                                                Apakah saya bisa menghapus akun saya?
                                            </button>
                                        </h2>
                                        <div id="collapse-2-2" class="accordion-collapse collapse" aria-labelledby="heading-2-2" data-bs-parent="#accordionFaq-2">
                                            <div class="accordion-body content">
                                                <p>Anda dapat mengajukan permintaan untuk menghapus akun Anda dengan cara mengirimkan email permintaan penghapusan akun Dvi247 Anda ke care@Dvi247.com menggunakan email yang terdaftar di www.dvi247.com</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item faq__item faq__item--style-2">
                                        <h2 class="accordion-header title" id="heading-2-3">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2-3" aria-expanded="false" aria-controls="collapse-2-3">
                                                Mengapa akun saya diblokir?
                                            </button>
                                        </h2>
                                        <div id="collapse-2-3" class="accordion-collapse collapse" aria-labelledby="heading-2-3" data-bs-parent="#accordionFaq-2">
                                            <div class="accordion-body content">
                                                <p>Di dalam satu akun hanya diperbolehkan menggunakan satu email dan satu nomor hp yang valid. Pemblokiran akun dilakukan atas alasan keamanan data pribadi dan juga data pribadi Anda sebagai pelanggan</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item faq__item faq__item--style-2">
                                        <h2 class="accordion-header title" id="heading-2-4">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2-4" aria-expanded="false" aria-controls="collapse-2-4">
                                                Bagaimana cara mengganti password akun saya?
                                            </button>
                                        </h2>
                                        <div id="collapse-2-4" class="accordion-collapse collapse" aria-labelledby="heading-2-4" data-bs-parent="#accordionFaq-2">
                                            <div class="accordion-body content">
                                                <p>Apabila melalui desktop, silakan klik menu ikon user pada pojok kanan atas situs, lalu pilih menu 'Informasi Akun', kemudian klik menu 'Ubah Password'. Apabila melalui aplikasi Dvi247, silakan klik menu ikon pada pojok kanan bawah situs, lalu pilih menu 'Informasi Akun' dan klik 'Edit'. Untuk mengubah password Anda, masukkan password lama Anda ke kolom yang tersedia dan juga password baru yang diinginkan</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item faq__item faq__item--style-2">
                                        <h2 class="accordion-header title" id="heading-2-5">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2-5" aria-expanded="false" aria-controls="collapse-2-5">
                                                Saya lupa dengan password akun Dvi247 saya, bagaimana cara agar saya bisa mendapat password saya kembali?
                                            </button>
                                        </h2>
                                        <div id="collapse-2-5" class="accordion-collapse collapse" aria-labelledby="heading-2-5" data-bs-parent="#accordionFaq-2">
                                            <div class="accordion-body content">
                                                <p>Pada situs atau aplikasi, pilih menu 'Sign In', kemudian pilih opsi 'Lupa Password Masuk ke Dvi247?' yang ada di bagian bawah kotak Sign In. Kemudian, Anda perlu memasukkan alamat email yang Anda gunakan saat registrasi. Anda akan dikirimi email konfirmasi untuk mereset atau mengatur ulang password akun Dvi247 Anda. Masukkan password atau kata sandi baru yang Anda inginkan, kemudian klik 'Ubah Kata Sandi.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane sotcox-faq-wrapper fade" id="faq-tab-3" role="tabpanel" aria-labelledby="faq-tab-3-tab">
                            <div class="stocox-faq-wrapper faq__wrapper faq__wrapper--style-2">
                                <div class="accordion" id="accordionFaq-3">
                                    <div class="accordion-item faq__item faq__item--style-2">
                                        <h2 class="accordion-header title" id="heading-3-1">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3-1" aria-expanded="true" aria-controls="collapse-3-1">
                                                Voucher Game Apa saja yang di jual?
                                            </button>
                                        </h2>
                                        <div id="collapse-3-1" class="accordion-collapse collapse show" aria-labelledby="heading-3-1" data-bs-parent="#accordionFaq-3">
                                            <div class="accordion-body content">
                                                <p>Voucher Game Terbaik untuk Semua Platform! Nikmati berbagai game seru dan populer dengan voucher kami yang bisa digunakan untuk Mobile dan PC Game. Pilihan game yang tersedia meliputi Mobile Legends, Roblox (termasuk game favorit seperti Blox Fruits Roblox, Anime Defenders Roblox, Pet Simulator 99!, Fruit Battlegrounds Roblox, dan Trails of Cold Steel
                                                    ), serta PUBG Mobile, Growtopia, Garena Free Fire, Genshin Impact, Honkai: Star Rail, Honor of Kings, Clash of Clans, Ninja Legends Roblox, A Universal Time Roblox, Blade Ball Roblox, Toram Online, dan Anime Vanguard Roblox. Kami juga menawarkan voucher untuk game di Steam.
                                                    
                                                    Dapatkan pengalaman bermain terbaik dengan pilihan voucher ini yang cocok untuk semua jenis gamer!</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item faq__item faq__item--style-2">
                                        <h2 class="accordion-header title" id="heading-3-2">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3-2" aria-expanded="false" aria-controls="collapse-3-2">
                                                Bagaimana Cara membeli Voucher?
                                            </button>
                                        </h2>
                                        <div id="collapse-3-2" class="accordion-collapse collapse" aria-labelledby="heading-3-2" data-bs-parent="#accordionFaq-3">
                                            <div class="accordion-body content">
                                                <p>Untuk membeli voucher game, cukup login ke sistem kami, lalu pilih voucher game favorit Anda dari berbagai pilihan yang tersedia. Nikmati pengalaman belanja yang mudah dan cepat, serta dapatkan voucher game untuk game favorit Anda hanya dengan beberapa klik!</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item faq__item faq__item--style-2">
                                        <h2 class="accordion-header title" id="heading-3-3">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3-3" aria-expanded="false" aria-controls="collapse-3-3">
                                            Pembayaran pembelian Voucher ada apa saja?
                                            </button>
                                        </h2>
                                        <div id="collapse-3-3" class="accordion-collapse collapse" aria-labelledby="heading-3-3" data-bs-parent="#accordionFaq-3">
                                            <div class="accordion-body content">
                                                <p>Kami menyediakan berbagai metode pembayaran yang mudah dan praktis, termasuk QRIS, Mandiri VA, BNI VA, BRI VA, Permata Bank VA, Bank Sampoerna VA, Bank Sinarmas, dan BCA VA. Pilih metode pembayaran yang paling nyaman untuk Anda!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane sotcox-faq-wrapper fade" id="faq-tab-4" role="tabpanel" aria-labelledby="faq-tab-4-tab">
                            <div class="stocox-faq-wrapper faq__wrapper faq__wrapper--style-2">
                                <div class="accordion" id="accordionFaq-4">
                                    <div class="accordion-item faq__item faq__item--style-2">
                                        <h2 class="accordion-header title" id="heading-4-1">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4-1" aria-expanded="true" aria-controls="collapse-4-1">
                                            Bagaimana Cara Topup?
                                            </button>
                                        </h2>
                                        <div id="collapse-4-1" class="accordion-collapse collapse show" aria-labelledby="heading-4-1" data-bs-parent="#accordionFaq-4">
                                            <div class="accordion-body content">
                                                <p>Untuk melakukan top-up dengan mudah, cukup ikuti langkah-langkah sederhana berikut. Pertama, login ke sistem kami menggunakan akun Anda. Setelah berhasil masuk, pilih layanan yang ingin Anda top-up, mulai dari pulsa, token PLN, hingga voucher game atau layanan favorit lainnya. Setelah menentukan pilihan, lanjutkan dengan memilih metode pembayaran yang sesuai, seperti QRIS, transfer bank, atau metode lainnya. Proses top-up akan segera diproses, dan Anda bisa langsung menikmati layanan yang telah diisi. Mudah, cepat, dan praktis!</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item faq__item faq__item--style-2">
                                        <h2 class="accordion-header title" id="heading-4-2">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4-2" aria-expanded="false" aria-controls="collapse-4-2">
                                                Bisa Topup apa saja?
                                            </button>
                                        </h2>
                                        <div id="collapse-4-2" class="accordion-collapse collapse" aria-labelledby="heading-4-2" data-bs-parent="#accordionFaq-4">
                                            <div class="accordion-body content">
                                                <p>Platform kami menghadirkan kemudahan bagi Anda untuk melakukan top-up dan pembelian voucher dengan berbagai pilihan layanan. Mulai dari pulsa dan paket data untuk operator seperti Axis, Telkomsel, dan Tri, hingga token listrik PLN yang dapat diisi kapan saja. Untuk kemudahan transportasi dan perjalanan, tersedia Voucher Gojek, RedDoorz, Traveloka, dan OYO. Tidak ketinggalan voucher gaya hidup seperti McDonald's, Starbucks, hingga hiburan di CGV Cinemas.
                                                    <br>
                                                    Bagi Anda yang ingin memulai investasi, kami menyediakan akses ke Lakuemas, Pluang, dan Bibit. Anda juga bisa menambah Airline Miles untuk menikmati fasilitas penerbangan, serta menggunakan voucher SPBU Shell dan Pertamina untuk kebutuhan bahan bakar Anda. Bahkan, layanan edukasi seperti Turnitin hingga Digi Malaysia juga tersedia. Dengan platform ini, segala kebutuhan digital Anda bisa terpenuhi dengan cepat, mudah, dan praktis</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item faq__item faq__item--style-2">
                                        <h2 class="accordion-header title" id="heading-4-3">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4-3" aria-expanded="false" aria-controls="collapse-4-3">
                                                Berapa lama Topup digital?
                                            </button>
                                        </h2>
                                        <div id="collapse-4-3" class="accordion-collapse collapse" aria-labelledby="heading-4-3" data-bs-parent="#accordionFaq-4">
                                            <div class="accordion-body content">
                                                <p>Secara keseluruhan, kebanyakan top-up digital dapat dilakukan dalam waktu instan, tetapi ada kalanya pemrosesan bank dapat memakan waktu lebih lama. Jika Anda mengalami keterlambatan, disarankan untuk memeriksa status transaksi atau menghubungi layanan pelanggan untuk mendapatkan bantuan lebih lanjut</p>
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
    </section>
    <!--====== FAQ SECTION END ======-->

    <!--====== ACHIVEMENT SECTION START ======-->
    <div class="sotcox-achivement-section theme-light-bg pt-130 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-10 col-md-12 align-self-center">
                    <div class="sotcox-section-heading sotcox-section-heading__style-2">
                        <span class="sub-heading">Ketentuan Umum</span>
                        <h2 class="heading mb-20">Ketentuan Kebijakan</h2>
                        <div class="stocox-faq-wrapper faq__wrapper">
                            <div class="accordion" id="accordionFaq">
                                <div class="accordion-item faq__item">
                                    <h2 class="accordion-header title" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Saya kelebihan/kekurangan membayar transaksi, apa yang harus dilakukan?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionFaq">
                                        <div class="accordion-body content">
                                            <p>Transaksi Anda akan gagal apabila membayar tidak sesuai dengan total order. Untuk itu, Anda bisa mengajukan refund ke tim Customer Service melalui email ke care@dvi247.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item faq__item">
                                    <h2 class="accordion-header title" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Apakah bisa mengajukan refund transaksi?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionFaq">
                                        <div class="accordion-body content">
                                            <p>Anda hanya bisa mengajukan refund transaksi apabila mengalami kondisi-kondisi berikut ini:

                                                Nomor handphone/telepon, nomor pelanggan, atau nomor meteran listrik tidak valid sehingga menyebabkan transaksi gagal pada pihak operator, pembayaran transaksi yang tidak sesuai dengan total order
                                                Pengajuan refund tidak berlaku untuk hal-hal berikut ini:
                                                
                                                Adanya kelalaian atau kesalahan dalam menginput data seperti nomor handphone, nomor meteran listrik, nomor BPJS, nomor Telkom/Indihome, nomor tagihan cicilan multifinance, namun status transaksi di Dvi247 telah Berhasil, maka dana tidak dapat direfund, tidak ditemukannya pembayaran transaksi dari pelanggan </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item faq__item">
                                    <h2 class="accordion-header title" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Minimum Pembayaran Transaksi di Dvi247
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionFaq">
                                        <div class="accordion-body content">
                                            <p>Va Semua Bank, BNI VA, Mandiri VA, minimum total order sebesar 25.000,-

                                                Va BCA minimum total order sebesar 100.000,-
                                                
                                                Pukul 21:00-02:00 WIB BCA dalam proses Cut Off/Maintenance setiap hari nya, sehingga pembayaran yang di lakukan selama proses Cut Off akan terproses setelah Cut Off selesai.
                                                
                                                Pastikan pembayaran Anda sesuai total tagihan yang kami informasikan agar dapat terverifikasi otomatis.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="sotcox-achivement-boxs sotcox-achivement-boxs__style-2 ml-100">
                        <div class="box-item box-item__style-2 active">
                            <div class="icon">
                                <img src="assets/img/icons/achivement-2.png" alt="">
                            </div>
                            <div class="content">
                                <h2 class="title d-flex align-items-end justify-content-center mt-30">
                                    <span class="odometer" data-count="3,860">00</span>
                                    <span class="sign">+</span>
                                </h2>
                                <p>Satisfied Agent</p>
                            </div>
                            <div class="shape"><img src="assets/img/shapes/achivement-shape.png" alt=""></div>
                        </div>
                        <div class="box-item box-item__style-2">
                            <div class="icon">
                                <img src="assets/img/icons/achivement-1.png" alt="">
                            </div>
                            <div class="content">
                                <h2 class="title d-flex align-items-end justify-content-center mt-30">
                                    <span class="odometer" data-count="8,550">00</span>
                                    <span class="sign">+</span>
                                </h2>
                                <p>Transaksi Completed</p>
                            </div>
                        </div>
                        <div class="box-item box-item__style-2">
                            <div class="icon">
                                <img src="assets/img/icons/achivement-3.png" alt="">
                            </div>
                            <div class="content">
                                <h2 class="title d-flex align-items-end justify-content-center mt-30">
                                    <span class="odometer" data-count="180">00</span>
                                    <span class="sign">+</span>
                                </h2>
                                <p>Bands Joined</p>
                            </div>
                        </div>
                        <div class="box-item box-item__style-2">
                            <div class="icon">
                                <img src="assets/img/icons/achivement-4.png" alt="">
                            </div>
                            <div class="content">
                                <h2 class="title d-flex align-items-end justify-content-center mt-30">
                                    <span class="odometer" data-count="90">00</span>
                                    <span class="sign">+</span>
                                </h2>
                                <p>Team Member</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== ACHIVEMENT SECTION END ======-->

    <!--====== FOOTER START ======-->
    <footer class="sotcox-footer theme-light-bg pt-95">
        <div class="sotcox-footer-widgets">
            <div class="container">
                <div class="row mt-none-30">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 sotcox-custom-col mt-30">
                        <div class="widget">
                            <div class="about-widget">
                                <a href="{{ route('utama.index')}}" class="sotcox-footer-logo mb-35">
                                    <img src="assets/img/logo/logo1.jpg" alt="">
                                </a>
                                <p><i class="far fa-map-marker-alt"></i> Mitra PPOB</p>
                                {{-- <p><i class="far fa-envelope"></i> Sotcoxinfo@gmail.com</p> --}}
                                <div class="sotcox-social-links mt-40">
                                    <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#0"><i class="fab fa-twitter"></i></a>
                                    <a href="#0"><i class="fab fa-instagram"></i></a>
                                    <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 sotcox-custom-col mt-30">
                        <div class="widget">
                            <h3 class="widget-title">Menu</h3>
                            <ul>
                                <li><a href="">Home</a></li>
                                <li><a href="">About Us</a></li>
                                <li><a href="">Services</a></li>
                                <li><a href="">Ketentuan Umum</a></li>
                                <li><a href="">Faq</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 sotcox-custom-col mt-30">
                        <div class="widget">
                            <h3 class="widget-title">Download</h3>
                            <a href="https://play.google.com/store" target="_blank">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg" alt="Download on Google Play" style="width: 150px; margin-top: 10px;">
                            </a>
                            
                            <!-- Ikon media sosial mendatar -->
                            <div class="sotcox-social-links mt-40">
                                <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                <a href="#0"><i class="fab fa-twitter"></i></a>
                                <a href="#0"><i class="fab fa-instagram"></i></a>
                                <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="sotcox-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <p>Copyright &copy; <span id="copyright-date"></span> PT Dinamika Mitra Terdepan, All Rights Reserved.</p>
                    </div>
                    <div class="col-md-4">
                        <div class="sotcox-backtotop">
                            <button data-sotcox-backtotop><i class="far fa-angle-up"></i> Go On Top</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--====== FOOTER END ======-->

    <!--========= JS Here =========-->
    <script src="assets/js/jquery-3.7.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.meanmenu.min.js"></script>
    <script src="assets/js/uikit.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/lightcase.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/waypoint.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/js-jquery.knob.js"></script>
    <script src="assets/js/js-jquery.appear.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>