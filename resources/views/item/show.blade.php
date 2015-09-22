@extends('app')

@section('title')
    View sell item
@stop

@section('content')

<div class="view">
    <div class="main">
        <div class="wrap">

            <!--  link direction top  -->
            <ul class="breadcrumb breadcrumb__t"></ul>

            <div class="cont span_2_of_3">
                @if($items)
                    <!-- {{ $items->title }} -->
                    <!-- thumb images left -->
                    <div class="grid images_3_of_2">
                        <ul id="etalage">
                            <li>
                                <a href="#">
                                    <img class="etalage_thumb_image" src="{{ asset($items->images) }}" class="img-responsive" />
                                    <!-- <img class="etalage_source_image" src="{{ asset($items->images) }}" class="img-responsive" width="300" /> -->
                                    <!--
                                    <img class="etalage_thumb_image" src="{{ asset('/images/s-img.jpg') }}" class="img-responsive" />
                                    <img class="etalage_source_image" src="{{ asset('/images/s1.jpg') }}" class="img-responsive" />
                                    -->
                                </a>
                            </li>

                            <!-- <li>
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
                            </li> -->
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <!-- price and title item right -->
                    <div class="desc1 span_3_of_2">

                        <!-- item title post --> 
                        <h3 class="m_3">{{ $items->title }}</h3>
                        <!-- <h3 class="m_3">Lorem ipsum dolor sit amet</h3> -->

                        <!-- item price --> 
                        <p class="m_5">Php {{ $items->price }}</p>
                        <!-- <p class="m_5">Php 888</p> -->

                        <!-- count of viewing -->
                        <span class="views-item"><i class="fa fa-eye"></i>97 views</span>

                        <!-- social media share -->
                        <div class="brand-bg">

                            <!-- facebook share -->
                            <a class="facebook" href="#">
                                <i class="fa fa-facebook circle-3"></i>
                            </a>

                            <!-- twitter share -->
                            <a class="twitter" href="#">
                                <i class="fa fa-twitter circle-3"></i>
                            </a>

                            <!-- google+ share -->
                            <a class="google-plus" href="#">
                                <i class="fa fa-google-plus circle-3"></i>
                            </a>

                        </div>

                    </div>
                    <div class="clear"></div>

                    <!-- description item -->
                    <div class="toogle">
                        <h3 class="m_3">Description</h3>
                        <p class="m_text">
                            {{ $items->description }}
                        </p>
                        <!-- <p class="m_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p> -->                
                    </div>

                @else
                    Page does not exist    
                @endif

                <!-- comments box -->
                @if($items)

                    <div class="toogle">

                        <div class="" style="">
                            <h2>Leave a comment</h2>
                            @if(Auth::guest())
                                <p>Sign in to comment</p>
                            @else
                                <div class="commenter-container panel-body">

                                    <!-- form for write comment parent -->
                                    <!-- {!! Form::open(['url' => 'comment/add', 'method' => 'POST']) !!}
                                        <div class="form-group comment">

                                            {!! Form::textarea('body', null, ['class' => 'field form-control']) !!}

                                            <button class="btn mt-15 input-blue" type="submit">Submit</button>
                                            <input type="submit" name="post_comment" class="btn mt-15 input-blue" value="Post">

                                        </div>
                                    {!! Form::close() !!} -->
                                    <form method="post" action="/comment/add">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="hidden" name="on_post" value="{{ $items->id }}">
                                        <input type="hidden" name="slug" value="{{ $items->slug }}">
                                        <div class="form-group">
                                            <textarea required="required" placeholder="Enter comment here" name="body" class="form-control"></textarea>
                                        </div>
                                        <input type="submit" name='post_comment' class="btn btn-success" value = "Post"/>
                                    </form>

                                </div>
                            @endif

                        </div>

                        <div class="" style="">

                            @if($comments)
                                <!-- display comment here -->
                                @foreach($comments as $comment)
                                    <div class="comments">
                                        <div class="panel panel-default comment">
                                            <div class="panel-heading comment-header">

                                                <!-- button to see list comment -->

                                                <h4 class="comment-user">
                                                    <a class="comment-username">{{ $comment->guest->first_name }}</a>
                                                    <small class="comment-date">{{ $comment->created_at->format('M d, Y \a\t h:i a') }}</small>
                                                </h4>

                                            </div>
                                            <div class="comment-body panel-body" >
                                                {{ $comment->body }}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif

                        </div>

                    </div>

                @endif

            </div>     

            <div class="span_1_of_3 floatRight wdth20per">

                <!-- right side for seller information , featured ads and sponsored links -->
                <!-- owner of item seller info -->
                <div class="rsingle">
                    <h5 class="m_1">Seller Information</h5>

                    <!-- seller name -->
                    <strong><a href="#">{{ $items->guest->first_name }}</a></strong>

                    <div class="details-seller floatLeft">
                        <label class="mb-num mt-10"><span class="deta-left c-999 txt-ind-10"><i class="fa fa-mobile"></i>Mobile:</span><span class="deta-right txt-ind-10">{{ $items->guest->mobile }}</span></label>
                        <label class="mb-num mt-10"><span class="deta-left c-999 txt-ind-10"><i class="fa fa-calendar-o"></i>Date Posted:</span><span class="deta-right txt-ind-10">{{ $items->guest->created_at->format('M d, Y') }}</span></label>
                        <label class="mb-num mt-10"><span class="deta-left c-999 txt-ind-10"><i class="fa fa-info-circle"></i>Condition:</span><span class="deta-right txt-ind-10">{{ $items->condition }}</span></label>
                        <label class="mb-num mt-10"><span class="deta-left c-999 txt-ind-10"><i class="fa fa-location-arrow"></i>CIty:</span><span class="deta-right txt-ind-10">{{ $items->city }}</span></label>
                    </div>
                  <div class="clear"></div>
                </div>


                <!-- featured ads -->
                <div class="rsingle mt-rsingle-25 ">
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

                <!-- sponsored ads links -->
                <div class="rsingle mt-rsingle-25 ">
                    <h5 class="m_1">Sponsored Links</h5>

                  <div class="clear"></div>
                </div>

                <div class="clear"></div>

            </div>

        </div>

        

    </div>
</div>


@endsection