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

{{-- hero slider --}}
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
{{-- hero slider end --}}

{{-- new product start --}}
<section class="clearfix py-4 py-lg-5">
    <div class="container">
        <div class="header-title">
            <h4 class="fs-4 text-uppercase">New Products</h4>
            <div>@{{products.length}} items</div>
        </div>
        <div class="swiper new-products">
            <div class="swiper-wrapper mb-5">
                <div class="swiper-slide new-product-item border" v-for="(product, index) in products" :key="product.id">
                    <div class="new-product-images">
                        <div class="status">@{{product.status}}</div>
                        <img :src="'assets/img/new-products/' + product.image" alt="" class="img-fluid" v-if="product.image">
                        <img src="{{asset('/assets/img/new-products/placeholder.jpg')}}" alt="" class="img-fluid" v-else>
                        <div class="action">
                            <button class="btn btn-sm btn-primary rounded-1">
                                <i class="fa-regular fa-heart"></i>
                            </button>
                            <button class="btn btn-sm btn-primary rounded-1">
                                <i class="fa-regular fa-arrow-right-arrow-left"></i>
                            </button>
                            <button class="btn btn-sm btn-primary rounded-1" @click.prevent="showProductDetails">
                                <i class="fa-regular fa-eye"></i>
                            </button>
                        </div>
                    </div>
                    <div class="p-3 text-center text-primary">
                        <div class="text-capitalize text-truncate">@{{ product.name }}</div>
                        <div class="small fw-bold mb-1"><span>৳</span>@{{ parseFloat(product.price).toFixed(2) }}</div>
                        <div class="d-flex justify-content-center align-items-center gap-1 small mb-2">
                            <i class="fa-light fa-star"></i>
                            <i class="fa-light fa-star"></i>
                            <i class="fa-light fa-star"></i>
                            <i class="fa-light fa-star"></i>
                            <i class="fa-light fa-star"></i>
                        </div>
                        <button class="btn btn-sm btn-primary rounded-1 py-2 px-3 text-uppercase"><i class="fa-regular fa-cart-plus"></i> Add To cart</button>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
{{-- new product end --}}


{{-- new collection start --}}
<section class="clearfix py-4 py-lg-5">
    <div class="container">
        <div class="row" style="--bs-gutter-x: 1rem; --bs-gutter-y: 1rem;">
            <div class="col-lg-3">
                <img src="{{asset('/assets/img/new-products/pink-butterfly-cake_415.jpeg')}}" alt="" class="w-100">
            </div>
            <div class="col-lg-9 new-collenction">

                <div class="d-flex align-items-center gap-3 pb-2 border-bottom border-primary mb-3">
                    <div class="text-uppercase fs-5">New Collection</div>
                    <div class="d-flex align-items-center gap-2">
                        <button class="btn btn-sm btn-outline-primary rounded-0 text-uppercase" :class="collectionStatus == 'new-collection' ? 'active' : ''" @click.prevent="newCollectionClass( 'new-collection' )">New collection</button>
                        <button class="btn btn-sm btn-outline-primary rounded-0 text-uppercase" :class="collectionStatus == 'best-selles' ? 'active' : ''" @click.prevent="newCollectionClass( 'best-selles' )">Best sells</button>
                    </div>
                </div>
                <div class="swiper new-collectio-products mb-5">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">Slide 1</div>
                      <div class="swiper-slide">Slide 2</div>
                      <div class="swiper-slide">Slide 3</div>
                      <div class="swiper-slide">Slide 4</div>
                      <div class="swiper-slide">Slide 5</div>
                      <div class="swiper-slide">Slide 6</div>
                      <div class="swiper-slide">Slide 7</div>
                      <div class="swiper-slide">Slide 8</div>
                      <div class="swiper-slide">Slide 9</div>
                      <div class="swiper-slide">Slide 9</div>
                    </div>
                    {{-- <div class="swiper-pagination"></div> --}}
                </div>
            </div>
        </div>
    </div>
</section>
{{-- new collection end --}}



        {{-- Modal Area --}}
<div class="modal fade" id="showproductdetails" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content rounded-0">
            <div class="modal-header py-2 bg-light">
                <h1 class="modal-title fs-5">Product Details</h1>
                <button type="button" class="btn-close shadow-none bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="{{asset('/assets/img/new-products/pink-butterfly-cake_415.jpeg')}}" alt="" class="w-100">
                    </div>
                    <div class="col-sm-6">
                        <h2 class="fs-5">Product title here</h2>
                        <p>Product descritption: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore quidem at delectus repellat! Praesentium nulla molestias esse. Nam neque et assumenda, laborum modi nisi laboriosam?</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@push('script')
<script src="{{asset('/assets/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('/assets/js/pages/home.js')}}"></script>
@endpush
