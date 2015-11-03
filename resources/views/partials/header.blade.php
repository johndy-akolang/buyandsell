{{-- header top --}}
<div class="header-top">
    <div class="wrap">

        {{-- list menu  top header --}}
        <div class="cssmenu">
            <ul class="no-js">
                @if (Auth::user())
                    <li>
                        <a class="clicker" >
                            <i class="fa fa-user"></i>
                            {{ Auth::user()->first_name }}
                        </a>
                        <ul class="user-cont-menu">
                            <li><a href="#" class="user-menu"><i class="fa fa-inbox"></i>Inbox</a></li>
                            <li><a href="/item/" class="user-menu"><i class="fa fa-suitcase"></i>Manage Ads</a></li>
                            <li><a href="{{ url('/user/'.Auth::id()) }}" class="user-menu"><i class="fa fa-gear"></i>Account</a></li>
                            <li><a href="#" class="user-menu"><i class="fa fa-money"></i>1000 Credits</a></li>
                        </ul>
                    </li>
                    |
                    <li>
                        <a href="{{ action('LoginController@doLogout') }}">
                            <i class="fa fa-sign-out"></i>
                            Logout
                        </a>
                    </li>
                @else
                    <li>
                        <a href="{{ url('login') }}">
                            <i class="fa fa-sign-in"></i>
                            Sign in
                        </a>
                    </li>
                    |
                    <li>
                        <a href="{{ url('register') }}">
                            <i class="fa fa-file-o"></i>
                            Sign up
                        </a>
                    </li>
                @endif
            </ul>
        </div>

        <div class="clear"></div>
    </div>
</div>

{{-- header bottom --}}
<div class="header-bottom">
    <div class="wrap">

        <div class="header-bottom-left">

            {{-- logo website --}}
            <a class="floatLeft" href="/"><img class="logo-koll" src="{{ asset('/images/logo-koll-beta.png') }}"></a>

            {{-- select category --}}
            <div id="dd" class="wrapper-dropdown-5 floatLeft" tabindex="1">Select by Category
                <ul class="dropdown-select-category">
                    <li>
                        <a href="#">
                            <i class="fa fa-buysellads"></i>
                            Buy and Sell
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-home"></i>
                            Real Estate
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-truck"></i>
                            Vehicles
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-motorcycle"></i>
                            Motorcycle
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-diamond"></i>
                            Fashion
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-lightbulb-o"></i>
                            Electronics
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-futbol-o"></i>
                            Sports
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-bug"></i>
                            Toys
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-github"></i>
                            Pets
                        </a>
                    </li>
                </ul>
            </div>


            {{-- form search --}}
            <div class="search">

                {!! Form::open(['url' => 'partials/header']) !!}

                    {{-- input search --}}
                    {!! Form::text('title', null,
                        array('class' => 'textbox form-control')) !!}

                        

                    <!-- {{-- search submit --}}
                    {!! Form::submit('Search',
                                     array('name' => 'submit')) !!} -->

                    <div id="response"></div>

                {!! Form::close() !!}

            </div>

        </div>

        {{-- container for posr your ads --}}
        <div class="header-bottom-right your-ads-here">

            {{-- button for post your ads here --}}
            {!! Form::submit('Sell your ads here',
                    array('class' => 'button input-blue width251', 'name' => 'postyourads', 'class' => 'btn input-blue', 'id' => 'sellads')) !!}


        </div>
    </div>
</div>



























































