<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Technical Writing</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Karla:400,400i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.min.css') }}" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    @include('includes.transnav')
    <div class="call-to-action-wrapper parallax" data-parallax-speed="0.55" data-bg="/img/call-to/call-to-bg-5.jpg"
         style="background-position: center 24.45%; background-image: url(&quot;assets/img/call-to/call-to-bg-5.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="call-to-action-content call-to-action-content--startup">
                        <div class="call-to-action-content-inner">
                            <h2>Myorders </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="app">
        <myorders></myorders>
    </div>

    @include('includes.footer')
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
    <script src="{{ asset('js/app.min.js') }}" defer></script>
</body>

</html>
