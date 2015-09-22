<!DOCTYPE html>
<html>
<head>

    {{-- meta tags --}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- title --}}
    <title>@yield('title')</title>

    {{-- css --}}
    @include('partials.css')

    {{-- fonts --}}
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
</head>
<body>
    @if (Session::has('message'))
    <div class="flash alert-info">
        <p class="panel-body">
            {{ Session::get('message') }}
        </p>
    </div>
    @endif
    @if ($errors->any())
    <div class='flash alert-danger'>
        <ul class="panel-body">
            @foreach ( $errors->all() as $error )
            <li>
                {{ $error }}
            </li>
            @endforeach
        </ul>
    </div>
    @endif

    {{-- header --}}
    @include('partials.header')

    {{-- content --}}
    @yield('content')

    {{-- footer --}}
    @include('partials.footer')

    {{-- js --}}
    @include('partials.javascript')
</body>
</html>

























































