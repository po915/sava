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
                                <li class="nav-item"><a href="#" class="nav-link active">Payment Method </a></li>
                                <li class="nav-item"><a href="#" class="nav-link disabled">Order Review</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="payment-method" class="tab-block">
                                    <div id="accordion" role="tablist" aria-multiselectable="true">
                                        <div class="card">
                                            <div id="headingOne" role="tab" class="card-header">
                                                <h6><a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                                        aria-expanded="true" aria-controls="collapseOne">Credit Card</a>
                                                </h6>
                                            </div>
                                            <div id="collapseOne" role="tabpanel" aria-labelledby="headingOne"
                                                class="collapse show">
                                                <div class="card-body">
                                                    <form action="#">
                                                        <div class="row">
                                                            <div class="form-group col-md-6">
                                                                <label for="card-name" class="form-label">Name on
                                                                    Card</label>
                                                                <input type="text" name="card-name"
                                                                    placeholder="Name on card" id="card-name"
                                                                    class="form-control">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="card-number" class="form-label">Card
                                                                    Number</label>
                                                                <input type="text" name="card-number"
                                                                    placeholder="Card number" id="card-number"
                                                                    class="form-control">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="expiry-date" class="form-label">Expiry
                                                                    Date</label>
                                                                <input type="text" name="expiry-date" placeholder="MM/YY"
                                                                    id="expiry-date" class="form-control">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="cvv" class="form-label">CVC/CVV</label>
                                                                <input type="text" name="cvv" placeholder="CVC/CVV" id="cvv"
                                                                    class="form-control">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="zip" class="form-label">ZIP</label>
                                                                <input type="text" name="zip" placeholder="ZIP code" id="zip"
                                                                    class="form-control">
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div id="headingTwo" role="tab" class="card-header">
                                                <h6><a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
                                                        aria-expanded="false" aria-controls="collapseTwo"
                                                        class="collapsed">Paypal</a></h6>
                                            </div>
                                            <div id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo"
                                                class="collapse">
                                                <div class="card-body">
                                                    <input type="radio" name="shippping" id="payment-method-1" class="radio-template">
                                                    <label for="payment-method-1">
                                                        <strong>Continue with Paypal</strong>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="CTAs d-flex justify-content-between flex-column flex-lg-row my-4">
                                        <a href="/checkout-one" class="sm-border-btn">Back to Address</a>
                                        <a href="/checkout-three" class="sm-border-btn">Continue to order review</a>
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
