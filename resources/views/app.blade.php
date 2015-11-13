<!DOCTYPE html>
<html>
<head>

    {{-- meta tags --}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="title" content="Koll.com.ph - Philippines buy and sell website" /> 
    <!-- <meta name="description" content="#1 Buy and Sell Website, Philippines - Sell your 2nd hand items on KOLL.com.ph, buy and sell website. Post free online ads of your used car, mobile phone, furniture, and more."> -->
    <meta name="keywords" content="#1 Buy and Sell Website, Philippines, 2nd Hand for sale, Vehicles, Fashion, Pets, Jobs, Electronics, Real Estate, Sports, Toys, Others, For Sale Items, Low Price, Discount" />

    {{-- title --}}
    <title>@yield('title')</title>
    <meta property="og:title" content="@yield('og-title', 'KOLL.com.ph')" />
    <meta property="og:image" content="@yield('og-image', 'http://koll.com.ph/images/logo-koll.png')" />
    <meta property="og:image:width" content="500" />
    <meta property="og:image:height" content="500" />
    <meta property="og:description" content="@yield('og-description', '#1 Buy and Sell Website, Philippines - Sell your 2nd hand items on KOLL.com.ph, buy and sell website. Post free online ads of your used car, mobile phone, furniture, and more.')" />
    <meta property="og:url" content="@yield('og-url', '{{ Request::url() }}')" />
    <meta property="og:site_name" content="KOLL.com.ph" />

    {{-- css --}}
    @include('partials.css')

    {{-- fonts --}}
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
</head>
<body>

    {{-- header --}}
    @include('partials.header')

    @if (Session::has('message'))
    <div class="flash alert-info positioning">
        <p class="panel-body">
            {{ Session::get('message') }}
        </p>
    </div>
    @endif
    @if ($errors->any())
    <div class='flash alert-danger positioning'>
        <ul class="panel-body">
            @foreach ( $errors->all() as $error )
            <li class="taligncenter">
                {{ $error }}
            </li>
            @endforeach
        </ul>
    </div>
    @endif

    {{-- content --}}
    @yield('content')

    {{-- footer --}}
    @include('partials.footer')

    {{-- js --}}
    @include('partials.javascript')
</body>
<!-- Mark Donnie Infantado -->
</html>

























































