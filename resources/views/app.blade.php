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

    {{-- fonts --}}
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

    {{-- angular --}}
    {{--<script src="{{ asset('/node_modules/angular/angular.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/node_modules/angular/angular-animate.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/node_modules/angular/angular-route.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/node_modules/angular/ui-comments-0.1.3-SNAPSHOT.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/node_modules/angular/typehead.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/node_modules/angular/commenter.js') }}" type="text/javascript"></script>--}}

    {{-- javascript vendor --}}
    <script src="{{ asset('/js/vendor/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/vendor/jquery.nivo.slider.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/vendor/jquery.etalage.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/vendor/modernizr.custom.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/vendor/cbpHorizontalMenu.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/vendor/jquery.pageparser-0.1.2.min.js') }}" type="text/javascript"></script>

    {{-- dropzone upload image --}}
    <script src="{{ asset('/js/vendor/dropzone.js') }}" type="text/javascript"></script>

    {{-- javascript --}}
    <script src="{{ asset('/js/global.js') }}" type="text/javascript"></script>


</head>

<body class="ng-scope" data-ng-controller="DemoCtrl">

    {{-- comment template --}}
   {{-- <script type="text/ng-template">
        <div class="panel panel-default comment">
            <div class="panel-heading comment-header">
                <button ng-if="comment.children" class="fa-2x clear-square fa"
                        ng-class="{'fa-minus-square': !collapsed, 'fa-plus-square': collapsed}"
                        title="toggle children" ng-click="collapse()"></button>
                <button ng-if="!comment.children" class="fa-2x fa clear-square"></button>
                <h4 class="comment-user">
                    <span class="comment-username" ng-if="!comment.profileUrl">{{comment.name}}</span>
                    <a class="comment-username" ng-if="comment.profileUrl" ng-href="{{comment.profileUrl}}"
                           title="{{comment.name}}">{{comment.name}}</a>
                    <small class="comment-date" ng-if="comment.date" title="{{comment.date | calendar}}">
                    {{comment.date | timeago}}
                    </small>
                </h4>
                <img class="comment-avatar" ng-if="comment.avatarUrl" ng-src="{{comment.avatarUrl}}"
                     alt="{{comment.name}}" />
            </div>
            <div class="comment-body panel-body" ng-bind-html="comment.text"></div>
            <div comments-transclude></div>
            <commenter action="addChildComment" toggle="true"></commenter>
        </div>
    </script>

    <script type="text/ng-template">
        <div class="comments">
            <comment ng-repeat="comment in comments" comment-data="comment"></comment>
        </div>
    </script>--}}

    {{-- header --}}
    @include('partials.header')

    {{-- content --}}
    @yield('content')

    {{-- footer --}}
    @include('partials.footer')

</body>
</html>

























































