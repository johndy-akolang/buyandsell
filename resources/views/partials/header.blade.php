{{-- header top --}}
<div class="header-top">
    <div class="wrap">

        {{-- list menu  top header --}}
        <div class="cssmenu">
            <ul class="no-js">
                {{--<li>
                    <a href="/login">
                        <i class="fa fa-sign-in"></i>
                        Sign in
                    </a>
                </li>
                |
                <li>
                    <a href="/register">
                        <i class="fa fa-file-o"></i>
                        Sign up
                    </a>
                </li>--}}
                <li>
                    <a class="clicker" >
                        <i class="fa fa-user"></i>
                        mark donnie
                    </a>
                    <ul class="user-cont-menu">
                        <li><a href="#" class="user-menu"><i class="fa fa-inbox"></i>Inbox</a></li>
                        <li><a href="/item/manageitem" class="user-menu"><i class="fa fa-suitcase"></i>Manage Ads</a></li>
                        <li><a href="#" class="user-menu"><i class="fa fa-gear"></i>Account</a></li>
                    </ul>
                </li>
                |
                <li>
                    <a href="/login">
                        <i class="fa fa-sign-out"></i>
                        Logout
                    </a>
                </li>
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
            <a class="floatLeft" href="/"><img class="" src="{{ asset('/images/logo-buyitsellit.png') }}"></a>

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

                {!! Form::open() !!}

                    {{-- input search --}}
                    {!! Form::text('s', '',
                        array('class' => 'textbox form-control', 'value' => 'Search',
                              'onblur' => 'if (this.value == \'\') {this.value = \' Search \';}',
                              'onfocus' => 'this.value = \'\' ')) !!}

                    {{-- search submit --}}
                    {!! Form::submit('submit',
                                     array('id' => 'submit', 'name' => 'submit')) !!}

                    <div id="response"></div>

                {!! Form::close() !!}

            </div>

        </div>

        {{-- container for posr your ads --}}
        <div class="header-bottom-right your-ads-here">

            {{-- button for post your ads here --}}
            {!! Form::submit('Sell your ads here',
                    array('class' => 'button input-blue width251', 'name' => 'postyourads', 'class' => 'btn input-blue')) !!}


        </div>
    </div>
</div>



























































