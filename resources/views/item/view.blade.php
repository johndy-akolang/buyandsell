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
                    <p class="m_5">Php 888 <span class="reducedfrom">Php 999</span></p>

                    {{-- form buy item --}}
                    <div class="btn_form">

                        {!! Form::open() !!}

                            {!! Form::submit('Buy', '',
                                array('class' => 'input-blue')) !!}

                        {!! Form::close() !!}

                    </div>

                    {{-- count of viewing --}}
                    <span class="views-item"><i class="fa fa-eye"></i>97</span>

                </div>
                <div class="clear"></div>

                {{-- description item --}}
                <div class="toogle">
                    <h3 class="m_3">Description</h3>
                    <p class="m_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                </div>

                {{-- more information item --}}
                <div class="toogle">
                    <h3 class="m_3">More Information</h3>
                    <p class="m_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                </div>

            </div>

            {{-- right side for contact information , featured ads and sponsored links --}}
            {{-- owner of item contact info --}}
            <div class="rsingle span_1_of_single">
                <h5 class="m_1">Contact Info</h5>



              <div class="clear"></div>
            </div>

            {{-- featured ads --}}
            <div class="rsingle span_1_of_single mt-rsingle-25 ">
                <h5 class="m_1">Featured Ads</h5>



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