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
                    <li><a href="">Withdrawals</a></li>
                </ol>

                <div class="panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">ALL WITHDRAWALS</h4>
                    </div>

                    <div class="panel-body">
                        <div class="table-responsive">
                            @if($withdrawals->count() > 0)
                                <table class="table nomargin">
                                    <thead>
                                    <tr>
                                        <th class="text-center">
                                            <label class="ckbox ckbox-primary">
                                                <input type="checkbox"><span></span>
                                            </label>
                                        </th>
                                        <th>Amount($)</th>
                                        <th>Full Name</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Withdrawal Date</th>
                                        <th class="text-center">Payment Date</th>
                                        <!--  <th class="text-right">State</th>
                                          <th class="text-right">City</th>-->
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($withdrawals as $withdrawal)
                                        <tr>
                                            <td class="text-center">
                                                <label class="ckbox ckbox-primary">
                                                    <input type="checkbox"><span></span>
                                                </label>
                                            </td>
                                            <td>{{ $withdrawal->amount }}</td>
                                            <td>{{ $withdrawal->full_name }}</td>
                                            <td>{{ $withdrawal->email }}</td>
                                            <td>{{ $withdrawal->status }}</td>
                                            <td class="text-center">{{ $withdrawal->created_at }}</td>
                                            <td class="text-center">{{ $withdrawal->payment_date }}</td>

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
                                <div class="alert alert-info">No record found </div>
                            @endif
                            <div class="col-md-12 text-center">
                                {{ $withdrawals->links() }}
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

