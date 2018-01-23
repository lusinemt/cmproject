@extends('layouts.app')

@section('content')
    <div class="container main-content">
        <div class="height-20"></div>
        <form action="">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>General</h4>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="h5 content-title">Name</p>
                            <input name="" type="text" class="form-control">
                        </div>
                        <div class="col-sm-6">
                            <p class="h5 content-title">Traffic Quality Threshold</p>
                            <select name="" class="form-control">
                                <option>Select...</option>
                                <option value="6">Custom Inclusion Only</option>
                                <option value="5">5 - Excellent</option>
                                <option value="4">4 - Good</option>
                                <option value="3">3 - Medium</option>
                                <option value="2">2 - Low</option>
                                <option value="1">1 - Poor</option>
                            </select>
                            <p>(publisher inclusion/exclusion can be managed via edit after creation)</p>
                        </div>
                        <div class="col-xs-12">
                            <p class="h5 content-title">Postback IP Whitelist (recommended)</p>
                            <textarea name="" class="form-control"></textarea>
                            <p>
                                (enter one per line or comma seperated)
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <p class="h5 content-title">Geo Targeting</p>
                            <div class="radio">
                                <label><input type="radio" value="" name="optradio"> Redirect on invalid GeoIP</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" value="" name="optradio">Skip GeoIP Check</label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <p class="h5 content-title">Allowed Tracking Variables</p>
                            <p class="sm-txt">
                                <strong>
                                    Note: all advertisers should use [[CLICKHASH]] unless they do not allow 32-character refs.
                                </strong>
                            </p>
                            <div class="radio">
                                <label class="green-txt"><input type="radio" value="" name="optradio">Hash Only (secure)</label>
                            </div>
                            <div class="radio">
                                <label class="red-txt"><input type="radio" value="" name="optradio">Hash and ID (insecure)</label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <p class="h5 content-title">Cookie Tracking</p>
                            <p class="sm-txt">
                                <strong>
                                    This should only be enabled if the client cannot pass a token back in the pixel. Cookies only work with HTML pixels.
                                </strong>
                            </p>
                            <div class="radio">
                                <label class="green-txt"><input type="radio" value="" name="optradio">Disabled</label>
                            </div>
                            <div class="radio">
                                <label class="red-txt"><input type="radio" value="" name="optradio">Enable</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="h5 content-title">Require Unique ConversionIP</p>
                            <p>
                                <strong class="red-txt">ConversionIP is where the pixel request comes from, not the users ClickIP</strong>
                            </p>
                            <p>
                                <strong>Only set to Yes if the pixel requests are coming from the user PC/device, NOT if they come from the advertiser server.</strong>
                            </p>
                            <div class="radio">
                                <label><input type="radio" value="" name="optradio" checked>No</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" value="" name="optradio">Yes</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <p class="h5 content-title">Dupe Level</p>
                            <div class="radio">
                                <label><input type="radio" value="" name="optradio" checked>Unique ClickIP per Campaign</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" value="" name="optradio">Unique ClickIP for all campaigns</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" value="" name="optradio">Disable Unique IP Check</label>
                            </div>
                        </div>
                    </div>
                    <div class="height-15"></div>
                    <div class="pull-left flex-content">
                        <button class="btn crunchie-btn">Create Advertiser</button>
                        <select name="" class="form-control">
                            <option>Go to list</option>
                            <option>Go to edit</option>
                        </select>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="height-35"></div>
@endsection
