@extends('app')

@section('title')
    My account
@stop

@section('content')

<div class="account">
    <div class="main">
        <div class="wrap">

            {{-- cover image --}}
            <div class="cvrimg">
                <div id="cover-wrapper">
                    <img src="{{ asset('/images/profile_coverimg_wood.jpg') }}">
                </div>
            </div>

            <div id="index-card" class="idx_crd no_feedback clearfix">

                <div class="shad clearfix">

                    {{-- avatar --}}
                    <div class="usrimg">
                        <div class="icon">
                            <span class="cll">
                                <img class="prof_img img" src="{{ asset('/images/avatar.png') }}">
                            </span>
                        </div>
                    </div>

                    {{-- user info --}}
                    <div class="usrinfo">
                        <div class="mbg">
                            <span class="mbg-1">
                                <i class="fa fa-info-circle"></i>
                                <a class="mbg-id" href="#">markdonnie</a>
                            </span>
                        </div>
                    </div>

                    {{-- shorcut sell your item --}}
                    <div class="shrtct">
                        <span class="store each">
                            <a title="Sell your item" href="/sellitem" class="mr-5">
                                <i class="fa fa-suitcase"></i>
                            </a>
                            <span>
                                <a title="Sell your item" href="/sellitem">Sell your item</a>
                            </span>
                        </span>
                    </div>

                </div>

                {{-- profile accoutn --}}
                <div class="profile-account clearfix">

                    {{-- profile title --}}
                    <h3>Profile</h3>

                    {{-- profile name --}}
                    <div class="profile-account-cont floatLeft">
                        <div class="profile-account-label floatLeft">
                            <label>Name:</label>
                        </div>

                        <div class="profile-account-user floatLeft">
                            <label>Mark Infantado</label>
                        </div>
                    </div>

                    {{-- profile email --}}
                    <div class="profile-account-cont floatLeft">
                        <div class="profile-account-label floatLeft">
                            <label>Email:</label>
                        </div>

                        <div class="profile-account-user floatLeft">
                            <label>markinfantado@yahoo.com</label>
                        </div>
                    </div>

                    {{-- profile address --}}
                    <div class="profile-account-cont floatLeft">
                        <div class="profile-account-label floatLeft">
                            <label>Address:</label>
                        </div>

                        <div class="profile-account-user floatLeft">
                            <label>8888 Marian road 2, San Martin de Porres, Paranaque City</label>
                        </div>
                    </div>

                    {{-- profile mobile number --}}
                    <div class="profile-account-cont floatLeft">
                        <div class="profile-account-label floatLeft">
                            <label>Mobile Number:</label>
                        </div>

                        <div class="profile-account-user floatLeft">
                            <label>0987456321</label>
                        </div>
                    </div>

                    {{-- profile company name --}}
                    <div class="profile-account-cont floatLeft">
                        <div class="profile-account-label floatLeft">
                            <label>Company Name:</label>
                        </div>

                        <div class="profile-account-user floatLeft">
                            <label>Miguelito's International Corp.</label>
                        </div>
                    </div>

                    {{-- profile date registered --}}
                    <div class="profile-account-cont floatLeft">
                        <div class="profile-account-label floatLeft">
                            <label>Registered:</label>
                        </div>

                        <div class="profile-account-user floatLeft">
                            <label>July 15, 2015</label>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>



@endsection