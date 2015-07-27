@extends('app')

@section('title')
    Buy and Sell website
@stop

@section('content')

<div class="main clearfix">
    <div class="wrap">
        <div class="section group clearfix">

            {{-- item display list left --}}
            <div class="cont span_2_of_3">

                <div class="top-box img-box-4 text-center">

                    <div class="col-md-4 col-sm-6 mb-15">
                        <div class="img-box-4-item">

                            {{-- image display --}}
                            <div class="image-style-one">
                                <a href="#">
                                    <img class="img-reponsive" src="http://whiz.dbcinfotech.net/uploads/thumbs/ferrari.jpg" alt="">
                                </a>
                            </div>

                            {{-- mange seller ads contente --}}
                            <div class="img-box-4-content">
                                <a class="b-tooltip" href="#">
                                    <i class="category-fa-icon fa fa-truck bg-red"></i>
                                </a>
                                <small>Vehicles</small>
                                <h4 class="item-title" style="height: 29px;">
                                    <a href="#">Black Ferrari</a>
                                </h4>
                                <div class="bor bg-red"></div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 info-dta info-price">80,000.00</div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 info-dta">
                                        <a class="c-307 mb-10" href="#">Makati</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 info-dta">Posted on : February 19, 2015</div>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 mb-15">
                        <div class="img-box-4-item">

                            {{-- image display --}}
                            <div class="image-style-one">
                                <a href="#">
                                    <img class="img-reponsive" src="http://whiz.dbcinfotech.net/uploads/thumbs/led_tv.jpg" alt="">
                                </a>
                            </div>

                            {{-- mange seller ads contente --}}
                            <div class="img-box-4-content">
                                <a class="b-tooltip" href="#">
                                    <i class="category-fa-icon fa fa-lightbulb-o bg-green"></i>
                                </a>
                                <small>Electronics</small>
                                <h4 class="item-title" style="height: 29px;">
                                    <a href="#">Home Theatre</a>
                                </h4>
                                <div class="bor bg-red"></div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 info-dta info-price">3,000.00</div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 info-dta">
                                        <a class="c-307 mb-10" href="#">Paranaque City</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 info-dta">Posted on : August 30, 2015</div>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 mb-15">
                        <div class="img-box-4-item">

                            {{-- image display --}}
                            <div class="image-style-one">
                                <a href="#">
                                    <img class="img-reponsive" src="http://whiz.dbcinfotech.net/uploads/thumbs/dog.jpg" alt="">
                                </a>
                            </div>

                            {{-- mange seller ads contente --}}
                            <div class="img-box-4-content">
                                <a class="b-tooltip" href="#">
                                    <i class="category-fa-icon fa fa-github bg-blue"></i>
                                </a>
                                <small>Pets</small>
                                <h4 class="item-title" style="height: 29px;">
                                    <a href="#">Puppy</a>
                                </h4>
                                <div class="bor bg-red"></div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 info-dta info-price">200.00</div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 info-dta">
                                        <a class="c-307 mb-10" href="#">Manila</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 info-dta">Posted on : September 10, 2015</div>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 mb-15">
                        <div class="img-box-4-item">

                            {{-- image display --}}
                            <div class="image-style-one">
                                <a href="#">
                                    <img class="img-reponsive" src="http://whiz.dbcinfotech.net/uploads/thumbs/macbook_pro.jpg" alt="">
                                </a>
                            </div>

                            {{-- mange seller ads contente --}}
                            <div class="img-box-4-content">
                                <a class="b-tooltip" href="#">
                                    <i class="category-fa-icon fa fa-lightbulb-o bg-green"></i>
                                </a>
                                <small>Electronic</small>
                                <h4 class="item-title" style="height: 29px;">
                                    <a href="#">Macbook Pro</a>
                                </h4>
                                <div class="bor bg-red"></div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 info-dta info-price">1,500.00</div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 info-dta">
                                        <a class="c-307 mb-10" href="#">Pasay City</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 info-dta">Posted on : October 1, 2015</div>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 mb-15">
                        <div class="img-box-4-item">

                            {{-- image display --}}
                            <div class="image-style-one">
                                <a href="#">
                                    <img class="img-reponsive" src="{{ asset('/images/kolph-real-estate.png') }}" alt="">
                                </a>
                            </div>

                            {{-- mange seller ads contente --}}
                            <div class="img-box-4-content">
                                <a class="b-tooltip" href="#">
                                    <i class="category-fa-icon fa fa-home bg-yellow"></i>
                                </a>
                                <small>Real Estate</small>
                                <h4 class="item-title" style="height: 29px;">
                                    <a href="#">Condominium own</a>
                                </h4>
                                <div class="bor bg-red"></div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 info-dta info-price">1,500.00</div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 info-dta">
                                        <a class="c-307 mb-10" href="#">Paranaque City</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 info-dta">Posted on : November 1, 2015</div>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 mb-15">
                        <div class="img-box-4-item">

                            {{-- image display --}}
                            <div class="image-style-one">
                                <a href="#">
                                    <img class="img-reponsive" src="{{ asset('/images/kolph-buyandsell.png') }}" alt="">
                                </a>
                            </div>

                            {{-- mange seller ads contente --}}
                            <div class="img-box-4-content">
                                <a class="b-tooltip" href="#">
                                    <i class="category-fa-icon fa fa-buysellads bg-orange"></i>
                                </a>
                                <small>Buy and Sell</small>
                                <h4 class="item-title" style="height: 29px;">
                                    <a href="#">Sung glass</a>
                                </h4>
                                <div class="bor bg-red"></div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 info-dta info-price">500.00</div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 info-dta">
                                        <a class="c-307 mb-10" href="#">Pasig City</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 info-dta">Posted on : November 1, 2015</div>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                        </div>
                    </div>

                    {{--<div class="col_1_of_3 span_1_of_3">
                        <a href="/item/view">

                            <div class="inner_content clearfix">
                                <div class="product_image">
                                    <img alt="" src="{{ asset('/images/pic.jpg') }}">
                                </div>
                                <div class="price">
                                    <div class="cart-left">
                                        <p class="title">Lorem Ipsum simply</p>
                                        <div class="price1">
                                            <span class="actual">Php 12.00</span>
                                        </div>
                                    </div>
                                    <span class="view-count"><i class="fa fa-eye"></i>97</span>
                                    <div class="clear"></div>
                                </div>
                            </div>

                        </a>
                    </div>

                    <div class="col_1_of_3 span_1_of_3">
                        <a href="#">
                            <div class="inner_content clearfix">
                                <div class="product_image">
                                    <img alt="" src="{{ asset('/images/pic1.jpg') }}">
                                </div>
                                <div class="price">
                                    <div class="cart-left">
                                        <p class="title">Lorem Ipsum simply</p>
                                        <div class="price1">
                                            <span class="actual">Php 12.00</span>
                                        </div>
                                    </div>
                                    <span class="view-count"><i class="fa fa-eye"></i>97</span>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col_1_of_3 span_1_of_3">
                        <a href="#">
                            <div class="inner_content clearfix">
                                <div class="product_image">
                                    <img alt="" src="{{ asset('/images/pic2.jpg') }}">
                                </div>
                                <div class="price">
                                    <div class="cart-left">
                                        <p class="title">Lorem Ipsum simply</p>
                                        <div class="price1">
                                            <span class="actual">Php 12.00</span>
                                        </div>
                                    </div>
                                    <span class="view-count"><i class="fa fa-eye"></i>97</span>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </a>
                    </div> --}}

                    <div class="clear"></div>
                </div>

                <div class="top-box">

                    <div class="col_1_of_3 span_1_of_3">
                        <a href="#">
                            <div class="inner_content clearfix">
                                <div class="product_image">
                                    <img alt="" src="{{ asset('/images/pic.jpg') }}">
                                </div>
                                <div class="price">
                                    <div class="cart-left">
                                        <p class="title">Lorem Ipsum simply</p>
                                        <div class="price1">
                                            <span class="actual">Php 12.00</span>
                                        </div>
                                    </div>
                                    <span class="view-count"><i class="fa fa-eye"></i>97</span>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col_1_of_3 span_1_of_3">
                        <a href="#">
                            <div class="inner_content clearfix">
                                <div class="product_image">
                                    <img alt="" src="{{ asset('/images/pic1.jpg') }}">
                                </div>
                                <div class="price">
                                    <div class="cart-left">
                                        <p class="title">Lorem Ipsum simply</p>
                                        <div class="price1">
                                            <span class="actual">Php 12.00</span>
                                        </div>
                                    </div>
                                    <span class="view-count"><i class="fa fa-eye"></i>97</span>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col_1_of_3 span_1_of_3">
                        <a href="#">
                            <div class="inner_content clearfix">
                                <div class="product_image">
                                    <img alt="" src="{{ asset('/images/pic2.jpg') }}">
                                </div>
                                <div class="price">
                                    <div class="cart-left">
                                        <p class="title">Lorem Ipsum simply</p>
                                        <div class="price1">
                                            <span class="actual">Php 12.00</span>
                                        </div>
                                    </div>
                                    <span class="view-count"><i class="fa fa-eye"></i>97</span>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="clear"></div>
                </div>

                <div class="top-box1">

                    <div class="col_1_of_3 span_1_of_3">
                        <a href="#">
                            <div class="inner_content clearfix">
                                <div class="product_image">
                                    <img alt="" src="{{ asset('/images/pic.jpg') }}">
                                </div>
                                <div class="price">
                                    <div class="cart-left">
                                        <p class="title">Lorem Ipsum simply</p>
                                        <div class="price1">
                                            <span class="actual">Php 12.00</span>
                                        </div>
                                    </div>
                                    <span class="view-count"><i class="fa fa-eye"></i>97</span>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col_1_of_3 span_1_of_3">
                        <a href="#">
                            <div class="inner_content clearfix">
                                <div class="product_image">
                                    <img alt="" src="{{ asset('/images/pic1.jpg') }}">
                                </div>
                                <div class="price">
                                    <div class="cart-left">
                                        <p class="title">Lorem Ipsum simply</p>
                                        <div class="price1">
                                            <span class="actual">Php 12.00</span>
                                        </div>
                                    </div>
                                    <span class="view-count"><i class="fa fa-eye"></i>97</span>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col_1_of_3 span_1_of_3">
                        <a href="#">
                            <div class="inner_content clearfix">
                                <div class="product_image">
                                    <img alt="" src="{{ asset('/images/pic2.jpg') }}">
                                </div>
                                <div class="price">
                                    <div class="cart-left">
                                        <p class="title">Lorem Ipsum simply</p>
                                        <div class="price1">
                                            <span class="actual">Php 12.00</span>
                                        </div>
                                    </div>
                                    <span class="view-count"><i class="fa fa-eye"></i>97</span>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="clear"></div>

                </div>

                <div class="top-box1">

                    <div class="col_1_of_3 span_1_of_3">
                        <a href="#">
                            <div class="inner_content clearfix">
                                <div class="product_image">
                                    <img alt="" src="{{ asset('/images/pic.jpg') }}">
                                </div>
                                <div class="price">
                                    <div class="cart-left">
                                        <p class="title">Lorem Ipsum simply</p>
                                        <div class="price1">
                                            <span class="actual">Php 12.00</span>
                                        </div>
                                    </div>
                                    <span class="view-count"><i class="fa fa-eye"></i>97</span>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col_1_of_3 span_1_of_3">
                        <a href="#">
                            <div class="inner_content clearfix">
                                <div class="product_image">
                                    <img alt="" src="{{ asset('/images/pic1.jpg') }}">
                                </div>
                                <div class="price">
                                    <div class="cart-left">
                                        <p class="title">Lorem Ipsum simply</p>
                                        <div class="price1">
                                            <span class="actual">Php 12.00</span>
                                        </div>
                                    </div>
                                    <span class="view-count"><i class="fa fa-eye"></i>97</span>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col_1_of_3 span_1_of_3">
                        <a href="#">
                            <div class="inner_content clearfix">
                                <div class="product_image">
                                    <img alt="" src="{{ asset('/images/pic2.jpg') }}">
                                </div>
                                <div class="price">
                                    <div class="cart-left">
                                        <p class="title">Lorem Ipsum simply</p>
                                        <div class="price1">
                                            <span class="actual">Php 12.00</span>
                                        </div>
                                    </div>
                                    <span class="view-count"><i class="fa fa-eye"></i>97</span>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="clear"></div>

                </div>

            </div>

            {{-- advertisement right --}}
            <div class="rsidebar span_1_of_left">

                {{-- nivo slider --}}
                <div class="top-border"></div>
                <div class="border">
                    <div class="slider-wrapper theme-default">
                        <div id="slider" class="nivoSlider">
                            <img src="{{ asset('/images/t-img1.jpg') }}" alt="">
                            <img src="{{ asset('/images/t-img2.jpg') }}" alt="">
                            <img src="{{ asset('/images/t-img3.jpg') }}" alt="">
                        </div>
                    </div>
                </div>

                {{-- newsletter container --}}
                <div class="top-border"></div>
                <div class="sidebar-bottom">
                    <h2 class="m_1">
                        Newsletters <br>
                        Sign up
                    </h2>
                    <p class="m_text">Lorem ipsum dolor sit amet, consectetuer</p>
                    <div class="subscribe">

                        {{-- newsletter form --}}
                        {!! Form::open() !!}

                            {!! Form::text('emailnewsletter', '',
                                array('class' => 'textbox form-control',)) !!}

                            {{-- submit newsletter button --}}
                            {!! Form::submit('Subscribe',
                                        array('id' => 'newsletter-subscribe', 'class' => 'btn')) !!}

                        {!! Form::close() !!}

                    </div>
                </div>

            </div>

        </div>
    </div>
</div>




@endsection










