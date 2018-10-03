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

    <meta name="csrf-token" content="{{ csrf_token() }}">




    @yield('styles')


    <link rel="icon" type="image/png" href="{!! asset('images/logo.png') !!}" width="40px">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- pass php vars to javascript -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
            'appUrl' => url("/"),
            'siteUser' => auth()->user(),
        ]); ?>
    </script>
    <div id="google_translate_element" align="right"></div><script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, multilanguagePage: true}, 'google_translate_element');
        }
    </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</head>
<body>
<!-- loading -->
<div id="loading" style="display: none;">
    <div id="loading-center">
        <img src="{!! asset('images/loading-img.png') !!}" alt="loader">
    </div>
</div>
<!-- loading End -->
<header>
    <!-- Start top bar -->
    <div class="topbar-area fix hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="topbar-left">
                        <ul>
                            <li><a href="#"><i class="fa fa-envelope"></i> support@cryptoexchangeoption.com</a></li>
                            <li><a href="#"><i class="fa fa-phone"></i> 0109-787776</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="topbar-right">
                        <ul>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        </ul>
                        <div class="top-admin">
                            <a class="login" href="{!! url('auth/login') !!}"><i class="fa fa-sign-in"></i>Login</a>
                            <a class="sign-up" href="{!! url('auth/register') !!}"><i class="fa fa-user"></i>Sign up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End top bar -->

    <!-- header-area start -->
    <div id="sticker" class="header-area hidden-xs">
        <div class="container">
            <div class="row">
                <!-- logo start -->
                <div class="col-md-3 col-sm-3">
                    <div class="logo">
                        <!-- Brand -->
                        <a class="navbar-brand page-scroll sticky-logo" href="{!! url('/') !!}">
                            <img src="{!! asset('images/logo1.png') !!}" alt="">
                        </a>
                    </div>
                </div>
                <!-- logo end -->
                <div class="col-md-9 col-sm-9">
                    <div class="header-right-link">
                        <!-- search option start -->
                        <form action="#">
                            <div class="search-option">
                                <input type="text" placeholder="Search...">
                                <button class="button" type="submit"><i class="fa fa-search"></i></button>
                            </div>
                            <a class="main-search" href="#"><i class="fa fa-search"></i></a>
                        </form>
                        <!-- search option end -->
                    </div>
                    <!-- mainmenu start -->
                    <nav class="navbar navbar-default">
                        <div class="collapse navbar-collapse" id="navbar-example">
                            <div class="main-menu">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a class="" href="{!! url('/') !!}">Home</a></li>
                                    <li><a href="">About</a></li>
                                    <li><a  href="#packages">Packages</a></li>
                                    <li><a  href="#team">Team</a></li>
                                    <li><a href="{!! url('/contact') !!}">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <!-- mainmenu end -->
                  {{--  <div class="quote-button hidden-sm">
                        <a href="#" class="quote-btn"  title="Quick view" data-toggle="modal" data-target="#quoteModal">Get a Quote</a>
                    </div>--}}
                </div>
            </div>
        </div>
    </div>
    <!-- header-area end -->
    <!-- mobile-menu-area start -->
    <div class="mobile-menu-area hidden-lg hidden-md hidden-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mobile-menu">
                        <div class="logo">
                            <a href="{!! url('/') !!}"><img src="{!! asset('images/logo1.png') !!}" alt=""></a>
                        </div>
                        <nav id="dropdown">
                            <ul>
                                <li><a class="" href="{!! url('/') !!}">Home</a></li>
                                <li><a href="">About</a></li>
                                <li><a  href="#packages">Packages</a></li>
                                <li><a  href="#team">Team</a></li>
                                <li><a href="{!! url('/contact') !!}">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile-menu-area end -->
</header>
<!-- header end -->
    @yield('content')
   @include('pages.footer')
    @yield('scripts')


<!-- Modal -->
<div class="modal fade" id="quoteModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="o-form text-center">Request for free call</h3>
            </div>
            <div class="modal-body">
                <div class="call-quote">
                    <div class="modal-call">
                        <div class="quote-icon">
                            <div class="call-icon">
                                <i class="fa fa-phone-square"></i>
                                <p>
                                    Call :0109-787776<br>
                                    <span>Monday-Friday (10am-18pm)</span>
                                </p>
                            </div>
                        </div>
                        <div class="quote-icon">
                            <div class="call-icon">
                                <i class="fa fa-envelope"></i>
                                <p>
                                    Email : info@cryiptocoin.com<br>
                                    <span>Web : www.rockstheme.com</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="quote-form">
                    <form id="call-form" method="POST" action="#" class="quote-feilds">
                        <!-- single feilds -->
                        <div class="sign-feilds">
                            <div class="input-text">
                                <input type="text" class="form-quote" placeholder="Your Name" required data-error="Please enter your name">
                            </div>
                        </div>
                        <!-- single feilds -->
                        <div class="sign-feilds">
                            <div class="input-text">
                                <input type="text" class="form-quote " placeholder="Your Email" required data-error="Please enter your email">
                            </div>
                        </div>
                        <!-- single feilds -->
                        <div class="sign-feilds">
                            <div class="input-text">
                                <textarea  placeholder="Massage" class="form-quote quote-message" required data-error="Write your message"></textarea>
                            </div>
                        </div>
                        <!-- single feilds -->
                        <div class="sign-feilds">
                            <div class="submit-btn">
                                <button type="submit" class="quote-btn">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- modal-body -->
        </div>
        <!-- modal-content -->
    </div>
</div>
<!-- END Modal -->
</body>
</html>