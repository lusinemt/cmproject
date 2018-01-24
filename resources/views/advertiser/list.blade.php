@extends('layouts.app')

@section('content')
    <div class="container main-content advertisers-list">
        <div class="height-5"></div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Advertisers</h4>
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
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="advertiserList" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>AdvertiserID</th>
                            <th>Advertiser Name</th>
                            <th>Payment Method</th>
                            <th>Api Supplier String</th>
                            <th>Api Frequency</th>
                            <th>Raw Password</th>
                            <th>Username</th>
                            <th>Potback IP Whitelist</th>
                            <th>Account Manager ID</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($objAllAdvertisers as $advertiser)
                            <tr>
                                <td>{{ $advertiser->advertiserid }}</td>
                                <td>{{ $advertiser->advertisername }}</td>
                                <td>{{ $advertiser->paymentmthod }}</td>
                                <td>{{ $advertiser->apisupplierstring }}</td>
                                <td>{{ $advertiser->apifrequency }}</td>
                                <td>{{ $advertiser->rawpassword }}</td>
                                <td>{{ $advertiser->username }}</td>
                                <td>{{ $advertiser->potbackipwhitelist }}</td>
                                <td>{{ $advertiser->accountmanagerid }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/advertisers/advertiser-list.js') }}"></script>
@endsection
