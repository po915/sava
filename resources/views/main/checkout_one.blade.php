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
                                <li class="nav-item"><a href="#" class="nav-link active">Address</a></li>
                                <li class="nav-item"><a href="#" class="nav-link disabled">Payment Method </a></li>
                                <li class="nav-item"><a href="#" class="nav-link disabled">Order Review</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="address" class="active tab-block">
                                    <form action="#">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="firstname" class="form-label">First Name</label>
                                                <input id="firstname" type="text" name="first-name" placeholder="Enter you first name" class="form-control" />
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="lastname" class="form-label">Last Name</label>
                                                <input id="lastname" type="text" name="last-name" placeholder="Enter your last name" class="form-control" />
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="email" class="form-label">Email Address</label>
                                                <input id="email" type="email" name="email" placeholder="enter your email address" class="form-control" />
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="phone-number" class="form-label">Phone Number</label>
                                                <input id="phone-number" type="tel" name="phone-number" placeholder="Your phone number" class="form-control" />
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="city" class="form-label">City</label>
                                                <input id="city" type="text" name="city" placeholder="Your city" class="form-control" />
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="zip" class="form-label">ZIP</label>
                                                <input id="zip" type="text" name="zip" placeholder="ZIP code" class="form-control" />
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="state" class="form-label">State</label>
                                                <input id="state" type="text" name="state" placeholder="Your state" class="form-control" />
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="country" class="form-label">Country</label>
                                                <input id="country" type="text" name="country" placeholder="Your country" class="form-control" />
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="shipping_address" class="form-label">Shipping Address</label>
                                                <input id="shipping_address" type="text" name="address" placeholder="Shipping Address" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="CTAs d-flex justify-content-between flex-column flex-lg-row my-4">
                                            <a href="/product-cart" class="sm-border-btn">Back to basket</a>
                                            <a href="/checkout-two" class="sm-border-btn">Choose payment method</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="block-body order-summary">
                                <h6 class="text-uppercase">Order Summary</h6>
                                <p>Shipping and additional costs are calculated based on values you have entered</p>
                                <ul class="order-menu list-unstyled">
                                    <li class="d-flex justify-content-between"><span>Order Subtotal </span><strong>$325.00</strong></li>
                                    <li class="d-flex justify-content-between"><span>Promo Discount</span><strong>$10.00</strong></li>
                                    <li class="d-flex justify-content-between"><span>Tax</span><strong>$0.00</strong></li>
                                    <li class="d-flex justify-content-between"><span>Total</span><strong class="text-primary price-total">$315.00</strong></li>
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
