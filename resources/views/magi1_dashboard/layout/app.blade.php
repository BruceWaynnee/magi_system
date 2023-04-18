<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- CSRF TOKEN --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- MAGI 1 Dashboard Icon --}}
    <link rel="shortcut icon" href="{{asset('icon/')}}" />

    {{-- title --}}
    <title>
        @section('title', 'MAGI 1 DASHBOARD')
    </title>

    {{-- Sytlesheet --}}
    <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magi1_dashboard/layout/app.css') }}">
    
    {{-- Custom Stylesheet --}}
    @yield('stylesheet')
</head>
<body>
    <div class="magi1-dashboard-content-wrapper">
        <!-- navbar section -->
        <section class="magi1-dashboard-navbar-section">
            <p>navbar</p>
        </section>
        <!-- sidebar section -->
        <section class="magi1-dashboard-sidebar-section">
            @include('magi1_dashboard.partials.sidebar')
        </section>
        <!-- body section -->
        <section class="magi1-dashboard-body-section">
            <p>body</p>
            
            @yield('content')
        </section>
        <!-- footer section -->
        <section class="magi1-dashboard-footer-section">
            <p>footer</p>
        </section>
    </div>

    {{-- Script --}}
    <script src="{{ asset('js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('js/vendor/bootstrap4.min.js') }}"></script>
    <script src="{{ asset('js/magi1_dashboard/layout/app.js') }}"></script>

    {{-- Custom Script --}}
    @yield('script')
</body>
</html>