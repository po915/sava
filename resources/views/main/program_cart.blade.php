@extends('layout.main')

@section('style')

@endsection

@section('content')
    <main>
        <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 pt-70">
                                <h2>program cart</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <section class="shopping-cart">
                <div class="container">
                    <div class="basket">
                        <div class="basket-holder">
                            <div class="basket-header">
                                <div class="row">
                                    <div class="col-5">Product</div>
                                    <div class="col-2 text-center">Price</div>
                                    <div class="col-2 text-center">Quantity</div>
                                    <div class="col-2 text-center">Total</div>
                                    <div class="col-1 text-center">Remove</div>
                                </div>
                            </div>
                            <div class="basket-body">
                                <!-- Product-->
                                <div class="item">
                                    <div class="row d-flex align-items-center">
                                        <div class="col-5">
                                            <div class="d-flex align-items-center">
                                                <img src="assets/img/product/thumb/1566221919.jpg" alt="..." class="img-fluid">
                                                <div class="title">
                                                    <a href="/program-detail">
                                                        <h5 class="text-white">Venom</h5>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2 text-center"><span>$65.00</span></div>
                                        <div class="col-2 text-center"><span>5</span></div>
                                        <div class="col-2 text-center"><span>$325.00</span></div>
                                        <div class="col-1 text-center"><i class="delete fa fa-trash"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div
                            class="CTAs d-flex align-items-center justify-content-center justify-content-md-end flex-column flex-md-row">
                            <a href="shop.html" class="btn btn-template-outlined wide">Continue Shopping</a><a href="#"
                                class="btn btn-template wide">Update Cart</a>
                        </div>
                    </div>
            </section>
        </div>
    </main>
@endsection

@section('script')

@endsection
