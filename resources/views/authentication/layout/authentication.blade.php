<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    {{-- Heading Content Block --}}
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- CSRF token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- icon -->
        {{-- <link rel="icons" href="{{ asset('') }}"> --}}

        <!-- title -->
        <title>
            @section('title', 'Authentication')
        </title>

        <!-- vendor stylesheet -->
        <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap4.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/components/flash_message_component.css') }}">
        <link rel="stylesheet" href="{{ asset('css/authentication/layout/authentication.css') }}">
        
        <!-- custom stylesheet -->
        @yield('stylesheet')
    </head>
    {{-- Body Content Block --}}
    <body class="nerv-background">
        @if ( session('hasMessage') )
            <section class="flash-message">
                @include('components.flash_message_component', [
                        'canClose'    => true,
                        'messageType' => session('hasMessage')['type'],
                        'message'     => session('hasMessage')['message'],
                    ]
                )
            </section>
        @endif

        <section class="authentication-content-wrapper">
            @yield('content')
        </section>

        <section class="authentication-footer">
            <small>Magi Version 0.1</small>
        </section>

        {{-- Custom Script Block --}}
            <!-- vendor script -->
            <script src="{{ asset('js/vendor/jquery.min.js') }}"></script>
            <script src="{{ asset('js/components/flash_message_component.js') }}"></script>
            <script src="{{ asset('js/vendor/bootstrap4.min.js') }}"></script>
            
            <!-- custom script -->
            @yield('script')
    </body>
</html>