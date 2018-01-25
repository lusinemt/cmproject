@extends('layouts.app')

@section('content')
    <div class="container main-content publisher-create">
        <div class="height-20"></div>
        <form action="">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="light-title">General</h4>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="h5 content-title">PartnerID</p>
                            <input name="" type="text" class="form-control">
                            <p class="h5 content-title">Username</p>
                            <input name="" type="text" class="form-control">
                            <p class="h5 content-title">Account Manager</p>
                            <select name="" class="form-control">
                                <option>Select...</option>
                                <option value="">Gohar</option>
                                <option value="">Lusine</option>
                                <option value="">Darren</option>
                                <option value="">Vazgen</option>
                                <option value="">Alex</option>
                            </select>
                            <div class="row">
                                <div class="col-sm-8">
                                    <p class="h5 content-title">Invoice Period</p>
                                    <select name="" class="form-control">
                                        <option value="">Monthly</option>
                                        <option value="">Weekly</option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <p class="h5 content-title">Invoice Terms</p>
                                    <input name="" type="number" class="form-control"><span class="pull-right">days</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <p class="h5 content-title">Name</p>
                            <input name="" type="text" class="form-control">
                            <p class="h5 content-title">Password</p>
                            <input name="" type="password" class="form-control">
                            <p class="h5 content-title">Traffic Quality</p>
                            <select name="" class="form-control">
                                <option>Select...</option>
                                <option value="6">Custom Inclusion Only</option>
                                <option value="5">5 - Excellent</option>
                                <option value="4">4 - Good</option>
                                <option value="3">3 - Medium</option>
                                <option value="2">2 - Low</option>
                                <option value="1">1 - Poor</option>
                            </select>
                            <p class="h5 content-title">Vault Daily Revenue Cap</p>
                            <input name="" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <p class="h5 content-title">Invoice Creation</p>
                            <div class="radio">
                                <label><input type="radio" value="" name="radio-invoice" checked>System generated on stats approval</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" value="" name="radio-invoice">Manual creation from publisher invoice</label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <p class="h5 content-title">Geo Targeting</p>
                            <div class="radio">
                                <label><input type="radio" value="" name="radio-targeting" checked>Redirect on invalid GeoIP</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" value="" name="radio-targeting">Skip GeoIP Check</label>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <p class="h5 content-title">IP Dupe Checks</p>
                            <div class="radio">
                                <label><input type="radio" value="" name="radio-ip" checked>
                                    Reject duplicate install on IPAddress+Campaign <span class="green-txt">(recommended)</span>
                                </label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" value="" name="radio-ip">Allow duplicate install on IPAddress+Campaign</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="light-title">Campaign Listing</h4>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="h5 content-title">Show App Campaigns</p>
                            <ul class="gfield_radio">
                                <li>
                                    <input name="app" type="radio" value="1" id="app-yes">
                                    <label for="app-yes">Yes</label>
                                </li>
                                <li>
                                    <input name="app" type="radio" value="0" id="app-no">
                                    <label for="app-no">No</label>
                                </li>
                            </ul>
                            <p class="h5 content-title">Categories</p>
                            <div class="checkbox">
                                <label><input type="checkbox" value="" checked> All Categories or limit to:</label>
                                <div class="categories-list sm-content">
                                    <ul class="list-group">
                                        <li class="list-group-item">First item</li>
                                        <li class="list-group-item">Second item</li>
                                        <li class="list-group-item">Third item</li>
                                        <li class="list-group-item">Third item</li>
                                        <li class="list-group-item">Third item</li>
                                        <li class="list-group-item">Third item</li>
                                        <li class="list-group-item">Third item</li>
                                        <li class="list-group-item">Third item</li>
                                        <li class="list-group-item">Third item</li>
                                        <li class="list-group-item">Third item</li>
                                        <li class="list-group-item">Third item</li>
                                        <li class="list-group-item">Third item</li>
                                    </ul>
                                </div>
                            </div>
                            <p class="h5 content-title">Show Incent Campaigns</p>
                            <select class="form-control">
                                <option>No</option>
                                <option>Yes</option>
                            </select>
                            <p class="h5 content-title">Main Promotional Channel</p>
                            <select class="form-control">
                                <option>Select...</option>
                                <option>Email</option>
                                <option>PPC</option>
                                <option>SEO</option>
                                <option>Website</option>
                                <option>Blog</option>
                                <option>Forum</option>
                                <option>Banners</option>
                                <option>SocialNetworks</option>
                                <option>AdNetworks</option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <p class="h5 content-title">Show Web Campaigns</p>
                            <ul class="gfield_radio">
                                <li>
                                    <input name="web" type="radio" value="1" id="web-yes">
                                    <label for="web-yes">Yes</label>
                                </li>
                                <li>
                                    <input name="web" type="radio" value="0" id="web-no">
                                    <label for="web-no">No</label>
                                </li>
                            </ul>
                            <p class="h5 content-title">Countries</p>
                            <div class="checkbox">
                                <label><input type="checkbox" value="" checked>All Countries or limit to:</label>
                                <div class="countries-list sm-content">
                                    <ul class="list-group">
                                        <li class="list-group-item">First item</li>
                                        <li class="list-group-item">Second item</li>
                                        <li class="list-group-item">Third item</li>
                                        <li class="list-group-item">Third item</li>
                                        <li class="list-group-item">Third item</li>
                                        <li class="list-group-item">Third item</li>
                                        <li class="list-group-item">Third item</li>
                                        <li class="list-group-item">Third item</li>
                                        <li class="list-group-item">Third item</li>
                                        <li class="list-group-item">Third item</li>
                                        <li class="list-group-item">Third item</li>
                                        <li class="list-group-item">Third item</li>
                                        <li class="list-group-item">Third item</li>
                                    </ul>
                                </div>
                            </div>
                            <p class="h5 content-title">Show Non-Incent Campaigns</p>
                            <select class="form-control">
                                <option>No</option>
                                <option>Yes</option>
                            </select>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-xs-12">
                            <p class="h5 content-title">Exclude Campaigns (comma seperated list)</p>
                            <textarea name="" class="form-control"></textarea>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-xs-12 global-postback">
                            <p class="h5 content-title">Global Postback</p>
                            <div class="flex-content">
                                <span>Type: </span>
                                <select class="form-control">
                                    <option>Postback</option>
                                    <option>Html</option>
                                </select>
                            </div>
                            <div class="height-5"></div>
                            <textarea name="" class="form-control"></textarea>
                            <a href="#">
                                Postback Placeholder Reference
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="light-title">Main Contact</h4>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="h5 content-title">Name</p>
                            <input name="" type="text" class="form-control">
                            <p class="h5 content-title">Email</p>
                            <input name="" type="email" class="form-control">
                            <p class="h5 content-title">Mobile</p>
                            <input name="" type="number" class="form-control">
                            <p class="h5 content-title">Address</p>
                            <textarea class="form-control"></textarea>
                        </div>
                        <div class="col-sm-6">
                            <p class="h5 content-title">Position</p>
                            <input name="" type="text" class="form-control">
                            <p class="h5 content-title">Telephone</p>
                            <input name="" type="number" class="form-control">
                            <p class="h5 content-title">Fax</p>
                            <input name="" type="number" class="form-control">
                            <p class="h5 content-title">Receive System Notifications</p>
                            <div class="radio">
                                <label><input type="radio" name="optradio">Yes</label>
                            </div>
                            <div class="radio">
                                <label><input type="radio" name="optradio">No</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="height-20"></div>
            <div class="flex-content">
                <button class="btn crunchie-btn">Create Partner</button>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="goToEdit">
                    <label class="form-check-label" for="goToEdit">Go to Edit</label>
                </div>
            </div>
        </form>
        <div class="height-30"></div>
    </div>
    <div class="height-35"></div>
@endsection
