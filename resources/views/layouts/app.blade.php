<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Technical Writing</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/app.min.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/momentjs/2.13.0/moment.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.min.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

        @yield('content')
        <!-- Start Off Canvas Menu Wrapper -->
        <aside class="off-canvas-wrapper">
            <div class="off-canvas-inner">
                <!-- Start Off Canvas Content Wrapper -->
                <div class="off-canvas-content">
                    <!-- Off Canvas Header -->
                    <div class="off-canvas-header">
                        <div class="logo-area"><a href="index.html"><img src="img/logo.png" alt="Logo"></a></div>
                        <div class="close-action"><button class="btn-close"><i class="pe-7s-close"></i></button></div>
                    </div>
                    <div class="off-canvas-item">
                        <!-- Start Mobile Menu Wrapper -->
                        <div class="res-mobile-menu">
                            <!-- Note Content Auto Generate By Jquery From Main Menu -->
                        </div><!-- End Mobile Menu Wrapper -->
                    </div>
                </div><!-- End Off Canvas Content Wrapper -->
            </div>
        </aside>
        <!-- End Off Canvas Menu Wrapper -->
    </div>
</body>
</html>
