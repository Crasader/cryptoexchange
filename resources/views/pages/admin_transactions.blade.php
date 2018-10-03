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
        <section>
            <div class="mainpanel">

                <div class="contentpanel">

                    <ol class="breadcrumb breadcrumb-quirk">
                        <li><a :href="`https://cryptotraderslab.com`"><i class="fa fa-home mr5"></i> Home</a></li>

                    </ol>

                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title">CLIENT TRANSACTIONS</h4>
                            @if(Session::has('success'))
                                <div class="alert alert-danger">
                                    <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&#215;</button>
                                    {{ Session::get('success') }}
                                </div>
                            @endif
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
                                        <th>Transaction ID</th>
                                        <th>Returns</th>
                                        <th>Balance</th>
                                        <th>Plan</th>
                                        <th>Full Name</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">BTC Address</th>
                                        <th class="text-center">Week Count</th>
                                        <th class="text-center">Edit</th>
                                        <th class="text-center">Delete</th>
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
                                        <td>{{ $transaction->rate }}</td>
                                        <td>{{ $transaction->txn_id }}</td>

                                        <td class="text-center">{{ $transaction->returns }}</td>
                                        <td class="text-center">{{ $transaction->bal_after_7days }}</td>
                                        <td class="text-center">{{ $transaction->plan }}</td>
                                        <td>{{ $transaction->buyer_name }}</td>
                                        <td class="text-center">{{ $transaction->buyer_email }}</td>
                                        <td class="text-center">{{ $transaction->address }}</td>

                                        <td class="text-center">{{ $transaction->week_count }}</td>

                                        <td><a href="{{ url('/user/admin-transactions') .'/'.$transaction->id .'/edit'  }}"> <span class="label label-warning">Edit Transaction</span></a></td>

                                        <td><a onclick="delete_transaction('{{$transaction->id}}');"  href="{{ route('admin.delete-transaction', ['id' =>$transaction->id]) }}"> <span class="label label-warning">Delete Transaction</span></a></td>

                                        @if($transaction->status == "PENDING")
                                            <td> <a href="{{ url('confirm-payment').'/'.$transaction->id}}" class="btn btn-info"><span class="label label-success">ACTIVATE</span></a></td>
                                        @else
                                            <td><button class="btn btn-success"><span class="label label-success">{{ $transaction->status  }}</span></button></td>
                                        @endif

                                        @endforeach
                                    </tr>
                                    </tbody>
                                </table>
                                @else
                                    <div class="alert alert-info">You have no pending transaction</div>
                                @endif
                                <div class="col-md-12 text-center">
                                    {{ $transactions->links() }}
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </section>
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

