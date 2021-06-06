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
                <h2>Training Programs</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="gallery-area">
      <div class="container">
        <div class="row">
          {{-- @foreach ($programs as $program)
            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
              <div class="box snake mb-30">
                <div class="gallery-img big-img"
                  style="background-image: url('{{ asset('storage/img_program/' . $program->photos[0] . '') }}');">
                </div>
                <div class="overlay" data-type='program' data-id={{ $program->id }}>
                  <div class="overlay-content">
                    <div>
                      <h3>{{ $program->name }}</h3>
                      <p class="main-price">{{ $program->price }}.00 SAR </p>
                    </div>
                    <button class="border-btn join-program">Join Now</button>
                  </div>
                </div>
              </div>
            </div>
          @endforeach --}}
          <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
            <div class="box snake mb-30">
              <div class="gallery-img big-img" style="background-image: url(assets/img/program/pro-1.jpg);"></div>
              <div class="overlay" data-type='program' data-id="1">
                <div class="overlay-content">
                  <div>
                    <h3>venom</h3>
                    <p class="main-price">399.00 SAR </p>
                  </div>
                  <a href="/program-venom" class="border-btn join-program text-white">continue training</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
            <div class="box snake mb-30">
              <div class="gallery-img big-img" style="background-image: url(assets/img/program/pro-7.jpg);"></div>
              <div class="overlay" data-type='program' data-id="2">
                <div class="overlay-content">
                  <div>
                    <h3>rage</h3>
                    <p class="main-price">199.00 SAR </p>
                  </div>
                  <a href="/rage" class="border-btn join-program">Continue Program</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
            <div class="box snake mb-30">
              <div class="gallery-img big-img" style="background-image: url(assets/img/program/pro-3.jpg);"></div>
              <div class="overlay" data-type='program' data-id="3">
                <div class="overlay-content">
                  <div>
                    <h3>re-load</h3>
                    <p class="main-price">199.00 SAR </p>
                  </div>
                  <a href="/reload" class="border-btn join-program">Continue Program</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="box snake mb-30">
              <div class="gallery-img big-img" style="background-image: url(assets/img/program/pro-4.jpg);"></div>
              <div class="overlay" data-type='program' data-id="4">
                <div class="overlay-content">
                  <div>
                    <h3>full-force</h3>
                    <p class="main-price">199.00 SAR </p>
                  </div>
                  <a href="/full-force" class="border-btn join-program">Continue Program</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8 col-md-6 col-sm-6">
            <div class="box snake mb-30">
              <div class="gallery-img big-img" style="background-image: url(assets/img/program/pro-8.jpg);"></div>
              <div class="overlay" data-type='program' data-id="6">
                <div class="overlay-content">
                  <div>
                    <h3>deadlift-focus</h3>
                    <p class="main-price">199.00 SAR </p>
                  </div>
                  <a href="/deadlift-focus" class="border-btn join-program">Continue Program</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-7 col-md-6 col-sm-6">
            <div class="box snake mb-30">
              <div class="gallery-img big-img" style="background-image: url(assets/img/program/pro-6.jpg);"></div>
              <div class="overlay" data-type='program' data-id="5">
                <div class="overlay-content">
                  <div>
                    <h3>deadlift-boost</h3>
                    <p class="main-price">199.00 SAR </p>
                  </div>
                  <a href="/deadlift-boost" class="border-btn join-program">Continue Program</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 col-md-6 col-sm-6">
            <div class="box snake mb-30">
              <div class="gallery-img big-img" style="background-image: url(assets/img/program/pro-3.jpg);"></div>
              <div class="overlay" data-type='program' data-id="7">
                <div class="overlay-content">
                  <div>
                    <h3>deadlift-peak</h3>
                    <p class="main-price">199.00 SAR </p>
                  </div>
                  <a href="/deadlift-peak" class="border-btn join-program">Continue Program</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="text-center">
      <a href="#" class="border-btn">Load More</a>
    </div>
  </main>
@endsection


@section('script')
  <script>
    JSON.stringify

  </script>
@endsection
