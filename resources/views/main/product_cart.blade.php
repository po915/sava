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
                                <h2>product cart</h2>
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
                </div>
                {{-- <div class="container mt-5">
                    <div class="d-flex align-items-center justify-content-center justify-content-md-end flex-column flex-md-row">
                        <a href="#" class="sm-border-btn mr-3">Continue Shopping</a>
                        <a href="#" class="sm-border-btn">Update Cart</a>
                    </div>
                </div> --}}
            </section>
            <section class="order-details mt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="block">
                                <div class="block-header">
                                    Coupon Code
                                </div>
                                <div class="block-body">
                                    <p>If you have a coupon code, please enter it in the box below</p>
                                    <form action="#">
                                        <div class="form-group d-flex">
                                            <input type="text" name="coupon" />
                                            <button type="submit" class="cart-black-button">Apply coupon</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="block">
                                <div class="block-header">
                                    Order Summary
                                </div>
                                <div class="block-body">
                                    <p>Shipping and additional costs are calculated based on values you have entered.</p>
                                    <ul class="order-menu list-unstyled">
                                        <li class="d-flex justify-content-between"><span>Order Subtotal </span><strong>$390.00</strong></li>
                                        <li class="d-flex justify-content-between"><span>Promo Discount</span><strong>$10.00</strong></li>
                                        <li class="d-flex justify-content-between"><span>Tax</span><strong>$0.00</strong></li>
                                        <li class="d-flex justify-content-between"><span>Total</span><strong class="text-primary price-total">$400.00</strong></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 text-center mt-4">
                            <a href="/checkout-one" class="border-btn">Proceed to checkout<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </section>
            
        </div>
    </main>
@endsection

@section('script')

@endsection
