<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}') }}">

<head>
    <meta charset="utf-8') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}') }}">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">

    <title>SAVAGESA</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @yield('style')
</head>

<body class="black-bg">
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('assets/img/logo/loder.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper d-flex align-items-center justify-content-between">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="/"><img src="{{ asset('assets/img/logo/logo.png') }}" class="logo" alt="" /></a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu f-right d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="/program">Training Programs</a></li>
                                    <li><a href="/shop">Shop</a></li>
                                    <li><a href="/about">About</a></li>
                                    <li><a href="/contact">GYM Location</a></li>
                                    <li><a href="/membership">Membership</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Header-btn -->
                        <div class="header-btns d-none d-lg-block f-right">
                            <a href="/login" class="border-btn">JOIN US</a>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @yield('content')
    <footer>
        <!--? Footer Start-->
        <div class="footer-area black-bg">
            <div class="container">
                <div class="footer-top footer-padding">
                    <!-- Footer Menu -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="single-footer-caption mb-50 text-center">
                                <!-- logo -->
                                <div class="footer-logo wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                                    <a href="/"><img src="{{ asset('assets/img/logo/logo2_footer.png') }}" alt=""></a>
                                </div>
                                <!-- Menu -->
                                <!-- Header Start -->
                                <div class="header-area main-header2 wow fadeInUp" data-wow-duration="2s"
                                    data-wow-delay=".4s">
                                    <div class="main-header main-header2">
                                        <div class="menu-wrapper menu-wrapper2">
                                            <!-- Main-menu -->
                                            <div class="main-menu main-menu2 text-center">
                                                <nav>
                                                    <ul>
                                                        <li><a href="/program">Training Programs</a></li>
                                                        <li><a href="/shop">Shop</a></li>
                                                        <li><a href="/about">About</a></li>
                                                        <li><a href="/contact">GYM Location</a></li>
                                                        <li><a href="/membership">Membership</a></li>
                                                    </ul>
                                                </nav>
                                                <nav>
                                                    <ul>
                                                        <li><a href="/program">Terms and Conditions</a></li>
                                                        <li><a href="/shop">Privacy and Policy</a></li>
                                                        {{-- <li><a href="/about">About</a></li>
                                                        <li><a href="/contact">GYM Location</a></li>
                                                        <li><a href="/membership">Membership</a></li> --}}
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="footer-social mt-30 wow fadeInUp" data-wow-duration="3s"
                                    data-wow-delay=".8s">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Bottom -->
                <div class="footer-bottom">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-12">
                            <div class="footer-copy-right text-center">
                                <p>
                                    Copyright &copy;<script>
                                        document.write(new Date().getFullYear());

                                    </script> All rights reserved
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>
    <script src="{{ asset('assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slicknav.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/gijgo.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/hover-direction-snake.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

    </script>
    @yield('script')
</body>

</html>
