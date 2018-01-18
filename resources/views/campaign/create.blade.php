@extends('layouts.app')

@section('content')
    <div class="container main-content">
        <div class="height-35"></div>
        <form action="">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Setup Info</h4>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-2">
                            <p class="h5 content-title">Client</p>
                            <input type="text" class="form-control" placeholder="Filter by client">
                        </div>
                        <div class="col-sm-5">
                            <p class="h5 content-title">Offer</p>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-5 no-padding">
                            <ul class="flex-content setup-filters">
                                <li>
                                    <p class="h5 content-title uppercase">Api</p>
                                    <select class="form-control">
                                        <option>Yes</option>
                                        <option>No</option>
                                    </select>
                                </li>
                                <li class="pt-1">
                                    <p class="h5 content-title">Incent Allowed</p>
                                    <select class="form-control">
                                        <option>Yes</option>
                                        <option>No</option>
                                    </select>
                                </li>
                                <li class="pt-1">
                                    <p class="h5 content-title">Apply Allowed</p>
                                    <select class="form-control">
                                        <option>Yes</option>
                                        <option>No</option>
                                    </select>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="height-30">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="h5 content-title">Category</p>
                                <select class="form-control">
                                    <option>Select...</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                                <div class="height-20"></div>
                                <p class="h5 content-title">Countries</p>
                                <p>Not Selected</p>
                                <a href="#">select</a>
                                <div class="height-20"></div>
                                <p class="h5">Campaign Start Date</p>
                                <input class="form-control" type="text" id="startDate"/>
                            </div>
                            <div class="col-sm-4">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="h5 content-title">Account Manager</p>
                                        <select class="form-control">
                                            <option>Gohar</option>
                                            <option>Lusine</option>
                                            <option>Darren</option>
                                            <option>Vazgen</option>
                                        </select>
                                        <div class="height-20"></div>
                                        <p class="h5 content-title">Daily Cap</p>
                                        <div class="flex-content">
                                            <input type="number" class="form-control"> <span>(0:none)</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="h5 content-title">CM Rate</p>
                                        <div class="flex-content">
                                            <select class="form-control">
                                                <option>GBP</option>
                                                <option>USD</option>
                                                <option>EUR</option>
                                            </select>
                                            <input type="number" class="form-control">
                                        </div>
                                        <div class="height-20"></div>
                                        <p class="h5 content-title">Total Cap</p>
                                        <div class="flex-content">
                                            <input type="number" class="form-control"> <span>(0:none)</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="height-35"></div>
                                <p class="h5">Campaign End Date</p>
                                <input class="form-control" type="text" id="endDate"/>
                            </div>
                            <div class="col-sm-5">
                                <p class="h5 content-title">Partner Rate (default)</p>
                                <div class="flex-content">
                                    <select class="form-control">
                                        <option>GBP</option>
                                        <option>USD</option>
                                        <option>EUR</option>
                                    </select>
                                    <input type="number" class="form-control">
                                </div>
                                <div class="height-20"></div>
                                <p class="h5 content-title">Cap Reached Action</p>
                                <select class="form-control">
                                    <option>Allow Clicks</option>
                                    <option>Block</option>
                                    <option>Redirect, keep publisher</option>
                                    <option>Redirect, switch to internal</option>
                                </select>
                                <div class="height-35"></div>
                                <p class="h5 content-title">Expired Action</p>
                                <select class="form-control">
                                    <option>Allow Clicks</option>
                                    <option>Block</option>
                                    <option>Redirect, keep publisher</option>
                                    <option>Redirect, switch to internal</option>
                                </select>
                            </div>
                        </div>
                        <div class="height-30"></div>
                        <div class="row">
                            <div class="col-sm-7">
                                <p class="h5 content-title">Traffic Quality</p>
                                <div class="quality-info">
                                    <p><strong>default to advertiser setting</strong></p>
                                    <p>(use edit campaign to adjust)</p>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <p class="h5 content-title">Geo Targeting</p>
                                <select class="form-control">
                                    <option>Use GEO Check</option>
                                    <option>Skip GEO Check</option>
                                </select>
                            </div>
                        </div>
                        <div class="height-30"></div>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="h5 content-title">Campaign Type</p>
                                <button class="btn crunchie-btn">App</button>
                                <button class="btn crunchie-btn">Web</button>
                            </div>
                            <div class="col-sm-4">
                                <p class="h5 content-title">Postback placed on ...</p>
                                <button class="btn crunchie-btn">Default</button>
                                <button class="btn crunchie-btn">Event</button>
                                <button class="btn crunchie-btn">Sale</button>
                            </div>
                            <div class="col-sm-5">
                                <p class="h5 content-title">Event Attribution Info</p>
                                <select class="form-control">
                                    <option>Select ...</option>
                                    <option>Install and open (default)</option>
                                    <option>Registration</option>
                                    <option>Tutorial Complete</option>
                                    <option>In-App Purchase</option>
                                    <option>Level Complete</option>
                                    <option>1 click billing (SOI)</option>
                                    <option>2 click billing (DOI)</option>
                                    <option>3 day RR</option>
                                    <option>5 day RR</option>
                                    <option>7 day RR</option>
                                    <option>Other</option>
                                    <option>Level 1 Complete</option>
                                    <option>Level 2 Complete</option>
                                    <option>Level 3 Complete</option>
                                    <option>Level 4 Complete</option>
                                    <option>Level 5 Complete</option>
                                </select>
                            </div>
                        </div>
                        <div class="height-30"></div>
                        <div class="row">
                            <div class="col-sm-12 url-content">
                                <p class="h5 content-title">Default Advertiser URL</p>
                                <textarea class="form-control"></textarea>
                                <p><a href="#">Placeholder Reference</a></p>
                                <div class="height-30"></div>
                                <p class="h5 content-title">Demo URL (if blank demo will use redirect URL)</p>
                                <textarea class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="height-30"></div>
                        <div class="row">
                            <div class="col-sm-7">
                                <p class="h5 content-title">Publisher Notes</p>
                                <textarea class="form-control"></textarea>
                            </div>
                            <div class="col-sm-5">
                                <p class="h5 content-title">Internal Notes</p>
                                <textarea class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Mobile Settings</h4>
                </div>
                <div class="panel-body mobile-settings">
                    <div class="row">
                        <div class="col-sm-5">
                            <p class="h5 content-title">Platforms</p>
                            <button class="btn crunchie-btn">Android</button>
                            <button class="btn crunchie-btn">IPhone</button>
                            <button class="btn crunchie-btn">IPad</button>
                            <button class="btn crunchie-btn">IPod</button>
                        </div>
                        <div class="col-sm-7">
                            <p class="h5 content-title">Device ID List</p>
                            <button class="btn crunchie-btn">AndroidID</button>
                            <button class="btn crunchie-btn">AndroidMD5</button>
                            <button class="btn crunchie-btn">GoogleAdID</button>
                            <button class="btn crunchie-btn">IDFA</button>
                            <button class="btn crunchie-btn">IMEI</button>
                            <button class="btn crunchie-btn">MacAddress</button>
                            <button class="btn crunchie-btn">ODIN</button>
                            <button class="btn crunchie-btn">UDID</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2">
                            <p class="h5 content-title">AppID or AjillionUID</p>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-5">
                            <p class="h5 content-title">Device ID Required</p>
                            <select class="form-control">
                                <option>No</option>
                                <option>Yes</option>
                            </select>
                        </div>
                        <div class="col-sm-5">
                            <p class="h5 content-title">MinOSVersion</p>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Creative</h4>
                </div>
                <div class="panel-body mobile-settings">
                    <div class="row">
                        <div class="col-sm-12">
                            <p class="h5 content-title">Offer Title</p>
                            <input type="text" class="form-control">
                            <div class="height-5"></div>
                            <p class="h5 content-title">Offer Title</p>
                            <textarea class="form-control">Offer Text</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="height-15"></div>
            <button class="btn crunchie-btn pull-right">Create Campaign</button>
            <div class="height-35"></div>
        </form>
    </div>
@endsection
