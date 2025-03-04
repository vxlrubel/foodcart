@extends('layouts.app')

@push('title', 'Fresh & Delicious Food Delivered to Your Doorstep')

@push('metacontent')

<meta name="description" content="FoodCart is your one-stop online food marketplace, offering fresh and delicious meals delivered straight to your home. Browse our menu and order now!">
<meta name="keywords" content="food delivery, online food shopping, fresh meals, restaurant delivery, FoodCart">
<meta name="author" content="FoodCart Team">

@endpush

@push('style')
    <link rel="stylesheet" href="{{asset('/assets/swiper/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/css/pages/home.css')}}">
@endpush

@section('content')

<section class="clearfix">
    <div class="container-fluid p-0">
        <div class="swiper hero-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide hero-slider-item">
                    <div class="parallax-bg" data-swiper-parallax="-50%" style="background-image: url('assets/img/hero-slider/image-1.jpeg')"></div>
                    <div class="container">
                        <div class="hero-slide-content-parent">
                            <div class="hero-slide-content" data-swiper-parallax="-100">
                                <h2 data-swiper-parallax="-200" class="fs-1 text-uppercase mb-0">Cookies</h2>
                                <p data-swiper-parallax="-300" class="fs-5 text-capitalize fw-bold">Buy Best Food Here</p>
                                <div  data-swiper-parallax="-400">
                                    <a href="javascript:void(0)" class="btn btn-light rounded-0 btn-sm py-2 px-4"><i class="fa-regular fa-cart-shopping"></i> Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide hero-slider-item">
                    <div class="parallax-bg" data-swiper-parallax="-50%" style="background-image: url('assets/img/hero-slider/image-2.jpeg')"></div>
                    <div class="container">
                        <div class="hero-slide-content-parent">
                            <div class="hero-slide-content" data-swiper-parallax="-100">
                                <h2 data-swiper-parallax="-200" class="fs-1 text-uppercase mb-0">Cookies</h2>
                                <p data-swiper-parallax="-300" class="fs-5 text-capitalize fw-bold">Buy Best Food Here</p>
                                <div  data-swiper-parallax="-400">
                                    <a href="javascript:void(0)" class="btn btn-light rounded-0 btn-sm py-2 px-4"><i class="fa-regular fa-cart-shopping"></i> Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide hero-slider-item">
                    <div class="parallax-bg" data-swiper-parallax="-50%" style="background-image: url('assets/img/hero-slider/image-3.jpeg')"></div>
                    <div class="container">
                        <div class="hero-slide-content-parent">
                            <div class="hero-slide-content" data-swiper-parallax="-100">
                                <h2 data-swiper-parallax="-200" class="fs-1 text-uppercase mb-0">Cookies</h2>
                                <p data-swiper-parallax="-300" class="fs-5 text-capitalize fw-bold">Buy Best Food Here</p>
                                <div  data-swiper-parallax="-400">
                                    <a href="javascript:void(0)" class="btn btn-light rounded-0 btn-sm py-2 px-4"><i class="fa-regular fa-cart-shopping"></i> Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- pagination buttons -->
            <div class="swiper-pagination"></div>

            {{-- progressbar --}}
            <div class="autoplay-progress">
                <svg viewBox="0 0 48 48">
                  <circle cx="24" cy="24" r="20"></circle>
                </svg>
                <span></span>
            </div>
        </div>
    </div>
</section>


@endsection

@push('script')
<script src="{{asset('/assets/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('/assets/js/pages/home.js')}}"></script>
@endpush
