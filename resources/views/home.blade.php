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
					
					@foreach ($items as $item)
						<div class="col-md-4 col-sm-6 mb-15">
							<div class="img-box-4-item">

								{{-- image display --}}
								<div class="image-style-one">
									<a href="{{ url('/'.$item->slug) }}">
										<img class="img-reponsive" src="{{ asset($item->images) }}" alt="">
									</a>
								</div>

								{{-- mange seller ads contente --}}
								<div class="img-box-4-content">
									<a class="" href="#">
										<i class="category-fa-icon fa fa-truck bg-red"></i>
									</a>
									<small>{{ $item->category }}</small>
									<h4 class="item-title" style="height: 29px;">
										<a href="#" id="title-cut">{{ $item->title }}</a>
									</h4>
									<div class="bor bg-red"></div>
									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-12 info-dta info-price">Php {{ number_format($item->price) }}</div>
									</div>
									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-12 info-dta">
											<a class="c-307 mb-10" href="#">{{ $item->city }}</a>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-12 info-dta">Posted on : {{ $item->created_at->format('M d, Y') }}</div>
									</div>
									<div class="clearfix"></div>
								</div>

							</div>
						</div>
                    @endforeach
					
                    <!-- <div class="col-md-4 col-sm-6 mb-15">
                        <div class="img-box-4-item">

                            {{-- image display --}}
                            <div class="image-style-one">
                                <a href="#">
                                    <img class="img-reponsive" src="http://whiz.dbcinfotech.net/uploads/thumbs/ferrari.jpg" alt="">
                                </a>
                            </div>

                            {{-- mange seller ads contente --}}
                            <div class="img-box-4-content">
                                <a class="" href="#">
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
                                <a class="" href="#">
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
                                <a class="" href="#">
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
                                <a class="" href="#">
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
                                <a class="" href="#">
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
                                <a class="" href="#">
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

                    <div class="col-md-4 col-sm-6 mb-15">
                        <div class="img-box-4-item">

                            {{-- image display --}}
                            <div class="image-style-one">
                                <a href="#">
                                    <img class="img-reponsive" src="{{ asset('/images/kolph-motorcycle.png') }}" alt="">
                                </a>
                            </div>

                            {{-- mange seller ads contente --}}
                            <div class="img-box-4-content">
                                <a class="" href="#">
                                    <i class="category-fa-icon fa fa-motorcycle bg-dred"></i>
                                </a>
                                <small>Motorcycle</small>
                                <h4 class="item-title" style="height: 29px;">
                                    <a href="#">Scooter customized</a>
                                </h4>
                                <div class="bor bg-red"></div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 info-dta info-price">120,000.00</div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 info-dta">
                                        <a class="c-307 mb-10" href="#">Caloocan City</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 info-dta">Posted on : December 15, 2015</div>
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
                                    <img class="img-reponsive" src="{{ asset('/images/kolph-fashion.png') }}" alt="">
                                </a>
                            </div>

                            {{-- mange seller ads contente --}}
                            <div class="img-box-4-content">
                                <a class="" href="#">
                                    <i class="category-fa-icon fa fa-diamond bg-pink"></i>
                                </a>
                                <small>Fashion</small>
                                <h4 class="item-title" style="height: 29px;">
                                    <a href="#">Fashion Dress</a>
                                </h4>
                                <div class="bor bg-red"></div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 info-dta info-price">8,000.00.00</div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 info-dta">
                                        <a class="c-307 mb-10" href="#">Manila</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 info-dta">Posted on : December 30, 2015</div>
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
                                    <img class="img-reponsive" src="{{ asset('/images/kolph-sports.png') }}" alt="">
                                </a>
                            </div>

                            {{-- mange seller ads contente --}}
                            <div class="img-box-4-content">
                                <a class="" href="#">
                                    <i class="category-fa-icon fa fa-futbol-o bg-mint"></i>
                                </a>
                                <small>Sports</small>
                                <h4 class="item-title" style="height: 29px;">
                                    <a href="#">Under armour shoes</a>
                                </h4>
                                <div class="bor bg-red"></div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 info-dta info-price">8,000.00.00</div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 info-dta">
                                        <a class="c-307 mb-10" href="#">Manila</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 info-dta">Posted on : December 30, 2015</div>
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
                                    <img class="img-reponsive" src="{{ asset('/images/kolph-toys.png') }}" alt="">
                                </a>
                            </div>

                            {{-- mange seller ads contente --}}
                            <div class="img-box-4-content">
                                <a class="" href="#">
                                    <i class="category-fa-icon fa fa-bug bg-violet"></i>
                                </a>
                                <small>Toys</small>
                                <h4 class="item-title" style="height: 29px;">
                                    <a href="#">Assorted toys</a>
                                </h4>
                                <div class="bor bg-red"></div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 info-dta info-price">1,000.00.00</div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 info-dta">
                                        <a class="c-307 mb-10" href="#">Bulacan City</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 info-dta">Posted on : December 30, 2015</div>
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
                                    <img class="img-reponsive" src="{{ asset('/images/kolph-pets.png') }}" alt="">
                                </a>
                            </div>

                            {{-- mange seller ads contente --}}
                            <div class="img-box-4-content">
                                <a class="" href="#">
                                    <i class="category-fa-icon fa fa-github bg-blue"></i>
                                </a>
                                <small>Pets</small>
                                <h4 class="item-title" style="height: 29px;">
                                    <a href="#">Cute puppy</a>
                                </h4>
                                <div class="bor bg-red"></div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 info-dta info-price">11,000.00.00</div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 info-dta">
                                        <a class="c-307 mb-10" href="#">Baguio City</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 info-dta">Posted on : December 30, 2015</div>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                        </div>
                    </div> -->

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










