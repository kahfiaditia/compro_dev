
<!doctype html>
<html class="no-js" lang="zxx">

<head>

    <!--========= Required meta tags =========-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Agent Biller</title>

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

    @include('layouts.menu')

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
                    <img src="assets/img/logo/logo1.jpg" alt="logo">
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
                        {{-- <a class="sotcox-btn sotcox-btn__small mt-20" href="">Contact us <span></span></a> --}}
                    </div>
                    <div class="contact__info--wrapper mt-15">
                        <h4 class="title mb-15">Contact us</h4>
                        <ul class="contact__info list-unstyled">
                            {{-- <li>
                                <span><i class="fas fa-map-marker-alt"></i></span>
                                <p>Bowery St., New York, NY 10013, USA</p>
                            </li>
                            <li>
                                <span><i class="fas fa-phone"></i></span>
                                <p>+1255-568-6523</p>
                            </li> --}}
                            <li>
                                <span><i class="fas fa-envelope-open-text"></i></span>
                                <p>information@delaerppob.com</p>
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
                    <img src="assets/img/logo/logo1.jpg" alt="logo">
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
                {{-- <a class="sotcox-btn sotcox-btn__small mt-20" href="">Contact us <span></span></a> --}}
            </div>
            <div class="contact__info--wrapper mt-15">
                <h4 class="title mb-15">Contact us</h4>
                <ul class="contact__info list-unstyled">
                    {{-- <li>
                        <span><i class="fas fa-map-marker-alt"></i></span>
                        <p>Bowery St., New York, NY 10013, USA</p>
                    </li> --}}
                    {{-- <li>
                        <span><i class="fas fa-phone"></i></span>
                        <p>+1255-568-6523</p>
                    </li> --}}
                    <li>
                        <span><i class="fas fa-envelope-open-text"></i></span>
                        <p>information@delaerppob.com</p>
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

    @include('layouts.banner')

    @yield('inivaluenya')


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