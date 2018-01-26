<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => ['auth']], function () {
####Advertiser menu#####
    Route::resource('advertiser', 'Advertiser\AdvertiserController');
    Route::get('search/advertiser', 'libraries@searchadvertiser');//->middleware('auth');


####Campaign menu#####
    Route::get('campaign/crunchiePixels', 'Campaign\CampaignController@CrunchiePixels');
    Route::get('campaign/generateLink', 'Campaign\CampaignController@GenerateLinks');
    Route::get('campaign/invoiceManage', 'Campaign\CampaignController@InvoicingManage');
    Route::get('campaign/invoiceView', 'Campaign\CampaignController@InvoicingView');
    Route::get('campaign/list', 'Campaign\CampaignController@CampaignList');
    Route::get('campaign/testLink', 'Campaign\CampaignController@TestPartnerLink');
    Route::get('campaign/scrubs', 'Campaign\CampaignController@Scrubs');
    Route::get('campaign/systemChanges', 'Campaign\CampaignController@SystemChanges');

     Route::resource('campaign', 'Campaign\CreateCampaignController');

####Publisher menu#####
    Route::get('publisher/placementStats', 'Publisher\PublisherController@PlacementStats');
    Route::get('publisher/placementMissing', 'Publisher\PublisherController@PlacementMissing');
    Route::resource('publisher', 'Publisher\PublisherController');


});


