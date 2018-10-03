@extends('layouts.fund_layout')
@section('styles')
    <!-- Bootstrap -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{!! asset('css/admin/font-awesome.css') !!}">
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
                    <li><a href=""><i class="fa fa-home mr5"></i> Home</a></li>
                    <li><a href="">Transactions</a></li>
                </ol>

                <div class="panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">CLIENT TRANSACTIONS</h4>
                    </div>

                    <div class="panel-body">
                        <div class="table-responsive">
                            @if($transactions->count() > 0)
                            <table class="table nomargin">
                                <thead>
                                <tr>
                                    <th class="text-center">
                                        <label class="ckbox ckbox-primary">
                                            <input type="checkbox"><span></span>
                                        </label>
                                    </th>
                                    <th>Amount($)</th>
                                    <th>Rate(%)</th>
                                    <th>Week Count</th>
                                    <th>Plan</th>
                                    <th>Full Name</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Address</th>
                                    <!--  <th class="text-right">State</th>
                                      <th class="text-right">City</th>-->
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($transactions as $transaction)
                                <tr>
                                    <td class="text-center">
                                        <label class="ckbox ckbox-primary">
                                            <input type="checkbox"><span></span>
                                        </label>
                                    </td>
                                    <td>{{ $transaction->amount_btc }}</td>
                                    <td>{{ $transaction->rate}}</td>
                                    <td>{{ $transaction->week_count }}</td>
                                    <td>{{ $transaction->plan}}</td>
                                    <td>{{ $transaction->buyer_name }}</td>
                                    <td class="text-center">{{ $transaction->buyer_email }}</td>
                                    <td class="text-center">{{ $transaction->address }}</td>

                                    <td>
                                        <ul class="table-options">
                                            <li><a href=""><i class="fa fa-pencil"></i></a></li>
                                            <li><a href=""><i class="fa fa-trash"></i></a></li>
                                        </ul>
                                    </td>
                                    @endforeach
                                </tr>
                                </tbody>
                            </table>
                            @else
                                <div class="alert alert-info">No transaction found </div>
                            @endif
                                <div class="col-md-12 text-center">
                                    {{ $transactions->links() }}
                                </div>
                        </div><!-- table-responsive -->
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

