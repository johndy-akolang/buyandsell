@extends('app')

@section('title')
    View sell item
@stop

@section('content')

<div class="view">
    <div class="main">
        <div class="wrap">

            {{-- link direction top --}}
            <ul class="breadcrumb breadcrumb__t"><a class="home" href="#">Home</a> / <a href="#">Dolor sit amet</a> / <a href="#">Lorem ipsum dolor sit amet</a></ul>

            <div class="cont span_2_of_3">

                {{-- thumb images left --}}
                <div class="grid images_3_of_2">
                    <ul id="etalage">
                        <li>
                            <a href="#">
                                <img class="etalage_thumb_image" src="{{ asset('/images/s-img.jpg') }}" class="img-responsive" />
                                <img class="etalage_source_image" src="{{ asset('/images/s1.jpg') }}" class="img-responsive" />
                            </a>
                        </li>

                        <li>
                            <img class="etalage_thumb_image" src="{{ asset('/images/s-img1.jpg') }}" class="img-responsive" />
                            <img class="etalage_source_image" src="{{ asset('/images/s2.jpg') }}" class="img-responsive" />
                        </li>
                        <li>
                            <img class="etalage_thumb_image" src="{{ asset('/images/s-img2.jpg') }}" class="img-responsive" />
                            <img class="etalage_source_image" src="{{ asset('/images/s3.jpg') }}" class="img-responsive" />
                        </li>
                        <li>
                            <img class="etalage_thumb_image" src="{{ asset('/images/s-img3.jpg') }}" class="img-responsive" />
                            <img class="etalage_source_image" src="{{ asset('/images/s4.jpg') }}" class="img-responsive" />
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>

                {{-- price and title item right --}}
                <div class="desc1 span_3_of_2">

                    {{-- item title post --}}
                    <h3 class="m_3">Lorem ipsum dolor sit amet</h3>

                    {{-- item price --}}
                    <p class="m_5">Php 888</p>

                    {{-- form buy item --}}
                    {{--<div class="btn_form">

                        {!! Form::open() !!}

                            {!! Form::submit('Buy',
                                array('class' => 'btn input-blue')) !!}

                        {!! Form::close() !!}

                    </div>--}}

                    {{-- count of viewing --}}
                    <span class="views-item"><i class="fa fa-eye"></i>97 views</span>

                    {{-- social media share --}}
                    <div class="brand-bg">

                        {{-- facebook share --}}
                        <a class="facebook" href="#">
                            <i class="fa fa-facebook circle-3"></i>
                        </a>

                        {{-- twitter share --}}
                        <a class="twitter" href="#">
                            <i class="fa fa-twitter circle-3"></i>
                        </a>

                        {{-- google+ share --}}
                        <a class="google-plus" href="#">
                            <i class="fa fa-google-plus circle-3"></i>
                        </a>

                    </div>

                </div>
                <div class="clear"></div>

                {{-- description item --}}
                <div class="toogle">
                    <h3 class="m_3">Description</h3>
                    <p class="m_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                </div>

                {{-- comment box --}}
                <div class="toogle">

                    <div class="" style="">

                        {{-- display comment here --}}
                        <div class="comments">
                            <div class="panel panel-default comment">
                                <div class="panel-heading comment-header">

                                    {{-- button to see list comment --}}

                                    <h4 class="comment-user">
                                        <a class="comment-username" title="">@caitp</a>
                                        <small class="comment-date">14 minutes ago</small>
                                    </h4>

                                </div>
                                <div class="comment-body panel-body" >
                                    UI-Comments is designed to simplify the process of creating comment systems similar to Reddit, Imgur or Discuss in AngularJS.
                                </div>
                            </div>
                        </div>

                        {{-- not show when not login - for users or register only --}}
                        {{-- If users comment here or private message stored to the inbox message --}}
                        <div class="commenter-container panel-body">

                            {{-- form for write comment parent --}}
                            {!! Form::open() !!}

                                <div class="form-group">

                                    {!! Form::text('comment', '',
                                        array('required',
                                            'class' => 'form-control',
                                            'placeholder' => 'Name')) !!}

                                </div>

                                <div class="form-group comment">

                                    {!! Form::textarea('notes', null, ['class' => 'field form-control']) !!}

                                    <button class="btn mt-15 input-blue" type="submit">Submit</button>

                                </div>

                            {!! Form::close() !!}

                        </div>

                    </div>

                </div>

            </div>

            {{-- right side for seller information , featured ads and sponsored links --}}
            {{-- owner of item seller info --}}
            <div class="rsingle span_1_of_single">
                <h5 class="m_1">Seller Information</h5>

                {{-- seller name --}}
                <strong><a href="/account/user">mark infantado</a></strong>

                <div class="details-seller floatLeft">
                    <label class="mb-num mt-10"><span class="deta-left c-999 txt-ind-10"><i class="fa fa-mobile"></i>Mobile:</span><span class="deta-right txt-ind-10">987456...</span></label>
                    <label class="mb-num mt-10"><span class="deta-left c-999 txt-ind-10"><i class="fa fa-calendar-o"></i>Date Posted:</span><span class="deta-right txt-ind-10">July 20, 2015</span></label>
                    <label class="mb-num mt-10"><span class="deta-left c-999 txt-ind-10"><i class="fa fa-info-circle"></i>Condition:</span><span class="deta-right txt-ind-10">2nd Hand(Used)</span></label>
                    <label class="mb-num mt-10"><span class="deta-left c-999 txt-ind-10"><i class="fa fa-location-arrow"></i>Location:</span><span class="deta-right txt-ind-10">Parañaque City</span></label>
                </div>
              <div class="clear"></div>
            </div>

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

            {{-- sponsored ads links --}}
            <div class="rsingle span_1_of_single mt-rsingle-25 ">
                <h5 class="m_1">Sponsored Links</h5>

              <div class="clear"></div>
            </div>

             <div class="clear"></div>

        </div>
    </div>
</div>


@endsection