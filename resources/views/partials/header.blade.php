{{-- header top --}}
<div class="header-top">
    <div class="wrap">

        {{-- logo website --}}
        <a class="res-logo floatLeft" href="{{ route('home') }}" title="Koll.com.ph"><img class="logo-koll" src="{{ asset('/images/logo-koll2.png') }}" alt="Koll.com.ph" title="Koll.com.ph">.</a>

        <div class="cssmenu">
            @if (Auth::user())
            <ul>
                <li><a href="{{ asset('about') }}" class="k-about dropdown-toggle">About</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-user"></i>
                        <!--<img class="prof_img img" src="{{ asset(Auth::user()->profilepic) }}">-->
                        {{ Auth::user()->first_name }}
                        <i class="s-arrow-down ml-10 fa fa-sort-desc"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('message/inbox') }}" class="user-menu"><i class="fa fa-inbox"></i>Inbox</a></li>
                        <li><a href="{{ route('user-items') }}" class="user-menu"><i class="fa fa-suitcase"></i>Manage Ads</a></li>
                        <li><a href="{{ url('/account/user/'.Auth::id()) }}" class="user-menu"><i class="fa fa-gear"></i>Account</a></li>
                        <li><a href="#" class="user-menu"><i class="fa fa-money"></i>0 Credit</a></li>
                        <li><a href="{{ route('user-logout') }}" class="user-menu"><i class="fa fa-sign-out"></i>Logout</a></li>
                    </ul>
                </li>
            </ul>
            @else
            <ul class="member-actions floatLeft">
                <li><a href="{{ asset('about') }}" class="k-about">About</a>
                </li>
                <li>
                    <a class="login" href="{{ route('user-login') }}">
                        <i class="fa fa-sign-in"></i>
                        Log in
                    </a>
                </li>
                <li>
                    <a class="c-fff btn input-green button input-blue"  style="background-color:#00A964 !important" href="{{ route('user-register') }}">
                        <i class="fa fa-file-o"></i>
                        Sign up
                    </a>
                </li>
            </ul>
            @endif
        </div>

        <div class="clear"></div>
    </div>
</div>
<div class="header-top" style="background:#00A964 !important;">
    
                  <div class="search" style="margin: 0 160px ; border-color: #00A964; background:#00A964 !important">
                 
                <form class="navbar-form" role="search" action="{{ route('search') }}">

                    <div class="form-group" style="display:inline;">

                        <div class="input-group" >
                            {{-- Double curly parantheses auto escape the provided string, so it's safe to use old('q') below directly --}}
                              <!--Category Select-->
                                                <!-- roman02/08/2017 -->
                                                <!--<form name="Categories" action="#" method="POST">   
                                                <select name="Categories"> 
                                               
             
                                                 <option value=""> Select Categories</option>
                                                <option value=""> Services </option> 
                                               <option value=""> Food & Beverages </option> 
                                                <option value=""> Beauty & Personal Care Products</option>
                                                <option value=""> Health & Medical </option>   
                                                <option value="Cars and Vehicles">Cars and Vehicles </option>
                                                 <option value=""> Automobile & Transportations </option>
                                                <option value="Cheese">Real State</option>
                                                <option value="Gadgets">Gadgets</option>
                                                <option value="Gadgets">Birthday Event & Special Packages</option>
                                                <option value="Business and Earning Opportunities"> Business & Earning Opportunities </option>
                                                <option value="Travel Agencies">Travel Agencies</option>
                                                    <option value="Mobile Phones and Tables">Mobile Phones & Tablets</option>
                                                    <option value="Computers">Computer Services</option>
                                                    <option value=""> Software Products/Application Installer </option>
                                                    <option value="Mobile Games"> Mobile Games</option>
                                                    <option value="">Multimedia & Telecommunications</option>
                                                    <option value="Appliances"> Appliances</option>
                                                    <option value="Home Decorations"> Home Decorations</option>
                                                    
                                                    <option value=""> Boutiques </option>
                                                    <option value=""> Foods & Restaurants </option>
                                                    <option value=""> RTW Products</option>
                                                    <option value=""> Visual Art Designs</option>
                                                    <option value=""> Public Announcement and Bloggings</option>
                                                    <option value=""> Weather Forecast</option>
                                                    <option value=""> Consumer Electronics</option>
                                                    <option value=""> Pets & Animals</option>
                                                    <option value=""> Home & Furnitures</option>
                                                    <option value=""> Fashion & Trends</option>
                                                    <option value=""> Apparel</option>
                                                    <option value=""> Bags, Shoes & Accessories </option>
                                                    <option value=""> Music & Instruments</option>
                                                    <option value=""> Agriculture Products/Machineries</option>
                                                    <option value=""> Agriculture Products/Poultry & Livestock</option>
                                                    <option value=""> Flowers & Gardenings</option>
                                                    <option value=""> Agriculture Products/Machineries</option>
                                                    <option value=""> Agriculture Products/Land Scaping</option>
                                                     <option value=""> Agriculture Products/Fisheries</option>
                                                    <option value=""> Health & Fitness</option>
                                                    <option value=""> Leisure & Hotel Accommodations</option>
                                                    <option value=""> Tourist Destinations</option>
                                                    <option value=""> Toy & Collections</option>
                                                    <option value=""> Law Firm</option>
                                                    <option value=""> Private Sector Business</option>
                                                    <option value=""> Manufacturing</option>
                                                   
                                                    <option value=""> Small Enterprises </option>
                                                    <option value=""> Public Institutions</option>
                                                    <option value=""> Government Services</option>
                                                    <option value=""> Event & Seminars</option> 
                                                    <option value=""> Sport Aficionado & Entertainment </option>
                                                    <option value=""> Baby Stuff/ Infant Products</option>
                                                    
                                                </select>     -->              
                          
                          
                       <span class="input-group-addon" style="border-color: #00A964; background-color:#00A964 !important">
                            <select class="form-control" style="width:250px; margin-right:-150px;">
                                 <option selected disabled>Category</option>
                                 <option> Buy and Sell </option>
                                 <option> Technology </option>
                              </select>
                            
                            </span>
                          <!--End Category-->
                           <input type="text" class="q form-control"  placeholder="Looking for..." name="q" value="{{ old('q') }}" style="margin-right:70px;" >
                           
                            <span class="input-group-addon">
                              <button type="submit" class="btn btn-default" >
                                <span class="fa fa-search"></span>
                              </button>
                            </span>
                        </div>
                     
                    </div>
                    
                </form>

            </div>
            
            
    </div>
    
{{-- header bottom --}}
<div class="header-bottom">
    <div class="wrap">
        
        <div class="header-bottom-left clearfix">
                
            {{-- list menu  top header --}}
            
            <!-- <div class="socialite floatLeft">
                <ul>
                    <li>
                        <a href="#">
                            <i class="fa fa-facebook-square"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-google-plus"></i>
                        </a>
                    </li>
                </ul>
            </div> -->

            <!--<div class="advanced-cont floatLeft">Advanced</div>
            
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
            </div>-->
         
          <!--End category testing-->

            <!-- form search -->
            
            
            <div class="search" >
              <a href="https://www.facebook.com/scrapesph/">       
                <img src="{{ asset('/images/kollscrapes.png') }}" /></a>
            </div>
             
             
        </div>
        
        <p>
            <p/>
        
        {{-- container for posr your ads --}}
        <div class="header-bottom-right your-ads-here">
            <p>
                <p/>
            <p>
          <a class="c-fff btn input-green button input-blue width251" style="background-color:#00A964 !important" href="{{ route('user-items-create') }}">
              <i class="fa fa-file-o"></i>
              Sell your ads here
          </a>
            {{-- button for post your ads here --}}
            {{--{!! Form::submit('Sell your ads here',
                    array('class' => 'btn button input-green width251', 'name' => 'postyourads', 'id' => 'sellads')) !!}--}}

                   
        </div>
    </div>
</div>
