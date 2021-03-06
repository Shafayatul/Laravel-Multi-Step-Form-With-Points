<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Project Oblio Airdrop</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="{{ URL::asset('https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('https://fonts.googleapis.com/icon?family=Material+Icons') }}" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{ URL::asset('plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{ URL::asset('plugins/node-waves/waves.css') }}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{ URL::asset('plugins/animate-css/animate.css') }}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">Project Oblio Airdrop</a>
            <small></small>
        </div>
        <div class="card">
            <div class="body">


            <div class="row">
                <h3 class="text-center">Choose how you’ll earn and contribute to Project Oblio.</h3>
                <hr>
                <div class="col-xs-12">
                    <a href="{{url('/save-type/anonymous')}}">
                        <div class="info-box bg-cyan hover-expand-effect">
                            <div class="icon">
                                <i class="material-icons">person_outline</i>
                            </div>
                            <div class="content">
                                <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20">ANONYMOUS</div>
                                <div class="text">
                                    <br>
                                    10 OBL Free. 2.5 mETH/OBL contribution rate.
                                    <br>
                                    E-mail, anonymized DUBs
                                </div>
                                
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12">
                    <a href="{{url('/save-type/simple')}}">
                        <div class="info-box bg-cyan hover-expand-effect">
                            <div class="icon">
                                <i class="material-icons">accessibility_new</i>
                            </div>
                            <div class="content">
                                <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20">SIMPLE</div>
                                <div class="text">
                                    3 Karma and 300 OBL Free. 2.0 mETH/OBL contribution rate
                                    <br>
                                    Phone, e-mail, anonymized DUBs
                                </div>
                                
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12">
                    <a href="{{url('/save-type/advance')}}">
                        <div class="info-box bg-cyan hover-expand-effect">
                            <div class="icon">
                                <i class="material-icons">how_to_reg</i>
                            </div>
                            <div class="content">
                                <div class="number count-to" data-from="0" data-to="1225" data-speed="1000" data-fresh-interval="20">ADVANCE</div>
                                <div class="text">
                                    10 Karma. 800 OBL Free. 1.0 mETH/OBL contribution rate
                                    <br>
                                    Full identification needed.
                                </div>
                            </div>
                        </div>
                    </a>
                </div>


            </div>







            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="{{ URL::asset('plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{ URL::asset('plugins/bootstrap/js/bootstrap.js') }}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{ URL::asset('plugins/node-waves/waves.js') }}"></script>

    <!-- Validation Plugin Js -->
    <script src="{{ URL::asset('plugins/jquery-validation/jquery.validate.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{ URL::asset('js/admin.js') }}"></script>
    <script src="{{ URL::asset('js/pages/examples/sign-in.js') }}"></script>
</body>

</html>