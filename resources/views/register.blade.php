<!DOCTYPE html>
<html>
<head>

    {{-- meta tags --}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- title --}}
    <title>Get started with buyitsellit</title>

    {{-- css style --}}
    <link href="{{ asset('/css/global.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

    {{-- javascript --}}
    <script src="{{ asset('/js/global.js') }}" type="text/javascript"></script>

</head>

<body>

    <div class="register_account">

        {{-- sample logo only --}}
        <div class="logo-cont mb-20">

            <a href="/"><img src="{{ asset('/images/logo-buyitsellit.png') }}"></a>

            {{-- sub title --}}
            <span>Get started with buyitsellit</span>

        </div>

        {{-- register label --}}
        <div class="reg-label mb-20">
            <label>Create your personal account or start business account</label>
        </div>

        <div class="wrap">

            {{-- resgiter title --}}
            <h4 class="title">Create an Account</h4>

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>whoops!</strong> There were some problems with your input.<br><br/>
                        <ul>
                            @foreach ($errors->all() as $error)

                                <li>{{ $error }}</li>

                            @endforeach
                        </ul>

                    </div>
                @endif




            <div class="col_1_of_2 span_1_of_2 ml-0">

                {{-- register form --}}
                {!! Form::open(array('url' => 'register')) !!}
                {{--<form role="form" method="POST" action="register">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">--}}

                    {{-- form name --}}
                    <div>
                        {!! Form::text('firstname', '',
                            array('required',
                                    'id' => 'firstname', 'name' => 'firstname',
                                    'class' => 'form-control c-999 mt-mb-15',
                                    'placeholder' => 'First Name')) !!}

                        {{--<input type="text" class="form-control c-999 mt-mb-15" name="first_name" value="{{ old('first_name') }}">--}}

                    </div>

                    {{-- form name --}}
                    <div>
                        {!! Form::text('lastname', '',
                            array('required',
                                    'id' => 'lastname', 'name' => 'lastname',
                                    'class' => 'form-control c-999 mt-mb-15',
                                    'placeholder' => 'Last Name')) !!}

                        {{--<input type="text" class="form-control c-999 mt-mb-15" name="last_name" value="{{ old('last_name') }}">--}}

                    </div>

                    {{-- form company name --}}
                    <div>
                        {!! Form::text('mobile', '',
                            array('required',
                                    'id' => 'mobile', 'name' => 'mobile',
                                    'class' => 'form-control c-999 mt-mb-15',
                                    'placeholder' => 'Mobile Number')) !!}

                        {{--<input type="text" class="form-control c-999 mt-mb-15" name="mobile" value="{{ old('mobile') }}">--}}

                    </div>

                    {{-- form email --}}
                    <div>
                        {!! Form::email('email', '',
                            array('required',
                                'id' => 'email', 'name' => 'email',
                                'class' => 'form-control mt-mb-15',
                                'placeholder' => 'Email')) !!}

                        {{--<input type="email" class="form-control mt-mb-15" name="email" value="{{ old('email') }}">--}}

                    </div>

                    {{-- form password --}}
                    <div>
                        {!! Form::password('password',
                            array('required',
                                'id' => 'password', 'name' => 'password',
                                'class' => 'form-control mt-mb-15',
                                'placeholder' => 'Password')) !!}

                        {{--<input type="password" class="form-control mt-mb-15" name="password">--}}

                    </div>

                    {{-- form cpassword --}}
                    <div>
                        {!! Form::password('password_confirmation',
                            array('required',
                                'id' => 'password_confirmation', 'name' => 'password_confirmation',
                                'class' => 'form-control mt-mb-15',
                                'placeholder' => 'Confirm Password')) !!}

                        {{--<input type="password" class="form-control mt-mb-15" name="password_confirmation">--}}

                    </div>

                    {{-- create account button --}}
                    <div class="clear floatLeft mt-10">

                        {!! Form::submit('Create Account',
                            array('class' => 'grey btn')) !!}

                        {{--<input type="submit" class="grey btn">--}}

                        <p class="terms">By clicking 'Create Account' you agree to the <a href="#">Terms &amp; Conditions</a></p>

                    </div>

                {{--</form>--}}
                {!! Form::close() !!}


            </div>

            <div class="col_1_of_2 span_1_of_2">
                <div class="sd-rcc" style="width: 350px; margin-top: 59.5px;">
                    <div class="sd-rts">
                        Already have an account?
                    </div>

                    {!! Form::submit('Sign in',
                        array('class' => 'btn button input-blue width100px', 'name' => 'signin')) !!}

                </div>
            </div>

        </div>
    </div>

    {{-- register footer --}}
    <div id="glbfooter" class="gh-w gh-flex" role="contentinfo">

        <div id="gf-t-box">
            <table class="gf-t">
                <tbody>
                    <tr  valign="top">
                        <td class="gf-legal">
                            Copyright 2015-2016 Applife Technology Corp. All Rights Reserved.
                            <a href="#">User Agreement</a>
                            ,
                            <a href="#">Privacy</a>
                            and
                            <a href="#">Cookies.</a>
                        </td>

                        {{--<td nowrap="" align="center">
                            <a href="#" title="Verify site's TRUSTe certificate">
                                <i id="gf-truste">Norton Secured - powered by Verisign</i>
                            </a>
                            <a href="https://trustsealinfo.websecurity.norton.com/splash?form_file=fdf/splash.fdf&dn=WWW.EBAY.COM&lang=en" title="Verify site's SSL certificate">
                                <i id="gf-norton">Norton Secured - powered by Verisign</i>
                            </a>
                        </td>--}}
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

</body>
</html>

























































