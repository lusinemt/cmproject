@extends('layouts.app')

@section('content')
    <div class="container-fluid main-content publisher-placementmissing no-padding">
        <div class="height-20"></div>
        <div class="table-responsive">
            <div class="xs-div range-picker">
                <input type="text" id="placementMissingPicker" class="form-control">
                <div class="height-15"></div>
            </div>
            <table id="placementMissingTable" class="table table-striped table-bordered" cellspacing="0"
                   width="100%">
                <thead>
                <tr>
                    <th>PartnerID</th>
                    <th>Partner</th>
                    <th>Clicks</th>
                    <th>Unique</th>
                    <th>Installs</th>
                    <th>Revenue</th>
                    <th>Profit</th>
                    <th>RPC</th>
                    <th>Sales</th>
                    <th>AppEvents</th>
                    <th>AppRevenue</th>
                    <th>ScrubCount</th>
                    <th>ScrubRev</th>
                    <th>ScrubCost</th>
                    <th>ScrubProfit</th>
                </tr>
                </thead>
                <tbody>
                {{--@foreach($objAllPublishers as $publisher)--}}
                {{--<tr>--}}
                {{--<td>{{ $publisher->publisherid }}</td>--}}
                {{--<td>{{ $publisher->publishername }}</td>--}}
                {{--<td>AM</td>--}}
                {{--<td>{{ $publisher->username }}</td>--}}
                {{--<td>{{ $publisher->password }}</td>--}}
                {{--<td>{{ $publisher->publisherhash }}</td>--}}
                {{--<td>Quality</td>--}}
                {{--<td>Login</td>--}}
                {{--<td class="options-list-container">--}}
                {{--<p>--}}
                {{--click for options--}}
                {{--</p>--}}
                {{--</td>--}}
                {{--</tr>--}}
                {{--@endforeach--}}
                </tbody>
            </table>
        </div>
    </div>
    <div class="height-35"></div>
    <script src="{{ asset('js/publishers/publisher-placementmissing.js') }}"></script>
@endsection
