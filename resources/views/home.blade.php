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
                <div class="top-box">
                    <div class="col_1_of_3 span_1_of_3">
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
                    </div>
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
                                array('class' => 'textbox',)) !!}

                            {{-- submit newsletter button --}}
                            {!! Form::submit('Subscribe',
                                        array('id' => 'newsletter-subscribe')) !!}

                        {!! Form::close() !!}

                    </div>
                </div>

            </div>

        </div>
    </div>
</div>




@endsection










