@extends('layout.main')

@section('style')

@endsection


@section('content')
    <main>
        <div class="slider-area position-relative">
            <div class="slider-active">
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-9 col-lg-9 col-md-10">
                                <div class="hero__caption">
                                    <span data-animation="fadeInLeft" data-delay="0.5s">Welcome to</span>
                                    <h1 data-animation="fadeInLeft" data-delay="1s">SAVAGES</h1>
                                    <a href="/shop" class="border-btn hero-btn" data-animation="fadeInLeft"
                                        data-delay="0.8s">Our Products</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="traning-categories black-bg">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="single-topic text-center mb-30">
                            <div class="topic-img ">
                                <img src="assets/img/gallery/pro-7.jpg" alt="">
                                <div class="topic-content-box">
                                    <div class="topic-content">
                                        <h3>Personal traning</h3>
                                        <p>You’ll look at graphs and charts in Task One, how to approach the task and <br>
                                            the language needed for a successful answer.</p>
                                        <a href="/schedule" class="border-btn">join now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="single-topic text-center mb-30">
                            <div class="topic-img">
                                <img src="assets/img/gallery/cat2.png" alt="">
                                <div class="topic-content-box">
                                    <div class="topic-content">
                                        <h3>Class traning</h3>
                                        <p>You’ll look at graphs and charts in Task One, how to approach the task and <br>
                                            the language needed for a successful answer.</p>
                                        <a href="/schedule" class="border-btn">join now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="team-area fix">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section-tittle text-center mb-55 wow fadeInUp" data-wow-duration="1s"
                            data-wow-delay=".1s">
                            <h2>What We Offer</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                            <div class="cat-icon">
                                <img src="assets/img/program/pro-3.jpg" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5>Power Bodybuilding</h5>
                                <p>You’ll look at graphs and charts in Task One, how to approach the task </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                            <div class="cat-icon">
                                <img src="assets/img/gallery/team1.png" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5>Body Building</h5>
                                <p>You’ll look at graphs and charts in Task One, how to approach the task </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                            <div class="cat-icon">
                                <img src="assets/img/gallery/team2.png" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5>Strength Gain</h5>
                                <p>You’ll look at graphs and charts in Task One, how to approach the task </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                            <div class="cat-icon">
                                <img src="assets/img/gallery/team2.png" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5>Weight Loss</h5>
                                <p>You’ll look at graphs and charts in Task One, how to approach the task </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="programs">
            <div class="gallery-area">
                <div class="container-fluid ">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section-tittle text-center mb-55 wow fadeInUp" data-wow-duration="1s"
                                data-wow-delay=".1s">
                                <h2>training programs</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <div class="box snake mb-30">
                                <div class="gallery-img big-img"
                                    style="background-image: url(assets/img/program/pro-1.jpg);"></div>
                                <div class="overlay" data-type='program'>
                                    <div class="overlay-content">
                                        <div>
                                            <h3>venom</h3>
                                            <p class="main-price">399.00 SAR </p>
                                        </div>
                                        <a href="/program-venom" class="border-btn join-program">Continue Training</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <div class="box snake mb-30">
                                <div class="gallery-img big-img"
                                    style="background-image: url(assets/img/program/pro-5.jpg);"></div>
                                <div class="overlay" data-type='program'>
                                    <div class="overlay-content">
                                        <div>
                                            <h3>rage</h3>
                                            <p class="main-price">199.00 SAR </p>
                                        </div>
                                        <button class="border-btn join-program">Join Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <div class="box snake mb-30">
                                <div class="gallery-img big-img"
                                    style="background-image: url(assets/img/program/pro-3.jpg);"></div>
                                <div class="overlay" data-type='program'>
                                    <div class="overlay-content">
                                        <div>
                                            <h3>re-load</h3>
                                            <p class="main-price">199.00 SAR </p>
                                        </div>
                                        <button class="border-btn join-program">Join Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>                   
                    </div>
                </div>
            </div>

            <div class="text-center">
                <a href="/program" class="border-btn">View all</a>
            </div>
        </section>
        <section class="products">
            <div class="gallery-area">
                <div class="container-fluid ">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="section-tittle text-center mb-55 wow fadeInUp" data-wow-duration="1s"
                                data-wow-delay=".1s">
                                <h2>our products</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <div class="box snake mb-30">
                                <div class="gallery-img big-img"
                                    style="background-image: url(assets/img/product/product-1.jpg);"></div>
                                <div class="overlay" data-type='product'>
                                    <div class="overlay-content">
                                        <div>
                                            <h3>The bench</h3>
                                            <p class="main-price">4999.00 SAR </p>
                                        </div>
                                        <button class="border-btn buy-product">Buy Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <div class="box snake mb-30">
                                <div class="gallery-img big-img"
                                    style="background-image: url(assets/img/product/product-2.jpg);"></div>
                                <div class="overlay" data-type='product'>
                                    <div class="overlay-content">
                                        <div>
                                            <h3>the rig</h3>
                                            <p class="main-price">25000.00 SAR </p>
                                        </div>
                                        <button class="border-btn buy-product">Buy Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <div class="box snake mb-30">
                                <div class="gallery-img big-img"
                                    style="background-image: url(assets/img/product/product-3.jpg);"></div>
                                <div class="overlay" data-type='product'>
                                    <div class="overlay-content">
                                        <div>
                                            <h3>dead-lift platform</h3>
                                            <p class="main-price">3500.00 SAR </p>
                                        </div>
                                        <button class="border-btn buy-product">Buy Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <a href="/shop" class="border-btn">view all</a>
            </div>
        </section>
    </main>
@endsection


@section('script')

@endsection
