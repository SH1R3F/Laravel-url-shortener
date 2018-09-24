<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Javascript Required | {{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

        <!-- Scripts -->
        <script src="{{ asset('js/jquery.js') }}"></script>
        <script src="{{ asset('js/bootstrap.js') }}"></script>
        <script src="{{ asset('js/axios.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>

        <!-- Styles -->
        <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet">
        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }
            .content {
                text-align: center;
            }
            .title {
                font-size: 36px;
                padding: 20px;
            }
        </style>
    </head>
    <body>
        @include('layouts.navbar')
        <!-- Content -->
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title">
                    Javascript is disabled in your browser. Enable it to use our services freely.
                </div>
            </div>
        </div><!-- Content -->

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
                            <li class="list-inline-item"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-dribbble"></i></a></li>
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
