<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="a bitcoin trading lab">
    <meta name="author" description="Crypto Exchange Option">
    <meta property="og:url"           content="{{ url('/') }}" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Crypto Exchange Option" />
    <meta property="og:description"   content="a bitcoin exchange website" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Welcome to Crypto Exchange Option</title>

    <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.min.css') }}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" type="text/css" href="{!! asset('css/owl.carousel.css') !!}">
    <!-- owl-carousel CSS -->
    <link rel="stylesheet" type="text/css" href="{!! asset('css/owl.transitions.css') !!}">
    <!-- Animate CSS -->
    <link rel="stylesheet" type="text/css" href="{!! asset('css/animate.css') !!}">

    <link rel="stylesheet" type="text/css" href="{!! asset('css/meanmenu.min.css') !!}">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{!! asset('css/font-awesome.min.css') !!}">
    <!-- Ionicons CSS -->
    <link rel="stylesheet" type="text/css" href="{!! asset('css/icon.css') !!}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" type="text/css" href="{!! asset('css/magnific.min.css') !!}">

    <!-- style CSS -->
    <link rel="stylesheet" type="text/css" href="{!! asset('css/style.css') !!}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" type="text/css" href="{!! asset('css/responsive.css') !!}">

    <link rel="icon" type="image/png" href="{!! asset('images/logo.png') !!}" width="140px">
    <script src="{!! asset('js/modernizr.js') !!}"></script>
    <!-- pass php vars to javascript -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
            'appUrl' => url("/"),
            'siteUser' => auth()->user(),
        ]); ?>
    </script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="../lib/html5shiv/html5shiv.js"></script>
    <script src="../lib/respond/respond.src.js"></script>
    <![endif]-->
</head>

<body class="signwrapper">
<div id="app">
    <!-- Start Slider Area -->
    <div class="login-area">
        <div class="login-slider">
            <div class="login-overly"></div>
            <div class="table">
                <div class="table-cell">
                    <div class="container">
                        <div class="row">
                            <div class=" col-md-12 col-sm-12 col-xs-12">
                                <div class="login-wrapper">
                                    <!-- Start Login Form -->
                                    <div class="login-form">
                                        <h4 class="login-title text-center">Reset Password</h4>
                                        <div class="row">
                                            <form method="POST" action="{{ route('password.email') }}">
                                                {{ csrf_field() }}
                                                @if (session('status'))
                                                    <div class="alert alert-success">
                                                        <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&#215;</button>
                                                        {{ session('status') }}
                                                    </div>
                                                @endif
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <input type="email" name="email" class="form-control" placeholder="Enter Email" value="{{ old('email') }}">
                                                    @if ($errors->has('email'))
                                                        <span class="help-block">
                                        <strong style="color: red;">{{ $errors->first('email') }}</strong>
                                    </span>
                                                    @endif
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                                    <button type="submit" id="submit" class="slide-btn login-btn">Send Password Reset Link</button>
                                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                                    <div class="clearfix"></div>
                                                </div>
                                               </form>
                                        </div>
                                    </div>
                                    <!-- End Login Form -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Slider Area -->
</div>
<script src="{!! asset('js/jquery-1.12.4.min.js') !!}"></script>
<script src="{!! asset('js/bootstrap.min.js') !!}"></script>
<script src="{!! asset('js/owl.carousel.min.js') !!}"></script>
<script src="{!! asset('js/jquery.counterup.min.js') !!}"></script>
<script src="{!! asset('js/waypoints.js') !!}"></script>
<script src="{!! asset('js/magnific.min.js') !!}"></script>
<script src="{!! asset('js/wow.min.js') !!}"></script>
<script src="{!! asset('js/jquery.meanmenu.js') !!}"></script>
<script src="{!! asset('js/plugins.js') !!}"></script>
<script src="{!! asset('js/main.js') !!}"></script>
<script src="{!! asset('js/app.js') !!}"></script>
<script>
    $(function() {

        // Select2 Box
        $("select.form-control").select2({ minimumResultsForSearch: Infinity });

    });
</script>



</body></html>
