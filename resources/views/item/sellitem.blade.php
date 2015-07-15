@extends('app')

@section('title')
    Sell you item now
@stop

@section('content')

<div class="sellitem">
    <div class="main">

        <div class="wrap">
            <div class="cont sell-item-cont bor-rad5 border1ccc pad10">

                {{-- form sell item --}}
                {!! Form::open() !!}

                    {{-- sell item title --}}
                    <div class="sellitem-title">
                        <h4 class="title">Sell item now</h4>
                    </div>

                    <fieldset class="clearfix">

                        {{-- title form label --}}
                        <div class="sellitem-title-cont floatLeft">
                            <div class="sellitem-label floatLeft talignright">
                                <label>What are you selling?
                                    <span class="cff0">*</span>
                                </label>
                            </div>
                        </div>

                        {{-- title form input --}}
                        <div class="title-cont-input floatLeft">

                            {!! Form::text('Title', '',
                                array('required',
                                    'id' => 'title', 'name' => 'title')) !!}

                            <p class="desc c-aaa">
                                <small>
                                    <b id="add-title-counter" class="counter-placeholder" data-for-id="add-title">70</b>
                                    characters left
                                </small>
                            </p>

                        </div>

                    </fieldset>

                    {{-- selecty category --}}
                    <fieldset class="clearfix mt-15 border-b mb-15 pad-b-10">

                        {{-- title form label --}}
                        <div class="sellitem-title-cont floatLeft">
                            <div class="sellitem-label floatLeft talignright">
                                <label>Choose a Category
                                    <span class="cff0">*</span>
                                </label>
                            </div>
                        </div>

                        {{-- title form input --}}
                        <div class="title-cont-input floatLeft">

                            {{-- select category --}}
                            <div id="ss" class="wrapper-dropdown floatLeft" tabindex="1">Select
                                <ul class="dropdown-select-category">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-car"></i>
                                            Cars
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-motorcycle"></i>
                                            Motorcycle
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-diamond"></i>
                                            Fashion
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-flash"></i>
                                            Electronics
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-futbol-o"></i>
                                            Sports
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-bug"></i>
                                            Toys
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </fieldset>

                    {{-- item form description --}}
                    <fieldset class="clearfix">

                        {{-- title form label --}}
                        <div class="sellitem-title-cont floatLeft">
                            <div class="sellitem-label floatLeft talignright">
                                <label>What are you selling?
                                    <span class="cff0">*</span>
                                </label>
                            </div>
                        </div>

                        {{-- text area description --}}
                        <div class="title-cont-input floatLeft">

                            {!! Form::textarea('Description', '',
                                array('required',
                                    'id' => 'description-item')) !!}

                            <p class="desc c-aaa">
                                <small>
                                    <b id="add-title-counter" class="counter-placeholder" data-for-id="add-title">700</b>
                                    characters left
                                </small>
                            </p>
                        </div>

                    </fieldset>

                    {{-- item fomr upload photos --}}
                    <fieldset class="clearfix mt-15 border-b mb-15 pad-b-10">

                        {{-- title form label --}}
                        <div class="sellitem-title-cont floatLeft">
                            <div class="sellitem-label floatLeft talignright">
                                <label>Upload photos</label>
                            </div>
                        </div>

                        <div id="dropzone" class="dropzone" action="/upload-target">


                        </div>


                    </fieldset>

                    {{-- select province --}}
                    <fieldset class="clearfix">

                        {{-- title form label --}}
                        <div class="sellitem-title-cont floatLeft">
                            <div class="sellitem-label floatLeft talignright">
                                <label>Province
                                    <span class="cff0">*</span>
                                </label>
                            </div>
                        </div>

                        {{-- title form input --}}
                        <div class="title-cont-input floatLeft">

                            <select id="select-province">
                                <option>Metro Manila</option>
                                <option>Abra</option>
                                <option>Agusan de Norte</option>
                            </select>

                        </div>

                    </fieldset>

                    {{-- select city --}}
                    <fieldset class="clearfix">

                        {{-- title form label --}}
                        <div class="sellitem-title-cont floatLeft">
                            <div class="sellitem-label floatLeft talignright">
                                <label>City
                                    <span class="cff0">*</span>
                                </label>
                            </div>
                        </div>

                        {{-- title form input --}}
                        <div class="title-cont-input floatLeft">

                            <select id="select-city">
                                <option>Caloocan</option>
                                <option>Las piñas</option>
                                <option>Makati</option>
                            </select>

                        </div>

                    </fieldset>

                    {{-- mobile number --}}
                    <fieldset class="clearfix border-b mt-15 mb-15 pad-b-10">

                        {{-- title form label --}}
                        <div class="sellitem-title-cont floatLeft">
                            <div class="sellitem-label floatLeft talignright">
                                <label>Mobile number
                                    <span class="cff0">*</span>
                                </label>
                            </div>
                        </div>

                        {{-- title form input --}}
                        <div class="title-cont-input floatLeft">

                            {!! Form::text('number', '',
                                array('required',
                                    'id' => 'mobile-number', 'name' => 'mobile-number')) !!}

                        </div>

                    </fieldset>

                    {{-- item submit button form --}}
                    <fieldset class="clearfix">

                        <div class="btn_form floatLeft">

                            {{-- submit button for ads --}}
                            <input class="button input-blue floatRight" type="submit" value="Submit Ads" name="submitads">

                        </div>

                    </fieldset>
                {!! Form::close() !!}

            </div>

        </div>
    </div>

</div>

@endsection