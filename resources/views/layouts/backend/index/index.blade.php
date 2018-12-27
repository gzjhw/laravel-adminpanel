<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>{{ config('app.name') }}</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Styles -->
    @stack('style-dependences')
    <link href="{{ asset('assets/css/backend.css') }}" rel="stylesheet">
    @stack('styles')
</head>
<body class="fixed-sn light-blue-skin">
<header>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar double-nav">
        <div class="float-left">
            <a href="#" data-activates="slide-out" class="button-collapse">
                <i class="fa fa-bars"></i>
            </a>
        </div>
        <div class="breadcrumb-dn mr-auto white-text">
            <p><strong>{{ config('app.name') }}</strong>
                <small> - {{ config('app.version') }}</small>
            </p>
        </div>
        @include('layouts.backend.navigation.top')
    </nav>
    @include('layouts.backend.navigation.sidebar')
</header>
<main>
    <div class="container-fluid">
        @yield('content')
    </div>
</main>
@include('layouts.backend.index.footer')
@stack('script-dependencies')
<script src="{{ asset('assets/js/manifest.js') }}"></script>
<script src="{{ asset('assets/js/vendor.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>

<script src="{{ asset('assets/js/vendor/mdb/mdb.min.js') }}"></script>
<script src="{{ asset('assets/js/admin.js') }}"></script>

@stack('scripts')
</body>
</html>