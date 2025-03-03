<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@stack('title', 'Welcome Foodcart') - {{ config('app.name', 'Foodcart') }}</title>
        <link rel="shortcut icon" href="{{asset('/assets/img/favicon.ico')}}" type="image/x-icon">

        @stack('metacontent')

        <!-- Open Graph Meta Tags (For Social Sharing) -->
        <meta property="og:title" content="FoodCart - Fresh & Delicious Food Delivered to Your Doorstep">
        <meta property="og:description" content="Order fresh and tasty food online with FoodCart. Fast delivery and a wide range of delicious options!">
        <meta property="og:image" content="{{asset('/assets/img/foodcart-preview.jpg')}}">
        <meta property="og:url" content="https://yourwebsite.com">
        <meta property="og:type" content="website">

        <!-- Twitter Card Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="FoodCart - Fresh & Delicious Food Delivered to Your Doorstep">
        <meta name="twitter:description" content="Enjoy tasty and fresh food delivered fast. Order now from FoodCart!">
        <meta name="twitter:image" content="{{asset('/assets/img/foodcart-preview.jpg')}}">

        <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">
        @stack('style')
    </head>
    <body class="antialiased user-select-none">
        @include('layouts.navigation')

        <main class="main-wrapper" id="app">
            @yield('content')
        </main>

        @include('layouts.footer')


        {{-- site script --}}
        <script src="{{asset('/assets/js/vue.global.js')}}"></script>
        <script src="{{asset('/assets/js/axios.min.js')}}"></script>
        <script src="{{asset('/assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('/assets/js/header.js')}}" type="module"></script>
        @stack('script')
    </body>
</html>
