@extends('layout.main')

@section('style')
    <link rel="stylesheet" href="assets/css/xzoom.css">
@endsection

@section('content')
    <main>
        <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 pt-70">
                                <h2>Programs</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="xzoom-container">
                        <img class="xzoom" id="xzoom-default" src="assets/img/product/preview/15510374340.jpg"
                            xoriginal="assets/img/product/preview/15510374340.jpg" width="100%" />

                        <div class="xzoom-thumbs">
                            <a href="assets/img/product/preview/15510374340.jpg"><img class="xzoom-gallery" id="1"
                                    width="40" src="assets/img/product/thumb/15510374340.jpg"
                                    xpreview="assets/img/product/preview/15510374340.jpg" /></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex align-items-baseline">
                        <h1 class="product-title mr-auto">Venom</h1>
                        <p class="product-price">399 SAR</p>
                    </div>
                    <div class="row product-description mt-4 px-3">
                        <h4>Description</h4>
                        <p>A 13 week Program that is designed to build a strong foundation in powerlifting and building mass as well, this program deals with submaximal weights with different percentages on a daily basis</p>
                        <ul>
                            <li>Program Duration : 13 weeks</li>
                            <li>Training days : 5 days a week</li>
                            <li>split : upper-lower body split</li>
                        </ul>
                    </div>
                    <div class="row product-description mt-4 px-3">
                        <h4>تفسير</h4>
                        <p>برنامج مكون من ١٣ اسبوع، مصمم لبناء اساس قوي و صلب في رياضة الباورليفتينق، هذا البرنامج مصمم ايضا لاضافة قوة كبيرة في الرفعات الرئيسية الثلاثة: سكوات، البينش بريس و الديدليفت، </p>
                        <p>هذا البرنامج يتعامل مع اوزان تحت الوزن الأقصى و بنسب مختلفة بشكل يومي</p>
                        <ul>
                            <li>مدة البرنامج : ١٣ أسبوع</li>
                            <li>أيام التمرين : ٥ أيام في الإسبوع</li>
                            <li>نمط التمرين : جزء علوي و جزء سفلي</li>
                        </ul>
                    </div>
                    <div class="row">
                        <a class="border-btn product-buy">Join Now</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('script')
    <script src="https://unpkg.com/xzoom/dist/xzoom.min.js"></script>
    <script src="https://hammerjs.github.io/dist/hammer.min.js"></script>
    <script src="{{ asset('assets/js/gallery.js') }}"></script>
    <script>
        var spiner_plus = document.getElementsByClassName("spiner-plus");
        var spiner_minus = document.getElementsByClassName("spiner-minus");
        for (var i = 0; i < spiner_plus.length; i++) {
            spiner_plus[i].addEventListener("click", function() {
                var spiner_target_id = this.getAttribute("target");
                document.getElementById(spiner_target_id).value = Number(document.getElementById(spiner_target_id)
                    .value) + 1;
            });
        }
        for (var i = 0; i < spiner_minus.length; i++) {
            spiner_minus[i].addEventListener("click", function() {
                var spiner_target_id = this.getAttribute("target");
                var j = 0;
                document.getElementById(spiner_target_id).value = (j = Number(document.getElementById(
                    spiner_target_id).value) - 1) == -1 ? 0 : j;
            });
        }

    </script>
@endsection
