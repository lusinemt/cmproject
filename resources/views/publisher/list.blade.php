@extends('layouts.app')

@section('content')
    <div class="container main-content advertisers-list">
        <div class="height-5"></div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-sm-9">
                        <h4>Advertisers</h4>
                    </div>
                    <div class="col-sm-3 text-right">
                        <a class="pull-right" href="http://main-platform.loc/advertiser/create">
                            Create New Advertise
                        </a>
                    </div>
                </div>
            </div>
            <div class="list-filters">
                <ul>
                    <li>
                        <span>Traffic Quality: </span>
                        <button class="btn crunchie-btn">All</button>
                        <button class="btn crunchie-btn">1 - Poor</button>
                        <button class="btn crunchie-btn">2 - Low</button>
                        <button class="btn crunchie-btn">3 - Medium</button>
                        <button class="btn crunchie-btn">4 - Good</button>
                        <button class="btn crunchie-btn">5 - Excellent</button>
                        <button class="btn crunchie-btn">Custom Inclusion Only</button>
                    </li>
                    <li>
                        <span>Account Manager:</span>
                        <button class="btn crunchie-btn">All</button>
                        <button class="btn crunchie-btn">Alex</button>
                        <button class="btn crunchie-btn">Andy</button>
                        <button class="btn crunchie-btn">Gayane</button>
                        <button class="btn crunchie-btn">Lusine</button>
                        <button class="btn crunchie-btn">Darreb</button>
                        <button class="btn crunchie-btn">Gohar</button>
                        <button class="btn crunchie-btn">Vaz</button>
                        <button class="btn crunchie-btn">Tommer</button>
                        <button class="btn crunchie-btn">Mauro</button>
                    </li>
                </ul>
            </div>
            <div class="">
                <div class="table-responsive">
                    <table id="advertiserList" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Account Manager</th>
                            <th>Username Paasword</th>
                            <th>Traffic Quality</th>
                            <th>Allowed Toekens</th>
                            <th>Cookie Tracking</th>
                            <th>Unique ConversationIP</th>
                            <th>IP Dupe Level</th>
                            <th>IP Whitelist</th>
                            <th>Payment Method</th>
                            <th>options</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($objAllPublishers as $publisher)
                            {{--<tr>--}}
                                {{--<td>{{ $advertiser->advertiserid }}</td>--}}
                                {{--<td>{{ $advertiser->advertisername }}</td>--}}
                                {{--<td>{{ $advertiser->accountmanagerid }}</td>--}}
                                {{--<td>{{ $advertiser->username }}<br>{{ $advertiser->rawpassword }}</td>--}}
                                {{--<td></td>--}}
                                {{--<td></td>--}}
                                {{--<td>--}}
                                    {{--<span class="glyphicon glyphicon-ok green-txt mr-3" aria-hidden="true"></span> Yes--}}
                                {{--</td>--}}
                                {{--<td>--}}
                                    {{--<span class="glyphicon glyphicon-remove red-txt mr-3" aria-hidden="true"></span> No--}}
                                {{--</td>--}}
                                {{--<td></td>--}}
                                {{--<td>--}}
                                    {{--<p class="ip-list-container">--}}
                                        {{--@if(!empty($advertiser->postbackipwhitelist ))--}}
                                            {{--<span class="glyphicon glyphicon-ok green-txt mr-3" aria-hidden="true"></span>--}}
                                            {{--{{ $advertiser->postbackipwhitelist }}--}}
                                        {{--@else <span class="glyphicon glyphicon-remove red-txt mr-3" aria-hidden="true"></span> none--}}
                                        {{--@endif--}}
                                    {{--</p>--}}
                                {{--</td>--}}
                                {{--<td>{{ $advertiser->paymentmethod }}</td>--}}
                                {{--<td class="text-center"><span class="glyphicon glyphicon-pencil edit-btn" aria-hidden="true"></span></td>--}}
                            {{--</tr>--}}
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/advertisers/advertiser-list.js') }}"></script>
@endsection
