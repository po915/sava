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

                        <img class="xzoom" id="xzoom-default" src="{{ asset('storage/img_program/' . $program->photos[0] . '') }}"
                            xoriginal="{{ asset('storage/img_program/' . $program->photos[0] . '') }}" width="100%" />

                        <div class="xzoom-thumbs">
                            @foreach ($program->photos as $photo)
                                <a href="{{ asset('storage/img_program/'.$photo.'') }}"><img class="xzoom-gallery" id="1"
                                        width="40" src="{{ asset('storage/img_program/'.$photo.'') }}"
                                        xpreview="{{ asset('storage/img_program/'.$photo.'') }}" /></a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="d-flex align-items-baseline">
                        <h1 class="product-title mr-auto">{{ $program->name }}</h1>
                        <p class="product-price">{{ $program->price }} SAR</p>
                    </div>
                    <div class="product-description mt-4 px-3">
                        <h4>Description</h4>
                        {!! $program->e_desc !!}
                    </div>
                    <div class="product-description mt-4 px-3">
                        <h4>تفسير</h4>
                        {!! $program->a_desc !!}

                    </div>
                    <div class="row">
                        <a href="/program-cart" class="border-btn product-buy">Join Now</a>
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
