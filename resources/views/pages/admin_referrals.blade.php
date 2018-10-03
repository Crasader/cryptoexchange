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
                            <h4 class="panel-title">CLIENT REFERRALS</h4>
                            @if(Session::has('success'))
                                <div class="alert alert-danger">
                                    <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&#215;</button>
                                    {{ Session::get('success') }}
                                </div>
                            @endif
                        </div>

                        <div class="panel-body">
                            <div class="table-responsive">
                                @if($referrals->count() > 0)
                                    <table class="table nomargin">
                                        <thead>
                                        <tr>
                                            <th class="text-center">
                                                <label class="ckbox ckbox-primary">
                                                    <input type="checkbox"><span></span>
                                                </label>
                                            </th>
                                            <th>User ID</th>
                                            <th>Sponsor Username</th>
                                            <th>Amount ($)</th>
                                            <th>Withdrawn</th>
                                            <th class="text-center">Edit</th>
                                            <th class="text-center">Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($referrals as $referral)
                                            <tr>
                                                <td class="text-center">
                                                    <label class="ckbox ckbox-primary">
                                                        <input type="checkbox"><span></span>
                                                    </label>
                                                </td>
                                                <td>{{ $referral->user_id }}</td>
                                                <td>{{ $referral->sponsor_username }}</td>
                                                <td>{{ $referral->amount }}</td>
                                                <td>{{ $referral->withdraw }}</td>
                                                <td><a href="{{ url('/user/admin-referrals') .'/'.$referral->id .'/edit'  }}"> <span class="label label-warning">Edit Referral</span></a></td>

                                                <td><a onclick="delete_referral('{{$referral->id}}');"  href="{{ route('admin.delete-referral', ['id' =>$referral->id]) }}"> <span class="label label-warning">Delete Referral</span></a></td>


                                                @endforeach
                                            </tr>
                                        </tbody>
                                    </table>
                                @else
                                    <div class="alert alert-info">You have no pending referrals</div>
                                @endif
                                <div class="col-md-12 text-center">
                                    {{ $referrals->links() }}
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

