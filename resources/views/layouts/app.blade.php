<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Argon Dashboard') }}</title>
    <!-- Favicon -->
    <link href="{{ asset('/img/brand/favicon.png') }}" rel="icon"
        type="image/png">
    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700"
        rel="stylesheet">
    <!-- Extra details for Live View on GitHub Pages -->

    <!-- Icons -->
    <link href="{{ asset('/vendor/nucleo/css/nucleo.css') }}"
        rel="stylesheet">
    <link
        href="{{ asset('/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}"
        rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="{{ asset('/css/argon.css?v=1.0.0') }}"
        rel="stylesheet">
        @yield('styles')
</head>

<body class="{{ $class ?? '' }}">
    @auth()
        <form id="logout-form" action="{{ route('logout') }}" method="POST"
            style="display: none;">
            @csrf
        </form>
        <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
            @include('layouts.navbars.sidebar')
          </nav>
    @endauth

    <div class="main-content">
        @include('layouts.navbars.navbar')
        @yield('content')
    </div>

    @guest()
        @include('layouts.footers.guest')
    @endguest

    <script src="{{ asset('/vendor/jquery/dist/jquery.min.js') }}"></script>
    @yield('scripts')

    <script
        src="{{ asset('/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}">
    </script>

    @stack('js')

    <!-- Argon JS -->
    <script src="{{ asset('/js/argon.js?v=1.0.0"') }}></script>
    
    </body>
</html>
