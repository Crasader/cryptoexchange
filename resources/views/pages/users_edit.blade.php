@extends('layouts.fund_layout')
@section('styles')
    <!-- Bootstrap -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin/font-awesome.css') }}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" type="text/css" href="{!! asset('css/admin/weather-icons.css') !!}">
    <!-- owl-carousel CSS -->
    <link rel="stylesheet" type="text/css" href="{!! asset('css/admin/toggles-full.css') !!}">
    <!-- Animate CSS -->
    <link rel="stylesheet" type="text/css" href="{!! asset('css/admin/quirk.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/admin/hover.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/admin/ionicons.css') !!}">

    <link rel="stylesheet" type="text/css" href="{!! asset('css/admin/morris.css') !!}">
    <!-- Custom CSS -->
    <!-- Style customizer (Remove these two lines please) -->




@endsection

@section('content')
    <Left></Left>

    <div id="index">
        <div class="mainpanel">

            <div class="contentpanel">

                <ol class="breadcrumb breadcrumb-quirk">
                    <li><a href="{!! url('/user/dashboard') !!}"><i class="fa fa-home mr5"></i> Home</a></li>
                </ol>

                <div class="panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">EDIT USERS</h4>
                    </div>

                    <div class="panel-body">
                        @if(Session::has('success'))
                            <div class="alert alert-danger">
                                <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&#215;</button>
                                {{ Session::get('success') }}
                            </div>
                        @endif

                        {{-- <div class="alert alert-success" v-if="submitted">
                             <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&#215;</button>
                             Announcement creatd successfully
                         </div>--}}
                            <form  role="form" method="POST" action="{{ route('user.manage-users-post-edit') }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $userId }}" />
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" class="form-control"  name="full_name" placeholder="Full Name" value="{{ $user->full_name }}">
                                @if ($errors->has('full_name'))
                                    <span class="help-block">
                                        <strong style="color: red">{{ $errors->first('full_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control"  name="username" placeholder="Username" value="{{ $user->username }}">
                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong style="color: red">{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control"  name="email" placeholder="Email" value="{{ $user->email }}">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong style="color: red">{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Sponsor Username</label>
                                <input type="text" class="form-control"  name="upline" placeholder="Sponsor Username" value="{{ $user->upline }}">
                                @if ($errors->has('upline'))
                                    <span class="help-block">
                                        <strong style="color: red">{{ $errors->first('upline') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="text" class="form-control"  name="phone" placeholder="Phone Number" value="{{ $user->phone }}">
                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong style="color: red">{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Bitcoin Address</label>
                                <input type="text" class="form-control"  name="bitcoin" placeholder="Bitcoin Wallet" value="{{ $user->bitcoin }}">
                                @if ($errors->has('bitcoin'))
                                    <span class="help-block">
                                        <strong style="color: red">{{ $errors->first('bitcoin') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>City</label>
                                <input type="text" class="form-control"  name="city" placeholder="City" value="{{ $user->city }}">
                                @if ($errors->has('city'))
                                    <span class="help-block">
                                        <strong style="color: red">{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>State</label>
                                <input type="text" class="form-control"  name="state" placeholder="State" value="{{ $user->state }}">
                                @if ($errors->has('state'))
                                    <span class="help-block">
                                        <strong style="color: red">{{ $errors->first('state') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Country</label>
                                <input type="text" class="form-control"  name="country" placeholder="Country" value="{{ $user->country }}">
                                @if ($errors->has('country'))
                                    <span class="help-block">
                                        <strong style="color: red">{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <button class="btn btn-success btn-quirk btn-block">Edit Now</button>
                            </div>
                        </form>

                    </div>
                </div><!-- panel -->


            </div><!-- contentpanel -->
        </div><!-- mainpanel -->

    </div>
@endsection


@section('scripts')
    <script src="{!! asset('js/admin/jquery.js') !!}"></script>
    <script src="{!! asset('js/admin/bootstrap.js') !!}"></script>
    <script src="{!! asset('js/admin/modernizr.js') !!}"></script>
    <script src="{!! asset('js/admin/jquery-ui.js') !!}"></script>
    <script src="{!! asset('js/admin/toggles.js') !!}"></script>
    <script src="{!! asset('js/admin/quirk.js') !!}"></script>
    <script src="{!! asset('js/index.js') !!}"></script>
@endsection

