@extends('app')

@section('title')
    {{ $items->slug }} for sale philippines - KOLL.com.ph
@stop

@section('header_assets')
<meta name="description" content="{{ $items->title }}">

{{-- Opengraph metas --}}
<meta property="og:title" content="{{ $items->title }}" />
<meta property="og:description" content="{{ $items->description }}" />
<meta property="og:image" content="{{ $items->images, 600, 315 }}" />
<meta property="og:type" content="website" />
{{-- / Opengraph metas --}} 
@endsection

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
                                    <img class="etalage_thumb_image img-responsive" src="{{ asset($items->images) }}" />
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
                        <!-- <span class="views-item"><i class="fa fa-eye"></i>97 views</span> -->

                        <!-- social media share -->
                        <div class="brand-bg">
                            
                            <!-- facebook share -->
                            <a class="facebook" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href),'facebook-share-dialog','width=626,height=436');return false;">
                                <i class="fa fa-facebook circle-3"></i>
                                <span class="c-307">Share on Facebook</span>
                            </a>

                            <!-- <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-564e8dba65341b7f" async="async"></script>
                            <div class="addthis_sharing_toolbox"></div> -->
                            <!-- twitter share -->
                            <!-- <a class="twitter" href="#">
                                <i class="fa fa-twitter circle-3"></i>
                            </a> -->

                            <!-- google+ share -->
                            <!-- <a class="google-plus" href="#">
                                <i class="fa fa-google-plus circle-3"></i>
                            </a> -->

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

                        <div class="mb-25">
                            <h2>Leave a comment</h2>
                            @if(Auth::guest())
                                <p>Sign in to comment</p>
                            @else
                                <div class="commenter-container panel-body">

                                    <form method="post" action="/comments/add">
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
                                
                                    <div class="comments">
                                        <div class="panel panel-default comment border-clr-none">
                                            @foreach($comments as $comment)
                                            <div class="panel-heading comment-header border-clr-none">

                                                <!-- button to see list comment -->

                                                <h4 class="comment-user">
                                                    <span class="comment-username">{{ $comment->guest->first_name }}</span>
                                                    <small class="comment-date">{{ $comment->created_at->format('M d, Y \a\t h:i a') }}</small>
                                                </h4>

                                                {{ $comment->body }}

                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                
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
                    <strong><a href="{{ url('/account/user/'.$items->guest_id) }}">{{ $items->guest->first_name }} {{ $items->guest->last_name }}</a></strong>

                    <div class="details-seller floatLeft">
                        <label class="mb-num mt-10"><span class="deta-left c-999 txt-ind-10"><i class="fa fa-mobile"></i>Mobile:</span><span class="deta-right txt-ind-10">{{ $items->guest->mobile }}</span></label>
                        <label class="mb-num mt-10"><span class="deta-left c-999 txt-ind-10"><i class="fa fa-mobile"></i>Business No.:</span><span class="deta-right txt-ind-10">{{ $items->mobile }}</span></label>
                        <label class="mb-num mt-10"><span class="deta-left c-999 txt-ind-10"><i class="fa fa-calendar-o"></i>Date Posted:</span><span class="deta-right txt-ind-10">{{ $items->guest->created_at->format('M d, Y') }}</span></label>
                        <label class="mb-num mt-10"><span class="deta-left c-999 txt-ind-10"><i class="fa fa-info-circle"></i>Condition:</span><span class="deta-right txt-ind-10">{{ $items->condition }}</span></label>
                        <label class="mb-num mt-10"><span class="deta-left c-999 txt-ind-10"><i class="fa fa-location-arrow"></i>City:</span><span class="deta-right txt-ind-10">{{ $items->city }}</span></label>
                    </div>
                  <div class="clear"></div>
                </div>


                @foreach (array_chunk($featured->all(), 4) as $featuredSection)
                    <!-- featured ads -->
                    <div class="rsingle mt-rsingle-25 ">
                        <h5 class="m_1">Featured Ads</h5>

                        <ul class="list-unstyled floatLeft">
                            @foreach ($featuredSection as $featuredItem)
                            <li class="col-xs-12 col-sm-6 col-md-12 col-lg-12">
                                <div class="featured-item">
                                    <a href="#">
                                        <img class="img-reponsive img-thumbnail pad-none" alt="" src="{{ asset($featuredItem->images) }}">
                                    </a>
                                </div>
                                <h4>
                                    <a hef="#">{!! $featuredItem->title !!}</a>
                                </h4>
                                <div class="price">
                                    <strong>Price : {!! $featuredItem->price !!}</strong>
                                </div>
                                <div class="clearfix"></div>
                            </li>
                            @endforeach
                        </ul>

                        <div class="clear"></div>
                    </div>
                @endforeach

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