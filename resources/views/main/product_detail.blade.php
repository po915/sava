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
                        <img class="xzoom" id="xzoom-default"
                            src="{{ asset('storage/img_product/' . $product->photos[0] . '') }}"
                            xoriginal="{{ asset('storage/img_product/' . $product->photos[0] . '') }}" width="100%" />

                        <div class="xzoom-thumbs">
                            @foreach ($product->photos as $photo)
                                <a href="{{ asset('storage/img_product/' . $photo . '') }}"><img class="xzoom-gallery" id="1"
                                        width="40" src="{{ asset('storage/img_product/' . $photo . '') }}"
                                        xpreview="{{ asset('storage/img_product/' . $photo . '') }}" /></a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex align-items-baseline">
                        <h1 class="product-title mr-auto">{{ $product->name }}</h1>
                        <p class="product-price">{{ $product->price }}.00 SAR</p>
                    </div>
                    <div class="d-flex align-items-baseline mt-3">
                        <h2 class="text-white mr-auto">Quantity</h2>
                        <span class="spiner-group">
                            <button class="counter-btn spiner-minus" target="aaa">-</button>
                            <input class="counter spiner-number" id="aaa" value="0">
                            <button class="counter-btn spiner-plus" target="aaa">+</button>
                        </span>
                    </div>
                    <div class="product-description mt-4 px-3">
                        <h4>Description</h4>
                        {!! $product->desc !!}
                    </div>
                    <div class="product-description mt-4 px-3">
                        <h4>Product Specs</h4>
                        {!! $product->spec !!}
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
