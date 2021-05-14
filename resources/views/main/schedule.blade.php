<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}') }}">

<head>
    <meta charset="utf-8') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}') }}">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">

    <title>SAVAGESA</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body class="black-bg">
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="">
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
                            <a href="/"><img src="assets/img/logo/logo.png" class="logo" alt="" /></a>
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
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 pt-70">
                            <h2>Schedule a class</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-3">
            <div class="col-xl-12">
                <div class="section-tittle text-center mb-55 wow fadeInUp" data-wow-duration="1s"
                    data-wow-delay=".1s">
                    <h2>Find your best match</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <label class="multi-label">Classes</label>
                <select id="fit-class" multiple="multiple">
                    <option value="1">Open Gym Access</option>
                    <option value="2">HIIT at Home</option>
                    <option value="3">Functional Training</option>
                    <option value="4" selected>Children's karate</option>
                    <option value="5">Barre at Home</option>
                </select>
            </div>
            <div class="col-sm-3">
                <label class="multi-label">Trainers</label>
                <select id="fit-trainer" multiple="multiple">
                    <option value="1">Jane</option>
                    <option value="2">Ivan</option>
                    <option value="3">Smith</option>
                    <option value="4">Novel</option>
                    <option value="5" selected>Nancy</option>
                </select>
            </div>
            <div class="col-sm-3">
                <label class="multi-label">Facilities</label>
                <select id="fit-facilities" multiple="multiple">
                    <option value="1">Online Facality</option>
                    <option value="2">PF Boxing Area</option>
                    <option value="3" selected>PF Fitness Sutdio</option>
                    <option value="4">PF Yoga Studio</option>
                    <option value="5">PF Spinning Studio</option>
                </select>
            </div>
            <div class="col-sm-3">
                <label class="multi-label">Date</label>
                <input placeholder="Select your date" type="text" name="checkIn" id="datepicker" value=""
                    class="calendar"><i class="fas fa-calendar-check icon"></i>
            </div>
        </div>
        <div class="content-wrapper">
            <div class="news-card available-class">
                <div class="ribbon ribbon-top-right"><span>available</span></div>
                <img src="https://cdn.glofox.com/platform/passionfitness/branches/605d8432e2ff824b934b5b6c/programs/6061fd33e8e5001f990c70bd/default.png?v=1617786072" alt="" class="news-card__image" />
                <div class="news-card__text-wrapper">
                    <h2 class="news-card__title">Children's Karate</h2>
                    <div class="news-card__post-date">12:00 PM - 60 min</div>
                    <div class="news-card__details-wrapper">
                        <p class="news-card__excerpt"><i class="fa fa-group"></i> : 2/10 joined</p>
                        <p class="news-card__excerpt"><i class="fa fa-user"></i> : Nancy</p>
                        <p class="news-card__excerpt"><i class="fa fa-map"></i> : PF Yoga Studio</p>
                        <a href="#" class="news-card__read-more">Book</a>
                    </div>
                </div>
            </div>

            <div class="news-card available-class">
                <div class="ribbon ribbon-top-right"><span>available</span></div>
                <img src="{{ asset('assets/img/gallery/blog2.png') }}" alt="" class="news-card__image" />
                <div class="news-card__text-wrapper">
                    <h2 class="news-card__title">Fitness</h2>
                    <div class="news-card__post-date">12:00 PM - 60 min</div>
                    <div class="news-card__details-wrapper">
                        <p class="news-card__excerpt"><i class="fa fa-group"></i> : 2/10 joined</p>
                        <p class="news-card__excerpt"><i class="fa fa-user"></i> : Nancy</p>
                        <p class="news-card__excerpt"><i class="fa fa-map"></i> : PF Yoga Studio</p>
                        <a href="#" class="news-card__read-more">Book</a>
                    </div>
                </div>
            </div>

            <div class="news-card waiting-class">
                <div class="ribbon ribbon-top-right"><span>waiting</span></div>
                <img src="{{ asset('assets/img/gallery/team2.png') }}" alt="" class="news-card__image" />
                <div class="news-card__text-wrapper">
                    <h2 class="news-card__title">Boxing</h2>
                    <div class="news-card__post-date">12:00 PM - 60 min</div>
                    <div class="news-card__details-wrapper">
                        <p class="news-card__excerpt"><i class="fa fa-group"></i> : 2/10 joined</p>
                        <p class="news-card__excerpt"><i class="fa fa-user"></i> : Nancy</p>
                        <p class="news-card__excerpt"><i class="fa fa-map"></i> : PF Yoga Studio</p>
                        <a href="#" class="news-card__read-more">Joined</a>
                    </div>
                </div>
            </div>

            <div class="news-card available-class">
                <div class="ribbon ribbon-top-right"><span>available</span></div>
                <img src="{{ asset('assets/img/gallery/gallery5.png') }}" alt="" class="news-card__image" />
                <div class="news-card__text-wrapper">
                    <h2 class="news-card__title">Yoga</h2>
                    <div class="news-card__post-date">12:00 PM - 60 min</div>
                    <div class="news-card__details-wrapper">
                        <p class="news-card__excerpt"><i class="fa fa-group"></i> : 2/10 joined</p>
                        <p class="news-card__excerpt"><i class="fa fa-user"></i> : Nancy</p>
                        <p class="news-card__excerpt"><i class="fa fa-map"></i> : PF Yoga Studio</p>
                        <a href="#" class="news-card__read-more">Book</a>
                    </div>
                </div>
            </div>

            <div class="news-card full-class">
                <div class="ribbon ribbon-top-right"><span>full</span></div>
                <img src="{{ asset('assets/img/gallery/gallery3.png') }}" alt="" class="news-card__image" />
                <div class="news-card__text-wrapper">
                    <h2 class="news-card__title">Spinning</h2>
                    <div class="news-card__post-date">12:00 PM - 60 min</div>
                    <div class="news-card__details-wrapper">
                        <p class="news-card__excerpt"><i class="fa fa-group"></i> : 10/10 joined</p>
                        <p class="news-card__excerpt"><i class="fa fa-user"></i> : Nancy</p>
                        <p class="news-card__excerpt"><i class="fa fa-map"></i> : PF Yoga Studio</p>
                        <a href="#" class="news-card__read-more">View Detail</a>
                    </div>
                </div>
            </div>

            <div class="news-card available-class">
                <div class="ribbon ribbon-top-right"><span>available</span></div>
                <img src="{{ asset('assets/img/gallery/c.png') }}" alt="" class="news-card__image" />
                <div class="news-card__text-wrapper">
                    <h2 class="news-card__title">Weight lifting</h2>
                    <div class="news-card__post-date">12:00 PM - 60 min</div>
                    <div class="news-card__details-wrapper">
                        <p class="news-card__excerpt"><i class="fa fa-group"></i> : 2/10 joined</p>
                        <p class="news-card__excerpt"><i class="fa fa-user"></i> : Nancy</p>
                        <p class="news-card__excerpt"><i class="fa fa-map"></i> : PF Yoga Studio</p>
                        <a href="#" class="news-card__read-more">Book</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
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
                                    <a href="/"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
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
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>
                                        document.write(new Date().getFullYear());

                                    </script> All rights reserved
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>

    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js">
    </script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        $('#fit-class').multiselect({
            includeSelectAllOption: true,
            numberDisplayed: 1,
            nSelectedText: 'classes selected',
            buttonClass: 'multi-select-btn',
            selectedClass: 'active-multi-selected',
            selectAllText: 'All Classes',
            selectAllValue: 'all-class',
        });
        $('#fit-trainer').multiselect({
            includeSelectAllOption: true,
            numberDisplayed: 1,
            nSelectedText: 'trainers selected',
            buttonClass: 'multi-select-btn',
            selectedClass: 'active-multi-selected',
            selectAllText: 'All Trainers',
            selectAllValue: 'all-trainer',
        });
        $('#fit-facilities').multiselect({
            includeSelectAllOption: true,
            numberDisplayed: 1,
            nSelectedText: 'facilities selected',
            buttonClass: 'multi-select-btn',
            selectedClass: 'active-multi-selected',
            selectAllText: 'All Facilities',
            selectAllValue: 'all-facilities',
        });
        $('#datepicker').datepicker({
            format: 'dd-mm-yyyy',
            startDate: '+1d'
        });

    </script>
</body>

</html>
