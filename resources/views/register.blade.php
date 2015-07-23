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
            <h4 class="title">Creat an Account</h4>

            {{-- register form --}}
            {!! Form::open() !!}

                <div class="col_1_of_2 span_1_of_2 ml-0">

                    {{-- form name --}}
                    <div>
                        {!! Form::text('First Name', '',
                            array('required',
                                    'id' => 'fname', 'name' => 'fname',
                                    'class' => 'form-control c-999 mt-mb-15',
                                    'placeholder' => 'First Name')) !!}
                    </div>

                    {{-- form name --}}
                    <div>
                        {!! Form::text('Last Name', '',
                            array('required',
                                    'id' => 'lname', 'name' => 'lname',
                                    'class' => 'form-control c-999 mt-mb-15',
                                    'placeholder' => 'Last Name')) !!}
                    </div>

                    {{-- form company name --}}
                    <div>
                        {!! Form::text('Mobile', '',
                            array('required',
                                    'id' => 'mobile', 'name' => 'mobile',
                                    'class' => 'form-control c-999 mt-mb-15',
                                    'placeholder' => 'Mobile Number')) !!}
                    </div>

                    {{-- form email --}}
                    <div>
                        {!! Form::email('email', '',
                            array('required',
                                'id' => 'email', 'name' => 'email',
                                'class' => 'form-control mt-mb-15',
                                'placeholder' => 'Email')) !!}
                    </div>

                    {{-- form password --}}
                    <div>
                        {!! Form::password('password',
                            array('required',
                                'id' => 'password', 'name' => 'password',
                                'class' => 'form-control mt-mb-15',
                                'placeholder' => 'Password')) !!}
                    </div>

                    {{-- form cpassword --}}
                    <div>
                        {!! Form::password('cpassword',
                            array('required',
                                'id' => 'cpassword', 'name' => 'cpassword',
                                'class' => 'form-control mt-mb-15',
                                'placeholder' => 'Confirm Password')) !!}
                    </div>

                    {{-- create account button --}}
                    <div class="clear floatLeft mt-10">

                        {!! Form::button('Create Account',
                            array('class' => 'grey btn')) !!}

                        <p class="terms">By clicking 'Create Account' you agree to the <a href="#">Terms &amp; Conditions</a></p>

                    </div>

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

            {!! Form::close() !!}

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

























































