<!DOCTYPE html>
<html>
<head>

    {{-- meta tags --}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="title" content="Koll.com.ph - Philippines buy and sell website" /> 
    <meta name="description" content="New Buy and Sell Website, Philippines - Sell your 2nd hand items on KOLL.com.ph, buy and sell website. Post free online ads of your used car, mobile phone, furniture, and more.">
    <meta name="keywords" content="New Buy and Sell Website, Philippines, 2nd Hand for sale, Vehicles, Fashion, Pets, Jobs, Electronics, Real Estate, Sports, Toys, Others, For Sale Items, Low Price, Discount" />

    {{-- title --}}
    <title>@yield('title')</title>
    
    @yield('header_assets')

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
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=871265012896339";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
</body>
<!-- Mark Donnie Infantado -->
</html>

























































