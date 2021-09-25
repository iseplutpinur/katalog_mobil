<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $title_page; ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.html">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>assets/growbiz/img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/growbiz/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/growbiz/css/swiper-bundle.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/growbiz/css/animate.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/growbiz/css/custom-animation.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/growbiz/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/growbiz/css/odometer-theme-default.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/growbiz/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/growbiz/css/meanmenu.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/growbiz/css/flaticon.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/growbiz/css/main.css">
</head>

<body>
    <!-- header area start  -->
    <header>
        <div class="header__top d-none d-md-block header__top-2">
            <div class="container-fluid">
                <div class="row d-flex justify-content-end">
                    <div class="col-lg-9 col-md-8">
                        <div class="grb__cta f-right header-cta st-2">
                            <ul>
                                <li class="d-none">
                                    <div class="cta__icon">
                                        <span><i class="fas fa-phone-alt"></i></span>
                                    </div>
                                    <div class="cta__content">
                                        <p>Call Us:</p>
                                        <span><a href="tel:(555)674890556">(555) 674 890 556</a></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="cta__icon">
                                        <span><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <div class="cta__content">
                                        <p>Mail Us:</p>
                                        <span><a href="mailto:someone@growbiz.com">someone@growbiz.com</a></span>
                                    </div>
                                </li>
                                <li>
                                    <div class="cta__icon">
                                        <span><i class="fas fa-clock"></i></span>
                                    </div>
                                    <div class="cta__content">
                                        <p>Service Hours</p>
                                        <span>9:30 AM - 6:30 PM</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- <div class="col-lg-3 col-md-4">
                        <div class="grb__social f-right st-2">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                            <svg class="social-bg-1" xmlns="http://www.w3.org/2000/svg" width="280.537" height="70.101"
                                viewBox="0 0 280.537 70.101">
                                <path id="Path_2990" data-name="Path 2990"
                                    d="M-2528,1049.1v-45a25,25,0,0,1,25-25h195v70Zm220-70.063h53.591c-49.1,1.284-53.591,35.063-53.591,35.063Zm60.5.026h0Zm0,0h0Zm-.009,0h0Zm-.017,0h0Zm-.009,0h0Zm0,0h0Zm0,0h0Zm-.016,0h0Zm-.025,0h0Zm-.01,0h0Zm-.047,0h0Zm-.005,0h0Zm-.015,0h0Zm-.01,0h0Zm0,0h0Zm-.132,0,.132,0Zm0,0h0Zm-.094,0,.094,0Zm-.013,0h0Zm-.061,0,.061,0Zm-.039,0h0Zm-.038,0h0Zm-.245-.006h-.251c-.412-.011-.125,0,.163,0l.373.01Zm-.011,0h0Zm-.024,0h0Zm-.115,0h0Zm.335.008h0Zm-.087,0,.087,0Zm-.013,0h0Zm-.084,0,.084,0Zm0,0h0Zm-.085,0h0Zm-.12,0h0Zm-.046,0h-5.863c1.889-.049,3.839-.051,5.863,0Z"
                                    transform="translate(2528 -979)" fill="#ffc400" />
                            </svg>

                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="header__main header-sticky header-main-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-2 col-lg-3 col-8">
                        <div class="logo">
                            <a class="logo-text-white" href="<?= base_url() ?>home"><img src="<?= base_url() ?>assets/growbiz/img/logo/logo-orange.png" alt=""></a>
                            <a class="logo-text-black" href="<?= base_url() ?>home"><img src="<?= base_url() ?>assets/growbiz/img/logo/logo-text-black.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-9 col-4">
                        <div class="header__menu-area f-right">
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li><a href="<?= base_url() ?>home">Home</a></li>
                                        <li><a href="<?= base_url() ?>/produk">NEW XPANDER</a></li>
                                        <li><a href="<?= base_url() ?>/produk">NEW PAJERO SPORT</a></li>
                                        <li><a href="<?= base_url() ?>/produk">XPANDER CROSS</a></li>
                                        <li><a href="<?= base_url() ?>/produk">ECLIPSE CROSS</a></li>
                                        <li><a href="<?= base_url() ?>katalog">KATALOG PROMO</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="header__search">
                                <!-- <a class="search-btn nav-search search-trigger d-none d-sm-inline-block" href="#"><i
                                        class="fal fa-search"></i></a> -->
                                <a class="side-toggle d-lg-none" href="javascript:void(0)"><i class="fal fa-bars"></i></a>
                            </div>
                            <div class="header__btn d-none">
                                <a href="#" class="grb-btn">Get Reserved<i class="fas fa-arrow-right"></i></a>
                            </div>
                            <ul class="menu-cta-2 d-none d-xl-inline-block">
                                <li class="">
                                    <div class="cta__icon">
                                        <span><i class="fas fa-phone-alt"></i></span>
                                    </div>
                                    <div class="cta__content">
                                        <p>Call For Estimate</p>
                                        <span><a href="">0812-3505-5522</a></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header area end -->
    <!-- side toggle start  -->
    <div class="fix">
        <div class="side-info">
            <div class="side-info-content">
                <div class="offset-widget offset-logo mb-30 pb-20">
                    <div class="row align-items-center">
                        <div class="col-9"><a href="<?= base_url() ?>home"><img src="<?= base_url() ?>assets/growbiz/img/logo/logo.png" alt="Logo"></a>
                        </div>
                        <div class="col-3 text-end"><button class="side-info-close"><i class="fal fa-times"></i></button>
                        </div>
                    </div>
                </div>
                <div class="mobile-menu d-lg-none"></div>
                <!-- <div class="offset-widget offset_searchbar mb-30">
                    <form method="get" action="#">
                        <div class="offset_search_content">
                            <input type="search" placeholder="What are you searching for?">
                            <button type="submit" class="offset_search_button"><i class="fal fa-search"></i></button>
                        </div>
                    </form>
                </div> -->

                <div class="offset-widget mb-40 d-none d-lg-block">
                    <div class="info-widget">
                        <h4 class="offset-title mb-20 d-none">About Us</h4>
                        <p class="mb-30">But I must explain to you how all this mistaken idea of
                            denouncing pleasure and
                            praising pain
                            was born and will give you a complete account of the system and expound the actual teachings
                            of the great
                            explore</p>
                        <a href="#" class="c-btn btn-round-02 d-none">Contact Us</a>
                    </div>
                </div>

                <div class="row side-gallery gx-4">
                    <div class="col-4 mb-20">
                        <div class="side-image">
                            <a class="popup-image" href="<?= base_url() ?>assets/growbiz/img/portfolio/pm1.jpg"><img src="<?= base_url() ?>assets/growbiz/img/portfolio/pm1.jpg" alt="sidebar-img"></a>
                        </div>
                    </div>
                    <div class="col-4 mb-20">
                        <div class="side-image">
                            <a class="popup-image" href="<?= base_url() ?>assets/growbiz/img/portfolio/pm2.jpg"><img src="<?= base_url() ?>assets/growbiz/img/portfolio/pm2.jpg" alt="sidebar-img"></a>
                        </div>
                    </div>
                    <div class="col-4 mb-20">
                        <div class="side-image">
                            <a class="popup-image" href="<?= base_url() ?>assets/growbiz/img/portfolio/pm3.jpg"><img src="<?= base_url() ?>assets/growbiz/img/portfolio/pm3.jpg" alt="sidebar-img"></a>
                        </div>
                    </div>
                    <div class="col-4 mb-20">
                        <div class="side-image">
                            <a class="popup-image" href="<?= base_url() ?>assets/growbiz/img/portfolio/pm4.jpg"><img src="<?= base_url() ?>assets/growbiz/img/portfolio/pm4.jpg" alt="sidebar-img"></a>
                        </div>
                    </div>
                    <div class="col-4 mb-20">
                        <div class="side-image">
                            <a class="popup-image" href="<?= base_url() ?>assets/growbiz/img/portfolio/pm5.jpg"><img src="<?= base_url() ?>assets/growbiz/img/portfolio/pm5.jpg" alt="sidebar-img"></a>
                        </div>
                    </div>
                    <div class="col-4 mb-20">
                        <div class="side-image">
                            <a class="popup-image" href="<?= base_url() ?>assets/growbiz/img/portfolio/pm6.jpg"><img src="<?= base_url() ?>assets/growbiz/img/portfolio/pm6.jpg" alt="sidebar-img"></a>
                        </div>
                    </div>
                </div>

                <div class="side-map mt-20 mb-30 d-none d-lg-block">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3041981.899057291!2d-87.62979822192196!3d41.878113633413804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e2c3cd0f4cbed%3A0xafe0a6ad09c0c000!2sChicago%2C%20IL%2C%20USA!5e0!3m2!1sen!2sbd!4v1627994034288!5m2!1sen!2sbd"></iframe>
                </div>



                <!-- <div class="contact-infos mt-30 mb-30">
                    <div class="contact-list mb-30">
                        <h4>Contact Info</h4>
                        <a href="#" class="">
                            <i class="fal fa-map-marker-alt"></i>
                            <span>Johnson Super Street,
                                New York, USA 2344</span>
                        </a>
                        <a href="tel:(555)764890345" class="">
                            <i class="fal fa-phone"></i>
                            <span>(555) 764 890 345</span>
                        </a>
                        <a href="mailto:info@domain.com" class="">
                            <i class="far fa-envelope"></i>
                            <span>info@domain.com</span>
                        </a>

                    </div>
                    <div class="grb__social footer-social offset-social">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <div class="offcanvas-overlay"></div>
    <!-- side toggle end -->
    <!-- Fullscreen search -->
    <div class="search-wrap">
        <div class="search-inner">
            <i class="fal fa-times search-close" id="search-close"></i>
            <div class="search-cell">
                <form method="get">
                    <div class="search-field-holder">
                        <input type="search" class="main-search-input" placeholder="Search Your Keyword...">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end fullscreen search -->
    <main>