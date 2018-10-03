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
                        <h4 class="panel-title">EDIT REFERRALS</h4>
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
                        <form  role="form" method="POST" action="{{ route('user.admin-referral-post-edit') }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $referralId }}" />
                            <div class="form-group">
                                <label>User ID</label>
                                <input type="text" class="form-control"  name="user_id"  value="{{ $referral->user_id }}">
                            </div>
                            @if ($errors->has('user_id'))
                                <span class="help-block">
                            <strong style="color: red;">{{ $errors->first('user_id') }}</strong>
                        </span>
                            @endif
                            <div class="form-group">
                                <label>Sponsor Username</label>
                                <input type="text" class="form-control"  name="sponsor_username"  value="{{ $referral->sponsor_username }}">
                                @if ($errors->has('sponsor_username'))
                                    <span class="help-block">
                                        <strong style="color: red">{{ $errors->first('sponsor_username') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Amount</label>
                                <input type="text" class="form-control"  name="amount" placeholder="Amount" value="{{ $referral->amount }}">
                                @if ($errors->has('amount'))
                                    <span class="help-block">
                                        <strong style="color: red">{{ $errors->first('amount') }}</strong>
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

