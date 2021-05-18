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
                                <h2>Checkout</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <section class="checkout">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a href="#" class="nav-link disabled">Address</a></li>
                                <li class="nav-item"><a href="#" class="nav-link disabled">Payment Method </a></li>
                                <li class="nav-item"><a href="#" class="nav-link active">Order Review</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="order-review" class="tab-block">
                                    <div class="cart">
                                        <div class="cart-holder">
                                            <div class="basket-header">
                                                <div class="row">
                                                    <div class="col-6">Product</div>
                                                    <div class="col-2 text-center">Price</div>
                                                    <div class="col-2 text-center">Quantity</div>
                                                    <div class="col-2 text-center">Unit Price</div>
                                                </div>
                                            </div>
                                            <div class="basket-body">
                                                <!-- Product-->
                                                <div class="item row d-flex align-items-center">
                                                    <div class="col-6">
                                                        <div class="d-flex align-items-center">
                                                            <img src="assets/img/product/thumb/1566221919.jpg" alt="..." class="img-fluid" />
                                                            <div class="title">
                                                                <a href="">
                                                                    <h6>Product name</h6>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-2 text-center"><span>$65.00</span></div>
                                                    <div class="col-2 text-center"><span>4</span></div>
                                                    <div class="col-2 text-center"><span>$325.00</span></div>
                                                </div>
                                                <!-- Product-->
                                                <div class="item row d-flex align-items-center">
                                                    <div class="col-6">
                                                        <div class="d-flex align-items-center">
                                                            <img src="assets/img/product/thumb/1566221919.jpg" alt="..." class="img-fluid" />
                                                            <div class="title">
                                                                <a href="">
                                                                    <h6>Product name</h6>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-2 text-center"><span>$65.00</span></div>
                                                    <div class="col-2 text-center"><span>4</span></div>
                                                    <div class="col-2 text-center"><span>$325.00</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="CTAs d-flex justify-content-between flex-column flex-lg-row my-4">
                                        <a href="/checkout-two" class="sm-border-btn">Back to Payment method</a>
                                        <a href=#" class="sm-border-btn">Place an order</a>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                        <div class="col-lg-4">
                            <div class="block-body order-summary">
                                <h6 class="text-uppercase">Order Summary</h6>
                                <p>Shipping and additional costs are calculated based on values you have entered</p>
                                <ul class="order-menu list-unstyled">
                                    <li class="d-flex justify-content-between"><span>Order Subtotal
                                        </span><strong>$325.00</strong></li>
                                    <li class="d-flex justify-content-between"><span>Promo
                                            Discount</span><strong>$10.00</strong></li>
                                    <li class="d-flex justify-content-between"><span>Tax</span><strong>$0.00</strong></li>
                                    <li class="d-flex justify-content-between"><span>Total</span><strong
                                            class="text-primary price-total">$315.00</strong></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


        </div>
    </main>
@endsection

@section('script')

@endsection
