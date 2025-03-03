@extends('layouts.app')

@push('title', 'Fresh & Delicious Food Delivered to Your Doorstep')

@push('metacontent')

<meta name="description" content="FoodCart is your one-stop online food marketplace, offering fresh and delicious meals delivered straight to your home. Browse our menu and order now!">
<meta name="keywords" content="food delivery, online food shopping, fresh meals, restaurant delivery, FoodCart">
<meta name="author" content="FoodCart Team">

@endpush

@push('style')
    <link rel="stylesheet" href="{{asset('/assets/swiper/swiper-bundle.min.css')}}">
@endpush

@section('content')

<section class="clearfix">
    <div class="container">
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide py-4">Slide 1</div>
              <div class="swiper-slide py-4">Slide 2</div>
              <div class="swiper-slide py-4">Slide 3</div>
              ...
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
          </div>
    </div>
</section>


@endsection

@push('script')
<script src="{{asset('/assets/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('/assets/js/pages/home.js')}}"></script>
@endpush
