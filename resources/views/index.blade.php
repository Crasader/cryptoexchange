@extends('layouts.base')
@section('styles')
    <!-- Bootstrap CSS -->
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

    <link rel="stylesheet" type="text/css" href="{!! asset('css/main.css') !!}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" type="text/css" href="{!! asset('css/responsive.css') !!}">



@endsection

@section('content')
    <div id="app">
        <!-- Start Slider Area -->
        <div class="intro-area" style="background-image: url(images/1.jpg)">
            <div class="main-overly"></div>
            <!-- <div class="intro-carousel"> -->
            <div class="intro-content">
                <div class="slider-images">
                    <img src="{!! asset('images/1.jpg') !!}" alt="">
                </div>
                <div class="slider-content">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- layer 1 -->
                                        <div class="layer-1-2">
                                            <h1 class="title2">Crypto Exchange <span class="color">Option</span></h1>
                                        </div>
                                        <!-- layer 2 -->
                                        <div class="layer-1-1 ">
                                            <p>Investment is key.</p>
                                        </div>
                                        <!-- layer 3 -->
                                        <div class="layer-1-3">
                                            <a href="{!! url('auth/register') !!}" class="ready-btn left-btn" >Register</a>
                                            <a href="{!! url('auth/login') !!}" class="ready-btn" >Login</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--   </div>-->
                {{-- <div class="intro-content">
                     <div class="slider-images">
                         <img src="{!! asset('images/2.jpg') !!}" alt="">
                     </div>
                     <div class="slider-content">
                         <div class="display-table">
                             <div class="display-table-cell">
                                 <div class="container">
                                     <div class="row">
                                         <div class="col-md-12">
                                             &lt;!&ndash; layer 1 &ndash;&gt;
                                             <div class="layer-1-2">
                                                 <h1 class="title2">Cryptocoin is Secure <span class="color">Investment</span></h1>
                                             </div>
                                             &lt;!&ndash; layer 2 &ndash;&gt;
                                             <div class="layer-1-1">
                                                 <p>A consulting or consultancy firm is a business of one or more experts that provides professional advice.</p>
                                             </div>
                                             &lt;!&ndash; layer 3 &ndash;&gt;
                                             <div class="layer-1-3">
                                                 <a href="#" class="ready-btn left-btn" >Our Services</a>
                                                 <a href="#" class="ready-btn right-btn" >Contact us</a>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>--}}
            </div>
        </div>
        <!-- End Slider Area -->
        <!-- Start Price Area -->
        <!-- <div class="price-area">
             <div class="container">
                 <div class="row">
                     <div class="col-md-12 col-sm-12 ">
                         <div class="coin-rate text-center">
                             &lt;!&ndash; single price &ndash;&gt;
                             <div class="single-coin">
                                 <span class="btc-usd">BTC / USD</span>
                                 <span class="btc-price">20,150</span>
                             </div>
                             &lt;!&ndash; single price &ndash;&gt;
                             <div class="single-coin">
                                 <span class="btc-usd">ETH / USD</span>
                                 <span class="btc-price">793.00</span>
                             </div>
                             &lt;!&ndash; single price &ndash;&gt;
                             <div class="single-coin">
                                 <span class="btc-usd">LIT / USD</span>
                                 <span class="btc-price">331.50</span>
                             </div>
                             &lt;!&ndash; single price &ndash;&gt;
                             <div class="single-coin">
                                 <span class="btc-usd">NEM / USD</span>
                                 <span class="btc-price">0.9000</span>
                             </div>
                             &lt;!&ndash; single price &ndash;&gt;
                             <div class="single-coin">
                                 <span class="btc-usd">REP / USD</span>
                                 <span class="btc-price">0.7600</span>
                             </div>
                             &lt;!&ndash; single price &ndash;&gt;
                             <div class="single-coin">
                                 <span class="btc-usd">DAS / USD</span>
                                 <span class="btc-price">1298.20</span>
                             </div>
                             &lt;!&ndash; single price &ndash;&gt;
                             <div class="single-coin">
                                 <span class="btc-usd">QTU / USD</span>
                                 <span class="btc-price">62.780</span>
                             </div>
                             &lt;!&ndash; single price &ndash;&gt;
                             <div class="single-coin">
                                 <span class="btc-usd">IOT / USD</span>
                                 <span class="btc-price">5.1200</span>
                             </div>
                             &lt;!&ndash; single price &ndash;&gt;
                             <div class="single-coin">
                                 <span class="btc-usd">ZCA / USD</span>
                                 <span class="btc-price">614.70</span>
                             </div>
                             &lt;!&ndash; single price &ndash;&gt;
                             <div class="single-coin">
                                 <span class="btc-usd">MON / USD</span>
                                 <span class="btc-price">400.35</span>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>-->
        <!-- End Price Area -->
        <!-- service area start -->
        <div class="welcome-area area-padding">
            <div class="container">
                <div class="row">
                    <!-- single-well end-->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="well-services text-center">
                            <div class="services-img">
                                <img src="{!! asset('images/coin1.png') !!}" alt="">
                            </div>
                            <div class="main-services">
                                <div class="service-content">
                                    <h4>Create an account</h4>
                                    {{--    <p>Aspernatur sit adipisci quaerat unde at neque Redug Lagre dolor sit amet consectetu.</p>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-well end-->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="well-services text-center">
                            <div class="services-img">
                                <img src="{!! asset('images/coin2.png') !!}" alt="">
                            </div>
                            <div class="main-services">
                                <div class="service-content">
                                    <h4>Choose a suitable plan and make deposit</h4>
                                    {{--     <p>Aspernatur sit adipisci quaerat unde at neque Redug Lagre dolor sit amet consectetu.</p>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-well end-->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="well-services text-center">
                            <div class="services-img">
                                <img src="{!! asset('images/coin3.png') !!}" alt="">
                            </div>
                            <div class="main-services">
                                <div class="service-content">
                                    <h4>Watch your investment/Generate Returns.</h4>
                                    {{--  <p>Aspernatur sit adipisci quaerat unde at neque Redug Lagre dolor sit amet consectetu.</p>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-well end -->
                </div>
            </div>
        </div>
        <!-- service-area end -->
        <!-- Start Calculater area -->
        <div class="calculator-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="section-headline white-headline text-left">
                            <h2>Currency <span class="color">Calculator</span></h2>
                            <p>The world's Latest blockchain-powered online business platform with token investment & grow your business.Aspernatur sit adipisci quaerat unde at neque Redug.
         +                   </p>
                            <p class="hidden-xs hidden-sm">The world's Latest blockchain-powered online business platform with token investment & grow your business.Aspernatur sit adipisci quaerat unde at neque Redug Lagre dolor sit amet consectetu
                            </p>
                        </div>
                        <div class="calculator-inner">
                            <div class="single-cal">
                                <form action="#">
                              {{--      <input type="text" name="amount" class="form-input" placeholder="0" v-model="bitcoinCalculator.amount">
                              --}}      <select>
                                        <option value="position">USD</option>
                                    </select>
                                </form>
                      {{--          <span style="color:#666" class="HS1textarea">@{{  bitcoinCalculator.amount / bitcoinCalculator.coinsBtc[0].price_usd  }}</span>
--}}
                            </div>
                        </div>
                    </div>
                    <!--End Col Area-->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <img src="{!! asset('images/1.jpg') !!}" alt="">
                    </div>
                    <!--End Col Area-->
                </div>
            </div>
        </div>
        <!-- End Calculater area -->
        <!-- Start Service area -->
        <div class="services-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            <h3>Why choose <span class="color">Crypto Exchange Option</span></h3>
                            {{--        <p>The world's Latest blockchain-powered online business platform with token investment & grow your business.</p>
                            --}}    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="all-services">
                        <!-- Start services -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="well-services text-center">
                                <div class="services-img">
                                    <img src="{!! asset('images/coin4.png') !!}" alt="">
                                </div>
                                <div class="main-services">
                                    <div class="service-content">
                                        <h4>Secure and Safe</h4>
                                        <p>All users details and activities are protected by state of the art and latest security technologies and softwares. Full SSL encryption, Strong DDOS protection server, and embedded safeguard systems all work together to provide completely secured trading process.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Start services -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="well-services text-center">
                                <div class="services-img">
                                    <img src="{!! asset('images/coin5.png') !!}" alt="">
                                </div>
                                <div class="main-services">
                                    <div class="service-content">
                                        <h4>Automated Platform</h4>
                                        <p>Easy to use and fully automated investment experience. Deposit, withdrawals and other user operations are easily and automatically performed on our fully secure platform.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Start services -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="well-services text-center">
                                <div class="services-img">
                                    <img src="{!! asset('images/coin6.png') !!}" alt="">
                                </div>
                                <div class="main-services">
                                    <div class="service-content">
                                        <h4>Simple Interface</h4>
                                        <p>Experience easily adaptable and simple account features.Little or no training is required to navigate and operate your accounts.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Start services -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="well-services text-center">
                                <div class="services-img">
                                    <img src="{!! asset('images/coin7.png') !!}" alt="">
                                </div>
                                <div class="main-services">
                                    <div class="service-content">
                                        <h4>Fast support</h4>
                                        <p>We have a team of well trained personnel to offer support services to you our esteemed clients</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Start services -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="well-services text-center">
                                <div class="services-img">
                                    <img src="{!! asset('images/coin8.png') !!}" alt="">
                                </div>
                                <div class="main-services">
                                    <div class="service-content">
                                        <h4>Excellent Trading Conditions</h4>
                                        <p>Access to over 200 trading instruments and latest software tools for verified and licensed trading partners. Powerful and lightening fast execution speed, super tight spreads and flexible leverage.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Start services -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="well-services text-center">
                                <div class="services-img">
                                    <img src="{!! asset('images/coin9.png') !!}" alt="">
                                </div>
                                <div class="main-services">
                                    <div class="service-content">
                                        <h4>Multilingual Platform Support</h4>
                                        <p>Feel free to access to perform trading/investment activities in over 50 languages. Our advanced and global structure allows diverse and varied financial experience for all users.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- End Service area -->
        <!-- Start Main Feature Area -->
        <div class="exchange-area fix area-padding" id="packages">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            <h3>Our Super <span class="color">Packages</span></h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="exchange-tab">
                            <!-- Nav tabs -->
                        {{--  <ul class="nav nav-tabs text-center" role="tablist">
                              <li role="presentation" class="active"><a href="#first" aria-controls="first" role="tab" data-toggle="tab">Usd</a></li>
                              <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"> Eur</a></li>
                          </ul>--}}
                        <!-- tab content one -->
                            <div class="tab-content">
                                <div id="first" role="tabpanel" class="tab-pane active">
                                    <div class="row">
                                        <div class="exchange-item">
                                            <!-- start single Exchange -->
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <div class="single-exchange text-center">
                                                    <div class="recive-amount">
                                                        <h2>BASIC</h2>
                                                        <span>$1000</span>
                                                        <span> - </span>
                                                        <span>$10000</span>
                                                    </div>
                                                    <div class="bit-icon">
                                                        <i class="fa fa-bitcoin"></i>
                                                    </div>
                                                    <div class="pay-amount">
                                                        <ul class="pricing-content">
                                                            <li><i aria-hidden="true" class="iq-mr-10 ion-checkmark-round"></i>Minimum 30% Profit per week</li>

                                                            <li><i aria-hidden="true" class="iq-mr-10 ion-close-round"></i>Minimum 1.07% daily</li>
                                                            <li><i aria-hidden="true" class="iq-mr-10 ion-close-round"></i>10% Referral Commission</li>
                                                        </ul>
                                                    </div>
                                                    <div class="purchase">
                                                        <a class="buy-btn" href="{!! url('auth/register') !!}">Purchase</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End single Exchange -->
                                            <!-- start single Exchange -->
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <div class="single-exchange text-center">
                                                    <div class="recive-amount">
                                                        <h2>STANDARD</h2>
                                                        <span>$10001</span>
                                                        <span> - </span>
                                                        <span>$30000</span>
                                                    </div>
                                                    <div class="bit-icon">
                                                        <i class="fa fa-bitcoin"></i>
                                                    </div>
                                                    <div class="pay-amount">
                                                        <ul class="pricing-content">
                                                            <li><i aria-hidden="true" class="iq-mr-10 ion-checkmark-round"></i>Minimum 40% Profit per week</li>

                                                            <li><i aria-hidden="true" class="iq-mr-10 ion-close-round"></i>Minimum 1.43% daily</li>
                                                            <li><i aria-hidden="true" class="iq-mr-10 ion-close-round"></i>10% Referral Commission</li>
                                                        </ul>
                                                    </div>
                                                    <div class="purchase">
                                                        <a class="buy-btn" href="{!! url('auth/register') !!}">Purchase</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End single Exchange -->
                                            <!-- start single Exchange -->
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <div class="single-exchange text-center">
                                                    <div class="recive-amount">
                                                        <h2>ULTIMATE</h2>
                                                        <span>$30001</span>
                                                        <span> - </span>
                                                        <span>$50000</span>
                                                    </div>
                                                    <div class="bit-icon">
                                                        <i class="fa fa-bitcoin"></i>
                                                    </div>
                                                    <div class="pay-amount">
                                                        <ul class="pricing-content">
                                                            <li><i aria-hidden="true" class="iq-mr-10 ion-checkmark-round"></i>Minimum 50% Profit per week</li>

                                                            <li><i aria-hidden="true" class="iq-mr-10 ion-close-round"></i>Minimum 1.79% daily</li>
                                                            <li><i aria-hidden="true" class="iq-mr-10 ion-close-round"></i>10% Referral Commission</li>
                                                        </ul>
                                                    </div>
                                                    <div class="purchase">
                                                        <a class="buy-btn" href="{!! url('auth/register') !!}">Purchase</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End single Exchange -->
                                            <!-- start single Exchange -->
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <div class="single-exchange text-center">
                                                    <div class="recive-amount">
                                                        <h2>PREMIUM</h2>
                                                        <span>$50001</span>
                                                        <span> - </span>
                                                        <span>$100000</span>
                                                    </div>
                                                    <div class="bit-icon">
                                                        <i class="fa fa-bitcoin"></i>
                                                    </div>
                                                    <div class="pay-amount">
                                                        <ul class="pricing-content">
                                                            <li><i aria-hidden="true" class="iq-mr-10 ion-checkmark-round"></i>Minimum 60% Profit per week</li>

                                                            <li><i aria-hidden="true" class="iq-mr-10 ion-close-round"></i>Minimum 2.15% daily</li>
                                                            <li><i aria-hidden="true" class="iq-mr-10 ion-close-round"></i>10% Referral Commission</li>
                                                        </ul>
                                                    </div>
                                                    <div class="purchase">
                                                        <a class="buy-btn" href="{!! url('auth/register') !!}">Purchase</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End single Exchange -->
                                            <!-- start single Exchange -->
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <div class="single-exchange text-center">
                                                    <div class="recive-amount">
                                                        <h2>PLATINUM</h2>
                                                        <span>$100001</span>
                                                        <span> - </span>
                                                        <span>$1000000</span>
                                                    </div>
                                                    <div class="bit-icon">
                                                        <i class="fa fa-bitcoin"></i>
                                                    </div>
                                                    <div class="pay-amount">
                                                        <ul class="pricing-content">
                                                            <li><i aria-hidden="true" class="iq-mr-10 ion-checkmark-round"></i>Minimum 70% Profit per week</li>

                                                            <li><i aria-hidden="true" class="iq-mr-10 ion-close-round"></i>Minimum 2.5% daily</li>
                                                            <li><i aria-hidden="true" class="iq-mr-10 ion-close-round"></i>10% Referral Commission</li>
                                                        </ul>
                                                    </div>
                                                    <div class="purchase">
                                                        <a class="buy-btn" href="{!! url('auth/register') !!}">Purchase</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End single Exchange -->
                                        </div>
                                    </div>
                                </div>
                                <!-- End single tab content -->
                                <div role="tabpanel" class="tab-pane" id="profile">
                                    <div class="row">
                                        <div class="exchange-item">
                                            <!-- start single Exchange -->
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <div class="single-exchange text-center">
                                                    <div class="recive-amount">
                                                        <span>$1000</span>
                                                        <span> - </span>
                                                        <span>$10000</span>
                                                    </div>
                                                    <div class="bit-icon">
                                                        <i class="fa fa-bitcoin"></i>
                                                    </div>
                                                    <div class="pay-amount">
                                                        <span>You Pay</span>
                                                        <h4>160 EUR</h4>
                                                    </div>
                                                    <div class="purchase">
                                                        <a class="buy-btn" href="#">Purchase</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End single Exchange -->
                                            <!-- start single Exchange -->
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <div class="single-exchange text-center">
                                                    <div class="recive-amount">
                                                        <h4>0,0200 BTC</h4>
                                                        <span>You Recive</span>
                                                    </div>
                                                    <div class="bit-icon">
                                                        <i class="fa fa-bitcoin"></i>
                                                    </div>
                                                    <div class="pay-amount">
                                                        <span>You Pay</span>
                                                        <h4>320 EUR</h4>
                                                    </div>
                                                    <div class="purchase">
                                                        <a class="buy-btn" href="#">Purchase</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End single Exchange -->
                                            <!-- start single Exchange -->
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <div class="single-exchange text-center">
                                                    <div class="recive-amount">
                                                        <h4>0,0500 BTC</h4>
                                                        <span>You Recive</span>
                                                    </div>
                                                    <div class="bit-icon">
                                                        <i class="fa fa-bitcoin"></i>
                                                    </div>
                                                    <div class="pay-amount">
                                                        <span>You Pay</span>
                                                        <h4>800 EUR</h4>
                                                    </div>
                                                    <div class="purchase">
                                                        <a class="buy-btn" href="#">Purchase</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End single Exchange -->
                                            <!-- start single Exchange -->
                                            <div class="col-md-3 col-sm-6 col-xs-12">
                                                <div class="single-exchange text-center">
                                                    <div class="recive-amount">
                                                        <h4>0,1000 BTC</h4>
                                                        <span>You Recive</span>
                                                    </div>
                                                    <div class="bit-icon">
                                                        <i class="fa fa-bitcoin"></i>
                                                    </div>
                                                    <div class="pay-amount">
                                                        <span>You Pay</span>
                                                        <h4>1600 EUR</h4>
                                                    </div>
                                                    <div class="purchase">
                                                        <a class="buy-btn" href="#">Purchase</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End single Exchange -->
                                        </div>
                                    </div>
                                </div>
                                <!-- End single Tab -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End row -->
            </div>
        </div>
        <!-- End Main Feature area-->
        <section id="testimonial" class="testimonial_section padding">
            <div class="container">
                <div class="testimonial_item align-center mb-40">
                    <h2>What Our <span>Clients</span> Say</h2>
                    <p style="color: black; font-weight: bold;">Van Rasmussen</p>
                    <p style="color: black; font-weight: bold;">Russia</p>
                    <p style="font-weight: bold;">How I wish I knew about this earlier before trying to trade on forex,truly its remarkable, although a section should be allocated to low income earners ,but all the same thanks for making me a salary earner </p>
                    <figure>
                        <img src="{!! asset('images/testi-1.png') !!}" alt="Client">
                    </figure><br/>
                    <p style="color: black; font-weight: bold;">Sandiego</p>
                    <p style="color: black; font-weight: bold;">California</p>
                    <p style="font-weight: bold;">Good interface,I've been an investor on this site for about a year now..I just dont like the fact that i cannot go past seven referrals,this should be looked into..Is it above the profit margin for investments or should I get a second account to further my referrals.</p>
                    <figure>
                        <img src="{!! asset('images/testi-2.png') !!}" alt="Client">
                    </figure>
                </div><!-- /Section Heading -->
                {{--  <ul id="testimonial_carousel" class="testimonial_items owl-carousel">
                      <li class="testimonial_item">
                          <i class="fa fa-quote-left"></i>
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br>Business Ipsum has been the industry's standard dummy text ever.</p>
                          <figure>
                              <img src="{!! asset('images/testi-1.png') !!}" alt="Client">
                          </figure>
                          <h4>JONATHAN SMITH</h4>
                      </li>
                      <li class="testimonial_item">
                          <i class="fa fa-quote-left"></i>
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br>Business Ipsum has been the industry's standard dummy text ever.</p>
                          <figure>
                              <img src="{!! asset('images/testi-2.png') !!}" alt="Client">
                          </figure>
                          <h4>Angelina Rose</h4>
                      </li>
                      <li class="testimonial_item">
                          <i class="fa fa-quote-left"></i>
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br>Business Ipsum has been the industry's standard dummy text ever.</p>
                          <figure>
                              <img src="{!! asset('images/testi-3.png') !!}" alt="Client">
                          </figure>
                          <h4>Michel Brown</h4>
                      </li>
                  </ul>--}}
            </div>
        </section><!--  /.testimonial_section -->
        <!-- Team area start -->
        <div class="team-area area-padding" id="team">
            <div class="container">
                <!-- section head -->
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            <h3>Our <span class="color">Expert Traders</span></h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="team-member">
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="single-member">
                                <div class="team-img">
                                    <a href="#">
                                        <img src="{!! asset('images/t1.jpg') !!}" alt="">
                                    </a>
                                </div>
                                <div class="team-content">
                                    <div class="team-title">
                                        <h4>Bauer</h4>
                                        <h6>Co-Founder</h6>
                                    </div>
                                    <div class="team-share">
                                        <div class="team-share">
                                            <p>A Business guru with a PHD in accouting and finance, studied in the University of Oxford and is the founder of Zion Charity Organization located in Nairobi Kenya</p>
                                            <ul class="social-icon">
                                                <li><a class="facebook" href=""><i class="fa fa-facebook"></i></a></li>
                                                <li><a class="twitter" href=""><i class="fa fa-twitter"></i></a></li>
                                                <li><a class="instagram" href=""><i class="fa fa-instagram"></i></a></li>
                                                <li><a class="instagram" href=""><i class="fa fa-rss"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- team member-->
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="single-member">
                                <div class="team-img">
                                    <a href="#">
                                        <img src="{!! asset('images/t2.jpg') !!}" alt="">
                                    </a>
                                </div>
                                <div class="team-content">
                                    <div class="team-title">
                                        <h4>Sarah</h4>
                                        <h6>Finance Expert</h6>
                                    </div>
                                    <div class="team-share">
                                        <div class="team-share">
                                            <p>Her financial analytic prowess has helped in making sure we encounter zero losses and maximization of profits. She graduated from the priceton university with a top honours degree in mathematics.</p>
                                            <ul class="social-icon">
                                                <li><a class="facebook" href=""><i class="fa fa-facebook"></i></a></li>
                                                <li><a class="twitter" href=""><i class="fa fa-twitter"></i></a></li>
                                                <li><a class="instagram" href=""><i class="fa fa-instagram"></i></a></li>
                                                <li><a class="instagram" href=""><i class="fa fa-rss"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- team member-->
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <div class="single-member">
                                <div class="team-img">
                                    <a href="#">
                                        <img src="{!! asset('images/t3.jpg') !!}" alt="">
                                    </a>
                                </div>
                                <div class="team-content">
                                    <div class="team-title">
                                        <h4>Tomasz</h4>
                                        <h6>Business Expert</h6>
                                    </div>
                                    <div class="team-share">
                                        <div class="team-share">
                                            <p>He is a cheerful,insightful charismatic,always ready to introduce new ideas to the team. An invaluable member from germany who has excelled in more ways than one basthos head of engineering hard working an trust worthy,he ensures thats the site navigation is smooth and stress free</p>
                                            <ul class="social-icon">
                                                <li><a class="facebook" href=""><i class="fa fa-facebook"></i></a></li>
                                                <li><a class="twitter" href=""><i class="fa fa-twitter"></i></a></li>
                                                <li><a class="instagram" href=""><i class="fa fa-instagram"></i></a></li>
                                                <li><a class="instagram" href=""><i class="fa fa-rss"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- team member-->
                        <div class="col-md-3 hidden-sm col-xs-12">
                            <div class="single-member">
                                <div class="team-img">
                                    <a href="#">
                                        <img src="{!! asset('images/t4.jpg') !!}" alt="">
                                    </a>
                                </div>
                                <div class="team-content">
                                    <div class="team-title">
                                        <h4>Bartosz</h4>
                                        <h6>Finance Expert</h6>
                                    </div>
                                    <div class="team-share">
                                        <p>Redug Lares dolor sit amet, consectetur adipisicing elit. Animi vero excepturi magnam ducimus adipisci voluptas</p>
                                        <ul class="social-icon">
                                            <li><a class="facebook" href=""><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="twitter" href=""><i class="fa fa-twitter"></i></a></li>
                                            <li><a class="instagram" href=""><i class="fa fa-instagram"></i></a></li>
                                            <li><a class="instagram" href=""><i class="fa fa-rss"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- team member-->
                    </div>
                </div>
            </div>
        </div>
        <!-- team area end -->
        <!-- Start Quote Area -->
        <div class="quote-area area-padding">
            <div class="container ">
                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="sub-head">
                                    <h4>Request a  <span class="color">Call back</span></h4>
                                    <p>Have an enquiry and would like us to assist you? Please kindly fill the form.</p>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-8 col-xs-12">
                                <div class="row">
                                    @if (session('success'))
                                        <div class="alert alert-success">
                                            <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&#215;</button>
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    <form method="post" action="{{ url('/contact') }}" @keydown="clear($event.target.name)" class="contact-form">
                                        {{ csrf_field() }}
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="name" type="text" placeholder="Name*"  name="name" value="{{ old('name') }}">
                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                             <strong style="color: red;">{{ $errors->first('name') }}</strong>
                                                         </span>
                                            @endif
                                            <input id="email" type="text" placeholder="Email*"  name="email" value="{{ old('email') }}">
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                             <strong style="color: red;">{{ $errors->first('email') }}</strong>
                                                         </span>
                                            @endif
                                            <input id="phone" type="text" placeholder="Phone*" name="phone" value="{{ old('phone') }}">
                                            @if ($errors->has('phone'))
                                                <span class="help-block">
                                                             <strong style="color: red;">{{ $errors->first('phone') }}</strong>
                                                         </span>
                                            @endif
                                            <input id="subject" type="text" placeholder="Subject*"  name="subject" value="{{ old('subject') }}">
                                            @if ($errors->has('subject'))
                                                <span class="help-block">
                                                             <strong style="color: red;">{{ $errors->first('subject') }}</strong>
                                                         </span>
                                            @endif
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea id="message" rows="7" placeholder="Message" name="message" class="form-control" ></textarea>
                                            @if ($errors->has('message'))
                                                <span class="help-block">
                                                             <strong style="color: red;">{{ $errors->first('message') }}</strong>
                                                         </span>
                                            @endif
                                            <button type="submit" id="submit" class="quote-btn">Submit</button>
                                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Quote -->
        <section class="currency_section bg-grey padding">
            <div class="container">
                <div class="section_heading align-center mb-40">
                    <h2>Cryptocurrency <span>Prices</span></h2>
                </div><!-- /Section Heading -->
                <div class="row prices_head">
                    <table class="table table-striped table-hover table-responsive">
                        <thead>
                        <tr>
                            <th>Cryptocurrency</th>
                            <th>Price</th>
                            <th>24h % Change</th>
                            <th>Market Cap ($)</th>
                            <th>Supply</th>
                        </tr>
                        </thead>
                        <tbody>
                     {{--   <tr v-for="coin in bitcoinCalculator.coiniiBtcEth">
                            <td>@{{ coin.name }}</td>
                            <td>@{{ coin.price_usd }}</td>
                            <td class="up">@{{ coin.percent_change_24h }}</td>
                            <td>@{{ coin.market_cap_usd }}</td>
                            <td>@{{  coin.total_supply}}</td>
                        </tr>--}}
                        </tbody>
                    </table>
                </div>
            </div>
        </section><!-- Currency Section -->
        <div class="banner-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="banner-content">
                            <h4>To know more about us and the opportunities we offer</h4>
                            <div class="banner-contact">
                                <a class="banner-btn" href="{!! asset('/contact') !!}">Contact us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection


@section('scripts')
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
@endsection

