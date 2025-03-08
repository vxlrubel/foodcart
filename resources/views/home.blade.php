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
<section class="clearfix py-4 py-lg-5 bg-light">
    <div class="container py-xl-4">
        <div class="collection-product">
            <div>
                <img src="{{asset('/assets/img/new-products/pink-butterfly-cake_415.jpeg')}}" alt="" class="w-100">
            </div>
            <div>
                <div class="border-bottom pb-2 border-primary mb-3">
                    <div class="d-flex gap-2">
                        <div class="text-uppercase">New Collection</div>
                        <div class="d-flex gap-2 justify-content-between" style="width: calc(100% - 50px)">
                            <div class="d-flex flex-wrap gap-2">
                                <button
                                    v-for="(status, index) in statuses.slice(0, 2)"
                                    class="btn btn-sm py-2 px-3 rounded-0 btn-outline-primary text-capitalize"
                                    :key="index"
                                    @click="filterProducts(status)"
                                    :class="['filter-btn', { active: activeStatus === status }]"
                                >
                                    @{{ formatStatus(status) }}
                                </button>
                            </div>
                            <div class="d-flex align-items-center gap-1">
                                <button class="btn btn-primary btn-sm rounded-0 py-2 px-3 prev-slide" @click="prevSlide"><i class="fa-regular fa-chevron-left"></i></button>
                                <button class="btn btn-primary btn-sm rounded-0 py-2 px-3 next-slide" @click="nextSlide"><i class="fa-regular fa-chevron-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper product-slider2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide border bg-white" v-for="product in filteredProducts" :key="product.name">
                            <div class="ratio ratio-16x9">
                                <div class="overflow-hidden bg-light">
                                    <img :src="product.image" :alt="product.name" class="product-image">
                                </div>
                            </div>
                            <div class="p-3">
                                <a href="javascript:void(0)" class="text-dark text-decoration-none text-uppercase d-block text-truncate">@{{ product.name }}</a>
                                <div class="fw-bold small">৳</span>@{{ parseFloat(product.price).toFixed(2) }}</div>
                                <div class="d-flex align-items-center gap-1 small mb-2">
                                    <i class="fa-light fa-star"></i>
                                    <i class="fa-light fa-star"></i>
                                    <i class="fa-light fa-star"></i>
                                    <i class="fa-light fa-star"></i>
                                    <i class="fa-light fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- new collection end --}}

{{-- featured category1 --}}
<section class="clearfix py-4 py-lg-5">
    <div class="container py-xl-4">
        <div class="header-title">
            <h4 class="fs-4 text-uppercase">Featured Categories</h4>
            <div>6 items</div>
        </div>
        <div class="swiper featured-categories">
            <div class="swiper-wrapper">
              <div class="swiper-slide" v-for="(category, index) in categories" :key="category.id">
                <a href="javascript:void(0)" class="d-block w-100 position-relative category-item text-dark text-decoration-none rounded-2 overflow-hidden">
                    <img :src="'assets/img/new-products/' + category.image" alt="" class="img-fluid" v-if="category.image">
                    <img src="{{asset('/assets/img/new-products/placeholder.jpg')}}" alt="" class="img-fluid" v-else>
                    <span class="position-absolute end-0 start-0 bottom-0 px-3 py-2 d-block text-truncate small text-uppercase">@{{category.name}}</span>
                </a>
              </div>
            </div>
        </div>
    </div>
</section>
{{-- featured category end --}}

<section class="clearfix py-4 py-lg-5">
    <div class="container py-xl-4">
        <div class="swiper promo-products-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide bg-white rounded-2 overflow-hidden">
                    <div class="ratio ratio-4x3 overflow-hidden">
                        <div>
                            <img src="{{asset('/assets/img/promo-product-slider/Promotion-products-4.jpeg')}}" class="w-100 h-100 object-fit-cover">
                        </div>
                    </div>
                    <div class="p-3 text-center">
                        <h3 class="fs-2 text-uppercase mb-0">Pink Glazed</h3>
                        <div class="text-capitalize fs-5">Buy the best food here</div>
                        <a href="javascript:void(0)" class="btn btn-sm btn-primary rounded-1 py-2 px-4 mt-3"><i class="fa-regular fa-cart-shopping"></i> Shop Now</a>
                    </div>
                </div>
                <div class="swiper-slide bg-white rounded-2 overflow-hidden">
                    <div class="ratio ratio-4x3 overflow-hidden">
                        <div>
                            <img src="{{asset('/assets/img/promo-product-slider/Promotion-products-3.jpeg')}}" class="w-100 h-100 object-fit-cover">
                        </div>
                    </div>
                    <div class="p-3 text-center">
                        <h3 class="fs-2 text-uppercase mb-0">Fresh cookies</h3>
                        <div class="text-capitalize fs-5">Buy the best food here</div>
                        <a href="javascript:void(0)" class="btn btn-sm btn-primary rounded-1 py-2 px-4 mt-3"><i class="fa-regular fa-cart-shopping"></i> Shop Now</a>
                    </div>
                </div>
                <div class="swiper-slide bg-white rounded-2 overflow-hidden">
                    <div class="ratio ratio-4x3 overflow-hidden">
                        <div>
                            <img src="{{asset('/assets/img/promo-product-slider/Promotion-products-3.jpeg')}}" class="w-100 h-100 object-fit-cover">
                        </div>
                    </div>
                    <div class="p-3 text-center">
                        <h3 class="fs-2 text-uppercase mb-0">Pieces Cake</h3>
                        <div class="text-capitalize fs-5">Buy the best food here</div>
                        <a href="javascript:void(0)" class="btn btn-sm btn-primary rounded-1 py-2 px-4 mt-3"><i class="fa-regular fa-cart-shopping"></i> Shop Now</a>
                    </div>
                </div>
                <div class="swiper-slide bg-white rounded-2 overflow-hidden">
                    <div class="ratio ratio-4x3 overflow-hidden">
                        <div>
                            <img src="{{asset('/assets/img/promo-product-slider/Promotion-products-4.jpeg')}}" class="w-100 h-100 object-fit-cover">
                        </div>
                    </div>
                    <div class="p-3 text-center">
                        <h3 class="fs-2 text-uppercase mb-0">Pink Glazed</h3>
                        <div class="text-capitalize fs-5">Buy the best food here</div>
                        <a href="javascript:void(0)" class="btn btn-sm btn-primary rounded-1 py-2 px-4 mt-3"><i class="fa-regular fa-cart-shopping"></i> Shop Now</a>
                    </div>
                </div>
                <div class="swiper-slide bg-white rounded-2 overflow-hidden">
                    <div class="ratio ratio-4x3 overflow-hidden">
                        <div>
                            <img src="{{asset('/assets/img/promo-product-slider/Promotion-products-3.jpeg')}}" class="w-100 h-100 object-fit-cover">
                        </div>
                    </div>
                    <div class="p-3 text-center">
                        <h3 class="fs-2 text-uppercase mb-0">Fresh cookies</h3>
                        <div class="text-capitalize fs-5">Buy the best food here</div>
                        <a href="javascript:void(0)" class="btn btn-sm btn-primary rounded-1 py-2 px-4 mt-3"><i class="fa-regular fa-cart-shopping"></i> Shop Now</a>
                    </div>
                </div>
                <div class="swiper-slide bg-white rounded-2 overflow-hidden">
                    <div class="ratio ratio-4x3 overflow-hidden">
                        <div>
                            <img src="{{asset('/assets/img/promo-product-slider/Promotion-products-3.jpeg')}}" class="w-100 h-100 object-fit-cover">
                        </div>
                    </div>
                    <div class="p-3 text-center">
                        <h3 class="fs-2 text-uppercase mb-0">Pieces Cake</h3>
                        <div class="text-capitalize fs-5">Buy the best food here</div>
                        <a href="javascript:void(0)" class="btn btn-sm btn-primary rounded-1 py-2 px-4 mt-3"><i class="fa-regular fa-cart-shopping"></i> Shop Now</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

{{-- summer collection start --}}

<section class="clearfix py-4 py-lg-5" style="background-color: hsla(var(--hue, 12), var(--saturation, 67%), var(--lightness, 23%), 0.05)">
    <div class="container py-xl-4">
        <div class="collection-product">
            <div>
                <img src="{{asset('/assets/img/new-products/pink-butterfly-cake_415.jpeg')}}" alt="" class="w-100">
            </div>
            <div>
                <div class="border-bottom pb-2 border-primary mb-3">
                    <div class="d-flex gap-2">
                        <div class="text-uppercase">summer collection</div>
                        <div class="d-flex gap-2 justify-content-between" style="width: calc(100% - 50px)">
                            <div class="d-flex flex-wrap gap-2">
                                <button
                                    v-for="(status, index) in statuses"
                                    class="btn btn-sm py-2 px-3 rounded-0 btn-outline-primary text-capitalize"
                                    :key="index"
                                    @click="filterProducts(status)"
                                    :class="['filter-btn', { active: activeStatus === status }]"
                                >
                                    @{{ formatStatus(status) }}
                                </button>
                            </div>
                            <div class="d-flex align-items-center gap-1">
                                <button class="btn btn-primary btn-sm rounded-0 py-2 px-3 prev-slide" @click="prevSlide"><i class="fa-regular fa-chevron-left"></i></button>
                                <button class="btn btn-primary btn-sm rounded-0 py-2 px-3 next-slide" @click="nextSlide"><i class="fa-regular fa-chevron-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper product-slider2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide border bg-white" v-for="product in filteredProducts" :key="product.name">
                            <div class="ratio ratio-16x9">
                                <div class="overflow-hidden bg-light">
                                    <img :src="product.image" :alt="product.name" class="product-image">
                                </div>
                            </div>
                            <div class="p-3">
                                <a href="javascript:void(0)" class="text-dark text-decoration-none text-uppercase d-block text-truncate">@{{ product.name }}</a>
                                <div class="fw-bold small">৳</span>@{{ parseFloat(product.price).toFixed(2) }}</div>
                                <div class="d-flex align-items-center gap-1 small mb-2">
                                    <i class="fa-light fa-star"></i>
                                    <i class="fa-light fa-star"></i>
                                    <i class="fa-light fa-star"></i>
                                    <i class="fa-light fa-star"></i>
                                    <i class="fa-light fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>
{{-- summer collection end --}}

{{-- blog section --}}
<section class="clearfix py-4 py-lg-5">
    <div class="container py-xl-4">
        <div class="header-title">
            <h4 class="fs-4 text-uppercase">latest blog</h4>
            <div><a href="javascript:void(0)" class="text-decoration-none d-inline-block text-primary text-uppercase"><i class="fa-solid fa-link"></i> View all Posts</a></div>
        </div>

        <div class="row" style="--bs-gutter-x: 1rem; --bs-gutter-y: 1rem;">
            <div class="col-sm-6 col-lg-3">
                <div class="border rounded-2 overflow-hidden">
                    <div class="ratio ratio-4x3">
                        <div>
                            <img src="{{asset('/assets/img/blogs/convincing-the-potential-customers-to-buy_400.png')}}" alt="" class="w-100 h-100 object-fit-cover">
                        </div>
                    </div>
                    <div class="p-3 p-md-4 bg-light">
                        <div class="text-primary small">January 26, 2025(0)</div>
                        <a href="javascript:void(0)" class="d-block text-dark text-decoration-none fs-5 m-0 text-truncate">Convincing the potential customers to buy</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="border rounded-2 overflow-hidden">
                    <div class="ratio ratio-4x3">
                        <div>
                            <img src="{{asset('/assets/img/blogs/why-your-online-store-needs-a-wish-list_400.png')}}" alt="" class="w-100 h-100 object-fit-cover">
                        </div>
                    </div>
                    <div class="p-3 p-md-4 bg-light">
                        <div class="text-primary small">January 25, 2025(0)</div>
                        <a href="javascript:void(0)" class="d-block text-dark text-decoration-none fs-5 m-0 text-truncate">Why your online store needs a wish list</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="border rounded-2 overflow-hidden">
                    <div class="ratio ratio-4x3">
                        <div>
                            <img src="{{asset('/assets/img/blogs/how-a-blog-can-help-your-growing-e-commerce-business_400.png')}}" alt="" class="w-100 h-100 object-fit-cover">
                        </div>
                    </div>
                    <div class="p-3 p-md-4 bg-light">
                        <div class="text-primary small">January 25, 2025(0)</div>
                        <a href="javascript:void(0)" class="d-block text-dark text-decoration-none fs-5 m-0 text-truncate">How a blog can help your growing e-Commerce business</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="border rounded-2 overflow-hidden">
                    <div class="ratio ratio-4x3">
                        <div>
                            <img src="{{asset('/assets/img/blogs/convincing-the-potential-customers-to-buy_400.png')}}" alt="" class="w-100 h-100 object-fit-cover">
                        </div>
                    </div>
                    <div class="p-3 p-md-4 bg-light">
                        <div class="text-primary small">January 26, 2025(0)</div>
                        <a href="javascript:void(0)" class="d-block text-dark text-decoration-none fs-5 m-0 text-truncate">Convincing the potential customers to buy</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
{{-- blog section end --}}

{{-- menufacturers start --}}
<section class="clearfix py-4 py-lg-5" style="background-color: hsla(var(--hue, 12), var(--saturation, 67%), var(--lightness, 23%), 0.05);">
    <div class="container py-xl-4">
        <div class="header-title">
            <h4 class="fs-4 text-uppercase">Manufacturers</h4>
            <div>( 1 Items )</div>
        </div>

        <div class="swiper menufacturers-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide border p-3 bg-white rounded-2 overflow-hidden" v-for="(item, index) in Array.from({ length: 16 })" :key="index">
                    <div class="ratio ratio-21x9">
                        <div class="d-flex align-items-center">
                            <img src="/assets/img/sandra-foods_415.jpeg" class="d-block w-100">
                        </div>
                    </div>
                    <hr>
                    <a href="javascript:void(0)" class="btn btn-primary btn-sm rounded-1 d-block w-100 py-2">Sandra foods</a>
                </div>
            </div>
        </div>

    </div>
</section>
{{-- menufacturers end --}}

{{-- support section --}}
<section class="clearfix py-4 py-lg-5 bg-light">
    <div class="container py-xl-4">
        <div class="row" style="--bs-gutter-x: 1rem; --bs-gutter-y: 1rem;">
            <div class="col-sm-6 col-lg-3">
                <div class="border p-3 bg-white rounded-2 h-100">
                    <div class="row align-items-center" style="--bs-gutter-x: 1rem;">
                        <div class="col-3">
                            <img src="{{asset('/assets/img/supports/1.png')}}" class="w-100">
                        </div>
                        <div class="col-9">
                            <h4 class="fs-5 text-capitalize mb-1">Support 24/7</h4>
                            <span class="small">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="border p-3 bg-white rounded-2 h-100">
                    <div class="row align-items-center" style="--bs-gutter-x: 1rem;">
                        <div class="col-3">
                            <img src="{{asset('/assets/img/supports/2.png')}}" class="w-100">
                        </div>
                        <div class="col-9">
                            <h4 class="fs-5 text-capitalize mb-1">30 Day Return Policy</h4>
                            <span class="small">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="border p-3 bg-white rounded-2 h-100">
                    <div class="row align-items-center" style="--bs-gutter-x: 1rem;">
                        <div class="col-3">
                            <img src="{{asset('/assets/img/supports/3.png')}}" class="w-100">
                        </div>
                        <div class="col-9">
                            <h4 class="fs-5 text-capitalize mb-1">Worldwide Shipping</h4>
                            <span class="small">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="border p-3 bg-white rounded-2 h-100">
                    <div class="row align-items-center" style="--bs-gutter-x: 1rem;">
                        <div class="col-3">
                            <img src="{{asset('/assets/img/supports/4.png')}}" class="w-100">
                        </div>
                        <div class="col-9">
                            <h4 class="fs-5 text-capitalize mb-1">Free Delivery</h4>
                            <span class="small">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- support section end --}}

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
