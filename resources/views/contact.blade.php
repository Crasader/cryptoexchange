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
    <!-- Responsive CSS -->
    <link rel="stylesheet" type="text/css" href="{!! asset('css/responsive.css') !!}">



@endsection

@section('content')
        <!-- Start Bottom Header -->
        <div class="page-area" style="background-image: url(images/ad.jpg)">
            <div class="breadcumb-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb text-center">
                            <div class="section-headline white-headline text-center">
                                <h3>Contact <span class="color">Us</span></h3>
                            </div>
                            <ul>
                                <li class="home-bread">Home</li>
                                <li>Our Team</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Header -->
        <!-- Start contact Area -->
        <div class="contact-area area-padding">
            <div class="container">
                <div class="row">
                    <!-- Start contact icon column -->
                    <div class="col-md-5 col-sm-6 col-xs-12">
                        <div class="contact-page">
                            <div class="contact-icon">
                                <div class="single-icon">
                                    <i class="fa fa-mobile"></i>
                                    <p>
                                        Call : +0091-654-876<br>
                                        <span>Every day 24 Hours</span>
                                    </p>
                                </div>
                            </div>
                            <div class="contact-icon">
                                <div class="single-icon">
                                    <i class="fa fa-envelope-o"></i>
                                    <p>
                                        Email:wallet45@gmail.com<br>
                                        <span>Web: www.bitwallet1.com</span>
                                    </p>
                                </div>
                            </div>
                            <div class="contact-icon">
                                <div class="single-icon">{{--
                                    <i class="fa fa-map-marker"></i>--}}
                                    <p style="text-align: justify;">
                                        Location :<br>
                                        <span>703 Pine Ave # B, Snohomish, WA 98290, USA</span><br>
                                        <span>195-207 Waterloo Road, Barons Place, South Bank, London SE1 8UX, UK</span><br>
                                        <span>Abu Dhabi - United Arab Emirates</span><br>
                                        <span>102 Avenue du Président Kennedy, 75016 Paris, France</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End contact icon -->
                    <div class="col-md-7 col-sm-6 col-xs-12">
                        <div class="contact-form">
                            <div class="row">
                                <form @submit.prevent="postContact()" @keydown="clear($event.target.name)" class="form-horizontal">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="name" type="text" placeholder="Name*" v-model="contactDetails.name" name="name">
                                        <p class="help is-danger" style="color:red;">@{{ getContactError('name') }}</p>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="email" type="text" placeholder="Email*" v-model="contactDetails.email" name="email">
                                        <p class="help is-danger" style="color:red;">@{{ getContactError('email') }}</p>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <input id="phone" type="text" placeholder="Phone*" v-model="contactDetails.phone" name="phone">
                                        <p class="help is-danger" style="color:red;">@{{ getContactError('phone') }}</p>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <input id="subject" type="text" placeholder="Subject*" v-model="contactDetails.subject" name="subject">
                                        <p class="help is-danger" style="color:red;">@{{ getContactError('subject') }}</p>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <textarea id="message" rows="7" placeholder="Message" name="message" class="form-control" ></textarea>
                                        <p class="help is-danger" style="color:red;">@{{ getContactError('message') }}</p>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                        <button type="submit" id="submit" class="add-btn contact-btn">Submit</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End contact Form -->
                </div>
            </div>
        </div>
        <!-- End Contact Area -->
        <!-- Start Map Area -->
        <div class="map-area">
            <div class="container-full">
                <div class="row">
                    <!-- Start contact icon column -->
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <!-- Start Map -->
                        <div class="map-area">
                            <div id="googleMap" style="width:100%;height:350px;"></div>
                        </div>
                        <!-- End Map -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Map Area -->
        <!-- End About Area -->
        <div class="banner-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="banner-content">
                            <h4>Are you looking for investment bitcoin or others digital currency?</h4>
                            <div class="banner-contact">
                                <a class="banner-btn" href="{!! url('contact') !!}">Contact us</a>
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

