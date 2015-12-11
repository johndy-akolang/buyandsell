@extends('app')

@section('title')
    Update Item  {{ $item->slug }}
@stop

@section('content')

<div class="sellitem">
    <div class="main">

        <div class="wrap">
            <h3>Update Item</h3>
            <div class="cont sell-item-cont bor-rad5 border1ccc pad10">

                <form method="post" action='{{ url("item/update") }}'>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="item_id" value="{{ $item->id }}{{ old('item_id') }}">
                    
                    <fieldset class="clearfix">

                        {{-- title form label --}}
                        <div class="sellitem-title-cont floatLeft">
                            <div class="sellitem-label floatLeft">
                                <label>What are you selling?
                                    <!-- <span class="cff0">*</span> -->
                                </label>
                            </div>
                        </div>

                        {{-- title form input --}}
                        <div class="title-cont-input floatLeft">

                            <input type="text" name = "title" class="form-control" value="@if(!old('title')){{$item->title}}@endif{{ old('title') }}"/>

                        </div>

                    </fieldset>

                    <fieldset class="clearfix mt-15 mb-15">

                        {{-- price form label --}}
                        <div class="sellitem-title-cont floatLeft">
                            <div class="sellitem-label floatLeft">
                                <label>Price
                                    <!-- <span class="cff0">*</span> -->
                                </label>
                            </div>
                        </div>

                        {{-- price form input --}}
                        <div class="title-cont-input floatLeft">

                            <input type="text" name="price" class="form-control" value="@if(!old('price')){{$item->price}}@endif{{ old('price') }}"/>

                        </div>

                    </fieldset>

                    {{-- select condition --}}
                    <fieldset class="clearfix">

                        {{-- title form label --}}
                        <div class="sellitem-title-cont floatLeft">
                            <div class="sellitem-label floatLeft">
                                <label>Condition
                                    <!-- <span class="cff0">*</span> -->
                                </label>
                            </div>
                        </div>

                        {{-- title form input --}}
                        <div class="title-cont-input floatLeft">

                            {!! Form::select('condition',
                                (['0' => 'Select'] + $condition),
                                null,
                                ['class' => 'form-control']) !!}
                                

                            <!-- <select name="condition" class="form-control">    
                                <option value="@if(!old('condition')){{$item->condition}}@endif{{ old('condition') }}"></option>
                            </select>  -->


                        </div>

                    </fieldset>

                    {{-- selecty category --}}
                    <fieldset class="clearfix mt-15 border-b mb-15 pad-b-10">

                        {{-- title form label --}}
                        <div class="sellitem-title-cont floatLeft">
                            <div class="sellitem-label floatLeft">
                                <label>Choose a Category
                                    <!-- <span class="cff0">*</span> -->
                                </label>
                            </div>
                        </div>

                        {{-- title form input --}}
                        <div class="title-cont-input floatLeft">

                            {{-- select category --}}
                            {!! Form::select('category',
                                (['0' => 'Select'] + $category),
                                null,
                                ['class' => 'form-control']) !!}

                        </div>
                    </fieldset>

                    {{-- item form description --}}
                    <fieldset class="clearfix">

                        {{-- title form label --}}
                        <div class="sellitem-title-cont floatLeft">
                            <div class="sellitem-label floatLeft">
                                <label>Description
                                    <!-- <span class="cff0">*</span> -->
                                </label>
                            </div>
                        </div>

                        {{-- text area description --}}
                        <div class="title-cont-input floatLeft">

                            <textarea id="description-item" name="description" class="form-control" rows="10" cols="10">
                                @if(!old('description'))
                                {!! $item->description !!}
                                @endif
                                {!! old('description') !!}
                            </textarea>

                            <p class="desc c-aaa">
                                <small>
                                    <b id="add-title-counter" class="counter-placeholder" data-for-id="add-title">700</b>
                                    characters left
                                </small>
                            </p>
                        </div>

                    </fieldset>

                    {{-- item fomr upload photos --}}
                    <fieldset class="clearfix border-b mb-15 pad-b-10">

                        {{-- title form label --}}
                        <div class="sellitem-title-cont floatLeft">
                            <div class="sellitem-label floatLeft">
                                <label>Upload photos</label>
                            </div>
                        </div>

                        <div class="title-cont-input floatLeft">
                            {!! Form::file('images', null) !!}

                            <div class="mt-15">
                                <img src="{{ asset($item->images) }}" height="150" /> 
                            </div>

                        </div>

                    </fieldset>

                    {{-- select province --}}
                    <fieldset class="clearfix">

                        {{-- title form label --}}
                        <div class="sellitem-title-cont floatLeft">
                            <div class="sellitem-label floatLeft">
                                <label>Province
                                    <!-- <span class="cff0">*</span>-->
                                </label>
                            </div>
                        </div>

                        {{-- title form input --}}
                        <div class="title-cont-input floatLeft">

                            {!! Form::select('province',
                                (['0' => 'Select'] + $province),
                                null,
                                ['class' => 'form-control']) !!}

                        </div>

                    </fieldset>

                    {{-- select city --}}
                    <fieldset class="clearfix">

                        {{-- title form label --}}
                        <div class="sellitem-title-cont floatLeft">
                            <div class="sellitem-label floatLeft">
                                <label>City
                                    <!-- <span class="cff0">*</span> -->
                                </label>
                            </div>
                        </div>

                        {{-- title form input --}}
                        <div class="title-cont-input floatLeft">

                            {!! Form::select('city',
                                (['0' => 'Select'] + $city),
                                null,
                                ['class' => 'form-control']) !!}

                        </div>

                    </fieldset>

                    {{-- mobile number --}}
                    <fieldset class="clearfix border-b mb-15 pad-b-10">

                        {{-- title form label --}}
                        <div class="sellitem-title-cont floatLeft">
                            <div class="sellitem-label floatLeft">
                                <label>Business Mobile number
                                    <!-- <span class="cff0">*</span> -->
                                </label>
                            </div>
                        </div>

                        {{-- title form input --}}
                        <div class="title-cont-input floatLeft">

                            <input type="text" name="mobile" class="form-control" value="@if(!old('mobile')){{$item->mobile}}@endif{{ old('mobile') }}"/>

                        </div>

                    </fieldset>

                    <fieldset class="clearfix">

                        <div class="btn_form floatRight">
                            {!! Form::submit('Update Item', ['class' => 'btn btn-primary input-blue floatRight']) !!}
                        </div>
                    </fieldset>

                </form>    

            </div>

        </div>
    </div>

</div>


@endsection