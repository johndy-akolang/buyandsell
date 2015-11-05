{{-- modal view --}}
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Update your item</h4>
            </div>

            {!! Form::open(['url' => '/item/'.$item->id, 'method' => 'PUT', 'files' => true]) !!}

                <div class="modal-body">

                    <label>What are you selling?</label>

                    <input required="required" type="text" name="title" class="form-control" value="@if(!old('title')){{$item->title}}@endif{{ old('title') }}"/>

                </div>

                <div class="modal-body">

                    <label>Price</label>

                    <input required="required" type="text" name="price" class="form-control" value="@if(!old('price')){{ $item->price }}@endif{{ old('price') }}"/>

                </div>

                <div class="modal-body">

                    <label>Condition</label>

                     <select class="form-control">
                        <option>Brand new</option>
                        <option>2nd Hand(Used)</option>
                    </select>

                </div>

                <div class="modal-body">

                    <label>Category</label>

                    <select class="form-control">
                        <option>Vehicles</option>
                        <option>Motorcycle</option>
                        <option>Fashion</option>
                        <option>Electronics</option>
                        <option>Sports</option>
                        <option>Toys</option>
                        <option>Events</option>
                        <option>Pets</option>
                    </select>

                </div>

                <div class="modal-body">

                    <label>Description</label>

                    <textarea name='description'class="form-control ht-150">
                        @if(!old('description'))
                        {!! $item->description !!}
                        @endif
                        {!! old('description') !!}
                    </textarea>

                </div>

                <div class="modal-body">

                    <label class="mr-15">Photos</label>

                    <img src="{{ asset($item->images) }}" height="150">

                    {!! Form::file('images', null) !!}

                </div>

                <div class="modal-body">

                    <label>Province</label>

                    <select class="form-control">
                        <option>Metro Manila</option>
                        <option>Abra</option>
                        <option>Agusan de Norte</option>
                    </select>

                </div>

                <div class="modal-body">

                    <label>City</label>

                    <select class="form-control">
                        <option>Caloocan</option>
                        <option>Las piñas</option>
                        <option>Makati</option>
                    </select>

                </div>

                <div class="modal-body">

                    <label>Mobile number</label>

                    <input required="required" type="text" name="mobile" class="form-control" value="@if(!old('mobile')){{$item->mobile}}@endif{{ old('mobile') }}"/>

                </div>

            {!! Form::close() !!}

            <div class="modal-footer">
                <button type="button" class="btn btn-default grey" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary input-blue">Save</button>
            </div>
        </div>
    </div>
</div>