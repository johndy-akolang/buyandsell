<!DOCTYPE html>
<html>
<head>

    {{-- meta tags --}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- title --}}
    <title>@yield('title')</title>

    {{-- font awesome --}}
    <link href="{{ asset('/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

    {{-- extended css --}}
    <link href="{{ asset('/css/default.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/nivo-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/etalage.css') }}" rel="stylesheet">

    {{-- dropzone css --}}
    <link href="{{ asset('/css/dropzone.css') }}" rel="stylesheet">

    {{-- css style --}}
    <link href="{{ asset('/css/global.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

    {{-- javascript vendor --}}
    <script src="{{ asset('/js/vendor/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/vendor/jquery.nivo.slider.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/vendor/jquery.etalage.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/vendor/modernizr.custom.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/vendor/cbpHorizontalMenu.min.js') }}" type="text/javascript"></script>

    {{-- dropzone upload image --}}
    <script src="{{ asset('/js/vendor/dropzone.js') }}" type="text/javascript"></script>

    {{-- javascript --}}
    <script src="{{ asset('/js/global.js') }}" type="text/javascript"></script>


</head>

<body>

    {{-- header --}}
    @include('partials.header')

    {{-- content --}}
    @yield('content')

    {{-- footer --}}
    @include('partials.footer')

</body>
</html>

























































