<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Log into your account | {{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/axios.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        @include('layouts.navbar')
        <main class="py-4 mt-5">
            @yield('content')
        </main>
    </div>
    <!-- Start footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="links col-md-6 text-left">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item"><a href="termsAndConditions.html">Terms &amp; conditions</a></li>
                        <li class="list-inline-item"><a href="privacyAndPolicy.html">privacy &amp; Policy</a></li>
                    </ul>
                </div>
                <div class="socialmedia col-md-6 text-right">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item"><a href="{{env('GOOGLEPLUS_URL')}}"><i class="fab fa-google-plus-g"></i></a></li>
                        <li class="list-inline-item"><a href="{{env('FACEBOOK_URL')}}"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a href="{{env('TWITTER_URL')}}"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="{{env('LINKEDIN_URL')}}"><i class="fab fa-linkedin-in"></i></a></li>
                        <li class="list-inline-item"><a href="{{env('DRIBBLE_URL')}}"><i class="fab fa-dribbble"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright text-center">
            &copy; copyright 2018
        </div>
    </footer><!-- End footer -->
</body>
</html>
