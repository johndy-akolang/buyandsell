@extends('app')

@section('title')
    KOLL.com.ph | Philippines Buy and Sell website
@stop

@section('content')

<div class="main clearfix">
    <div class="wrap">
        
        <div class="section group clearfix">

            {{-- item display list left --}}
            <div class="cont span_2_of_3">

                <div class="top-box img-box-4 text-center">
                   
					@foreach ($items as $item)

						<div class="col-md-4 col-sm-6 mb-15">
							<div class="img-box-4-item">

								{{-- image display --}}
								<div class="image-style-one">
									<a href="{{ url('/item/'.$item->slug) }}">
										<img class="img-reponsive" src="{{ asset($item->images) }}" alt="">
									</a>
								</div>

								{{-- mange seller ads contente --}}
								<div class="img-box-4-content">
									<!-- <a class="" href="#">
										<i class="category-fa-icon fa fa-truck bg-red"></i>
									</a> -->
									<!-- <small>{{ $item->category }}</small> -->
									<h4 class="item-title" style="height: 29px;">
										<a href="{{ url('/item/'.$item->slug) }}" class="title-cut">{{ $item->title }}</a>
									</h4>
									<!-- <div class="bor bg-red"></div> -->
									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-12 info-dta info-price">Php {{ $item->price }}</div>
									</div>
									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-12 info-dta">Posted on : {{ $item->created_at->format('M d, Y') }}</div>
									</div>
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

                    <div class="clear"></div>
                    {!! $items->render() !!}
                </div>

            </div>

            {{-- advertisement right --}}
            <div class="rsidebar span_1_of_left">

                {{-- nivo slider --}}
                <!-- <div class="top-border"></div> -->
                <div class="border">
                    <div class="slider-wrapper theme-default">
                        <div id="slider" class="nivoSlider">
                            <a href="http://www.miguelitos-hotels.com/main/altavista-de-boracay.php">
                                <img src="{{ asset('/images/koll-room-for-rent-casa-de-miguelitos-altavista.png') }}" alt="Casa de Miguelitos">
                            </a>
                            <a href="http://micahelasalonandspa.com/promos.php">
                                <img src="{{ asset('/images/koll-micah-ela-salon-and-spa.png') }}" alt="Micah Ela Salon and Spa">
                            </a>
                            <a href="http://www.micafe.ph/">
                                <img src="{{ asset('/images/koll-micafe-advertise.png') }}" alt="Micafe">
                            </a>
                        </div>
                    </div>
                </div>

                {{-- newsletter container --}}
                <!-- <div class="top-border"></div> -->
                <!-- <div class="sidebar-bottom">

                    <h2 class="m_1">
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

                        {!! Form::close() !!}

                    </div>
                </div> -->

            </div>

        </div>
    </div>
</div>




@endsection










