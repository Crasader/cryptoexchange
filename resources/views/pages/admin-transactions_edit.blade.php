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
                        <h4 class="panel-title">EDIT TRANSACTION</h4>
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
                        <form  role="form" method="POST" action="{{ route('user.admin-transactions-post-edit') }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $transactionId }}" />
                            <div class="form-group">
                                <label>Amount(BTC)</label>
                                <input type="text" class="form-control"  name="amount" placeholder="Amount in BTC" value="{{ $transaction->amount }}">
                                @if ($errors->has('amount'))
                                    <span class="help-block">
                                        <strong style="color: red">{{ $errors->first('amount') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Amount($)</label>
                                <input type="text" class="form-control"  name="amount_btc" placeholder="Amount in Dollars" value="{{ $transaction->amount_btc }}">
                                @if ($errors->has('amount_btc'))
                                    <span class="help-block">
                                        <strong style="color: red">{{ $errors->first('amount_btc') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Rate</label>
                                <input type="text" class="form-control"  name="rate" placeholder="Rate" value="{{ $transaction->rate }}">
                                @if ($errors->has('rate'))
                                    <span class="help-block">
                                        <strong style="color: red">{{ $errors->first('rate') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Product</label>
                                <input type="text" class="form-control"  name="product" placeholder="Product" value="{{ $transaction->product }}">
                                @if ($errors->has('product'))
                                    <span class="help-block">
                                        <strong style="color: red">{{ $errors->first('product') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Profit</label>
                                <input type="text" class="form-control"  name="returns" placeholder="Returns" value="{{ $transaction->returns }}">
                                @if ($errors->has('returns'))
                                    <span class="help-block">
                                        <strong style="color: red">{{ $errors->first('returns') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Balance</label>
                                <input type="text" class="form-control"  name="bal_after_7days" placeholder="Balance After 7days" value="{{ $transaction->bal_after_7days }}">
                                @if ($errors->has('bal_after_7days'))
                                    <span class="help-block">
                                        <strong style="color: red">{{ $errors->first('bal_after_7days') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Plan</label>
                                <input type="text" class="form-control"  name="plan" placeholder="Plan" value="{{ $transaction->plan }}">
                                @if ($errors->has('plan'))
                                    <span class="help-block">
                                        <strong style="color: red">{{ $errors->first('plan') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Date of Activation</label>
                                <input type="date" class="form-control"  name="status_date" value="{{ $transaction->status_date }}">
                                @if ($errors->has('status_date'))
                                    <span class="help-block">
                                        <strong style="color: red">{{ $errors->first('status_date') }}</strong>
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

