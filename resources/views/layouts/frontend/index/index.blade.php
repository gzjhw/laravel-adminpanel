<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>
    @stack('style-dependences')
    <link href="{{ asset('assets/css/frontend.css') }}" rel="stylesheet">
    <style>

    </style>
    @stack('styles')
</head>
<body>
@include('layouts.frontend.navigation.top')
@if(View::hasSection('carousel'))
    @yield('carousel')
@else
    <div class="mb-5" style="min-height: 35px"><p>&nbsp;</p></div>
@endif

<main>
    @yield('content')
</main>
@include('layouts.frontend.index.footer')
@stack('script-dependencies')
<script src="{{ asset('assets/js/manifest.js') }}"></script>
<script src="{{ asset('assets/js/vendor.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>
<script src="{{ asset('assets/js/vendor/mdb/mdb.min.js') }}"></script>
<script>
    new WOW().init();
</script>
@stack('scripts')
</body>
</html>