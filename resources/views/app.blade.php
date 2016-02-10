<!DOCTYPE html>
<html>
<head>

    <!-- meta tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="language" content="en" />
    <meta http-equiv="X-UA-Compatible" content="IE-edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <meta name="title" content="Koll.com.ph | New and Free Classified Ads and Buy and Sell Website Philippines" /> 
    <meta name="description" content="New and Free Classified Ads and Buy and Sell Website Philippines | Sell your 2nd hand items on KOLL.com.ph, buy and sell website. Post free online ads of your used car, classified ads, mobile phone, furniture, and more.">
    <meta name="keywords" content="New and Free Classified Ads and Buy and Sell Website Philippines, classified ads, 2nd Hand for sale, Vehicles, Fashion, Pets, Jobs, Electronics, Real Estate, Sports, Toys, Others, For Sale Items, Low Price, Discount" />

    <!-- title -->
    <title>@yield('title')</title>
    
    @yield('header_assets')

    <!-- css -->
    @include('partials.css')

    <!-- fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <!-- google analytics -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-73328315-1', 'auto');
      ga('send', 'pageview');

    </script>

</head>
<body>

    <!-- header -->
    @include('partials.header')

    <!-- show message for successfully display -->
    @if (Session::has('message'))
    <div class="flash alert-info positioning">
        <p class="panel-body">
            {{ Session::get('message') }}
        </p>
    </div>
    @endif

    <!-- show error or failed display --> 
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

    <!-- content -->
    @yield('content')

    <!-- footer -->
    @include('partials.footer')

    <!-- js -->
    @include('partials.javascript')

    <!-- facebook api for like box -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=871265012896339";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <!-- facebook api for share content -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '1239890536027330',
          xfbml      : true,
          version    : 'v2.5'
        });
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>
   <!--  <div
  class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="true">
</div> -->
</body>
<!-- Mark Donnie Infantado -->
</html>

























































