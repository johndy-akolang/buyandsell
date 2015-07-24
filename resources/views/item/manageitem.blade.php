@extends('app')

@section('title')
    Manage item list
@stop

@section('content')

<div class="manageitem">
    <div class="main">

        <div class="wrap">

            {{-- left side manage list item --}}
            <div class="cont span_2_of_3">
                <div class="manage-item-list">
                    <div class="img-box-4 text-center clearfix">

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
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 info-dta pad-top-bottom-10">
                                            <a class="c-307 mb-10 cursor" data-toggle="modal" data-target="#myModal">Update</a>
                                            <a class="c-307 mb-10 ml-10" href="#">Mark sold</a>
                                        </div>
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
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 info-dta pad-top-bottom-10">
                                            <a class="c-307 mb-10 cursor" data-toggle="modal" data-target="#myModal">Update</a>
                                            <a class="c-307 mb-10 ml-10" href="#">Mark sold</a>
                                        </div>
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
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 info-dta pad-top-bottom-10">
                                            <a class="c-307 mb-10 cursor" data-toggle="modal" data-target="#myModal">Update</a>
                                            <a class="c-307 mb-10 ml-10" href="#">Mark sold</a>
                                        </div>
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
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 info-dta pad-top-bottom-10">
                                            <a class="c-307 mb-10 cursor" data-toggle="modal" data-target="#myModal">Update</a>
                                            <a class="c-307 mb-10 ml-10" href="#">Mark sold</a>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
            </div>

            {{-- right side featured ads --}}
            {{-- featured ads --}}
            <div class="rsingle span_1_of_single mt-rsingle-25 ">
                <h5 class="m_1">Featured Ads</h5>

                <ul class="list-unstyled floatLeft">
                    <li class="col-xs-12 col-sm-6 col-md-12 col-lg-12">
                        <a href="#">
                            <img class="img-reponsive img-thumbnail" alt="black Ferrari" src="http://whiz.dbcinfotech.net/uploads/thumbs/ferrari.jpg">
                        </a>
                        <h4>
                            <a hef="#">Black Ferrari</a>
                        </h4>
                        <div class="price">
                            <strong>Price : 80,000.00</strong>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                    <li class="col-xs-12 col-sm-6 col-md-12 col-lg-12">
                        <a href="#">
                            <img class="img-reponsive img-thumbnail" alt="Home Theatre" src="http://whiz.dbcinfotech.net/uploads/thumbs/led_tv.jpg">
                        </a>
                        <h4>
                            <a hef="#">Home Theatre</a>
                        </h4>
                        <div class="price">
                            <strong>Price : 3,000.00</strong>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                    <li class="col-xs-12 col-sm-6 col-md-12 col-lg-12">
                        <a href="#">
                            <img class="img-responsive img-thumbnail" alt="Puppy" src="http://whiz.dbcinfotech.net/uploads/thumbs/dog.jpg">
                        </a>
                        <h4>
                            <a hef="#">Puppy</a>
                        </h4>
                        <div class="price">
                            <strong>Price : 200.00</strong>
                        </div>
                        <div class="clearfix"></div>
                    </li>

                </ul>

                <div class="clear"></div>
            </div>

            {{-- modal view update item --}}
            @include('item.updateitem')

        </div>

    </div>

</div>



@endsection