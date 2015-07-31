@extends('app')

@section('title')
    Login success
@stop

@section('content')

<div class="loginsuccess">
    <div class="main">

        <div class="wrap">
            <div class="loginsuccess-cont">

                {{-- top header --}}
                <div class="pdt15">

                    <h1 class="customh1">
                        <div class="sm-co sm-su">
                            <i class="gspr icsu"></i>
                            <p> Welcome to kol.ph, {{ Auth::user() ->first_name }}</p>
                        </div>
                    </h1>

                </div>


                {{-- body --}}
                <div class="cntr">

                    <div class="pdt20">
                        You'll be able to sign in to eBay with
                        <b>{{ Auth::user() ->email }}</b>
                    </div>

                    <ul class="infc">

                        <li>To save you the time of creating a unique user ID, we've selected infan.ph for you. This is what will display when you bid, buy, or sell on kol.ph.</li>

                        <li>
                            Want to choose your own user ID? Just go to
                            <b>My kol.ph</b>
                            on your computer, click the
                            <b>Account</b>
                            tab, and then go to
                            <b>Personal Information</b>.
                        </li>

                    </ul>

                    {{-- button continue --}}
                    <a id="sbtBtn" class="btn btn-prim input-blue c-fff" target="" href="/">Continue</a>

                </div>
            </div>

        </div>

    </div>
</div>


@endsection