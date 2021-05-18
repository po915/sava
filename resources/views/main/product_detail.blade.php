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
                                <h2>SHOP</h2>
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
                            <a href="assets/img/product/preview/15510374340.jpg"><img class="xzoom-gallery" id="1" width="40" src="assets/img/product/thumb/15510374340.jpg" xpreview="assets/img/product/preview/15510374340.jpg" /></a>

							
								<a href="assets/img/product/preview/15510374341.jpg"><img class="xzoom-gallery" id="0" width="40" src="assets/img/product/thumb/15510374341.jpg" xpreview="assets/img/product/preview/15510374341.jpg" /></a>

								<a href="assets/img/product/preview/1551110704.jpg"><img class="xzoom-gallery" id="0" width="40" src="assets/img/product/thumb/1551110704.jpg" xpreview="assets/img/product/preview/1551110704.jpg" /></a>

							
								<a href="assets/img/product/preview/1551110740.jpg"><img class="xzoom-gallery" id="0" width="40" src="assets/img/product/thumb/1551110740.jpg" xpreview="assets/img/product/preview/1551110740.jpg" /></a>

							
								<a href="assets/img/product/preview/1551110779.jpg"><img class="xzoom-gallery" id="0" width="40" src="assets/img/product/thumb/1551110779.jpg" xpreview="assets/img/product/preview/1551110779.jpg" /></a>

							
								<a href="assets/img/product/preview/15510374355.jpg"><img class="xzoom-gallery" id="0" width="40" src="assets/img/product/thumb/15510374355.jpg" xpreview="assets/img/product/preview/15510374355.jpg" /></a>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex align-items-baseline">
                        <h1 class="product-title mr-auto">The Rig</h1>
                        <p class="product-price">25,000 SAR</p>
                    </div>
                    <div class="d-flex align-items-baseline mt-3">
                        <h2 class="text-white mr-auto">Quantity</h2>
                        <span class="spiner-group">
                            <button class="counter-btn spiner-minus" target="aaa">-</button>
                            <input class="counter spiner-number" id="aaa" value="0">
                            <button class="counter-btn spiner-plus" target="aaa">+</button>
                        </span>
                    </div>
                    <div class="row product-description mt-4 px-3">
                        <h4>Description</h4>
                        <p>The rig is the ultimate station of strength and sports, it's a hub for powerlifters, Olympic
                            lifters, cross fitters and sports athletes, it consists of the following:</p>
                        <ol>
                            <li>6x Squat Racks with custom band attachments</li>
                            <li>6x Bench Press stations with custom band attachments</li>
                            <li>10x pull-up stations</li>
                            <li>Monkey bars with a length of 70” for conditioning and athleticism</li>
                        </ol>
                    </div>
                    <div class="row product-description mt-4 px-3">
                        <h4>Product Specs</h4>
                        <ul>
                            <li>Made in KSA</li>
                            <li>4x4 11-Gauge Steel with holes through the column for best bench and squat racking experience
                            </li>
                            <li>4x4 11-Gauge steel grounded column with holes across the entire column for bands experience
                                while squatting or benching&nbsp;</li>
                            <li>Length: 7.4 meters</li>
                            <li>Width: &nbsp;2 meters</li>
                            <li>Hight: 2.7 meters</li>
                            <li>SAVAGES Laser cut branding</li>
                            <li>Black finish</li>
                        </ul>
                    </div>
                    <p class="order-ship">This product is avaible on order, usually ships in 1-4 weeks.</p>
                    <div class="row">
                        <a class="border-btn product-buy">Buy Now</a>
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
