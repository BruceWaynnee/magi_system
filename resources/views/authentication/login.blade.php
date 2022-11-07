@extends('authentication.layout.authentication')

{{-- title --}}
@section('title', 'Nerv Login')

{{-- custom stylesheet --}}
@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/authentication/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/loading_component.css') }}">
@endsection

{{-- BEGIN:: Login Content --}}
@section('content')
    <!-- loading component content -->
    @include('components.loading_component', [
            'unique_element_id' => 'lc-001',
        ]
    )
    <!-- loading component content -->
    <div class="login-content-wrapper">
        <!-- magi gif -->
        <div class="magi-gif-container">
            <div class="magi-gif-wrapper">
                <img src="{{ asset('gif/magi1-1.gif') }}" alt="magi-gif">
            </div>
        </div>
        <!-- login block -->
        <div class="login-wrapper-container">
            <p id="welcome-to-nerv-header">Welcome To Nerv</p>
            <form class="login-form" action="{{ route('magi1-login') }}" method="POST" autocomplete="off">
                @csrf
                <div class="form-group">
                    <div class="col custom-row">
                        <label class="color-rgb-green" for="username">Username</label>
                        <input type="text" name="username" class="form-control ml-4" id="username" value="" required>
                    </div>
                    <div class="col custom-row">
                        <label class="color-rgb-green" for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" value="" required>
                    </div>
                    <div class="col custom-row mt-3">
                        <input class="btn btn-outline-danger w-100 font-weight-bold" type="submit" value="=> PROCESS">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
{{-- END:: Login Content --}}

{{-- custom script --}}
@section('script')
    <script src="{{ asset('js/components/loading_component.js') }}"></script>
    <script src="{{ asset('js/utils/input_validations.js') }}"></script>
    <script src="{{ asset('js/authentication/login.js') }}"></script>
    <script>
        $(document).ready(function(){
            loginFeatureMethods();
        });
    </script>
@endsection
