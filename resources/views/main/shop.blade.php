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
                                <h2>SHOP</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="gallery-area">
            <div class="container-fluid ">
                <div class="row">

                    @foreach ($products as $product)
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <div class="box snake mb-30">
                                <div class="gallery-img big-img"
                                    style="background-image: url('{{ asset('storage/img_product/' . $product->photos[0] . '') }}');">
                                </div>
                                <div class="overlay" data-type='product' data-id={{ $product->id }}>
                                    <div class="overlay-content">
                                        <div>
                                            <h3>{{ $product->name }}</h3>
                                            <p class="main-price">{{ $product->price }}.00 SAR </p>
                                        </div>
                                        <button class="border-btn buy-product">Buy Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    {{-- <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
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
                    </div> --}}

                </div>
            </div>
        </div>

        <div class="text-center">
            <a href="#" class="border-btn">Load More</a>
        </div>
    </main>
@endsection


@section('script')

@endsection
