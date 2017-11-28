@extends('app')

@section('title')
    KOLL.com.ph | New and Free Classified Ads and Buy and Sell Website Philippines
@stop
<style type="text/css" >
#ads-vticker
{
	width: auto; 
	margin: auto;
	margin-top: 30px;
	border: 1px solid #333333;
}
</style>
 <script src="{{asset('/js/vendor/jquery.js')}}" type="text/javascript"></script>
 <script src="{{asset('/js/vendor/jquery.vticker-min.js')}}" type="text/javascript"></script>
 
 <script type="text/javascript">
$(function(){
	$('#ads-vticker').vTicker({ 
		speed: 500,
		pause: 3000,
		animation: 'fade',
		mousePause: false,
		showItems: 3
	});
        $('#news-container1').vTicker({
		speed: 700,
		pause: 4000,
		animation: 'fade',
		mousePause: false,
		showItems: 1
	});
});
</script>
@section('content')

<div class="main clearfix">
    <div class="wrap">
                                        

        <div class="section group clearfix">
                 
            <!-- item display list left -->
            <div class="cont span_2_of_3">

                <div class="top-box img-box-4 text-center">

                   <!-- show user item post all -->
					@foreach ($items as $item)

						<div class="col-md-4 col-sm-6 mb-15">
							<div class="img-box-4-item">

								<!-- item image display -->
								<div class="image-style-one">
									<a href="{{ url('/item/'.$item->slug) }}">
										<img class="img-reponsive" src="{{ asset($item->images) }}" alt="{{ $item->title }}" class="title-cut" />
									</a>
								</div>

								<!-- details item container -->
								<div class="img-box-4-content">

                                    <!-- display category -->
                                    
                                                        
                                      
									<!-- <small>{{ $item->category }}</small> -->

                                    <!-- display title -->
									<h4 class="item-title" style="height: 45px;">
										<a href="{{ url('/item/'.$item->slug) }}" class="title-cut">{{ $item->title }}</a>
									</h4>

                                    <!-- display price -->
                                    
									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-12 info-dta info-price"><br/>Php {{ $item->price }}</div>
									</div>

                                    <!-- display date posted item -->
									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-12 info-dta">Posted on : {{ $item->created_at }}</div>
									</div>

                                    <!-- display location located -->
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 info-dta">
                                            <a class="c-307 mb-10">Location: {{ $item->city }}</a>
                                        </div>
                                    </div>
									<div class="clearfix"></div>
								</div>

							</div>
						</div>
                    @endforeach

                    <!-- render for pagination -->
                    <div class="clear"></div>
                    {!! $items->render() !!}
                </div>

            </div>

            <!-- advertisement right -->
            <div class="rsidebar span_1_of_left">
               <!-- <div class="border" style="border:1px solid; height:255px; width:255px; margin-top:-95px">
                    <img src="{{asset('images/koll-com-ph-advertise-tips.png')}}" alt="tips" height="253px" width="255px">
                    </div>-->
                <!-- nivo slider -->
                <!-- <div class="top-border"></div> -->
                <!--Testing for TIPS-->
                <div class="border">
                <div class="slider-wrapper theme-default">
                <!--<div id="ad-container">-->
                <div id="slider" class="nivoSlider">
                   
                                    <!--Tips No1 -->
					                <a href='#' title='Tips No. 1'><img src="{{asset('images/koll-com-ph-advertise-tips.png')}}" alt='Tip Number 1' title='' /></a>
                                    <!--Tips No2 -->
						            <a href='#' title='Tip No. 2'><img src="{{asset('images/koll-com-ph-advertise-tips1.png')}}"  title='' alt='Tip Number 2' /></a>
                                    <!--Tips No3 -->
                                    
                            						    
					      
                    </div>
                    </div>
                   <!-- </div>-->
                    </div>
                <!--End of Tips-->
                <div class="border" id="ads-vticker">
                    <div class="slider-wrapper theme-default" >
                        <!--<div id="slider" class="nivoSlider">-->
                          <ul>
                              <!--Exhibit-->
                              <li>
                                  <div>
                                      <a href="http://applife.com.ph/ireport/webportal/">
                                        <img src="{{asset('/images/banner1.jpg')}}" alt="Franchise Asia">
                                        <p align="center">
                                           
                                        </p>
                                      </a>
                                   </div>
                               </li>
                               </ul>
                          </div>
                      
                            <!-- advertise micafe -->
                           <!-- <a href="http://www.micafe.ph/">
                                <img src="{{ asset('/images/koll-micafe-advertise.png') }}" alt="Micafe">
                            </a>

                       <!-- </div>-->
                    </div>
                    <p>
                        </p>
                    <button class="c-fff btn input-green button input-blue" style="width:255px; background-color: #00A946 !important"><a href="" ><font color="#ffffff"><p class="ads-here-front"><center>advertise here<i class="fa fa-angle-double-right"></i></center></p></font></a></button>
                </div>

                <!-- newsletter container -->
                <!-- <div class="top-border"></div> -->
                <div class="sidebar-bottom">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Koll front -->
<ins class="adsbygoogle"
     style="display:inline-block;width:300px;height:250px"
     data-ad-client="ca-pub-9497860225980777"
     data-ad-slot="9288102449"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
                    <!-- <h2 class="m_1">
                        Newsletters <br>
                        Sign up
                    </h2>
                    <div class="subscribe">

                        {{-- newsletter form --}}
                        {!! Form::open() !!}

                            {!! Form::text('emailnewsletter', '',
                                array('class' => 'textbox form-control',)) !!}

                            {{-- submit newsletter button --}}
                            {!! Form::submit('Subscribe',
                                        array('id' => 'newsletter-subscribe', 'class' => 'btn')) !!}

                        {!! Form::close() !!}-->

                    </div> 

                <!--    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                     right home 
                    <ins class="adsbygoogle"
                         style="display:block"
                         data-ad-client="ca-pub-5118993513757687"
                         data-ad-slot="1886817855"
                         data-ad-format="auto">
                    <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
                    </ins>-->
                </div>

            </div>

        </div>
    </div>
</div>




@endsection
