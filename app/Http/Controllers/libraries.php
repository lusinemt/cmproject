<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class libraries extends Controller
{
    public function searchadvertiser(Request $request)
    {
        $output = "";
      //  if($request->ajax()) {

            if(is_numeric($request->search))
            {
                $advertisers = DB::table('advertiser')->where('advertiserid', 'LIKE', '%' . $request->search . "%")->get();
            }
            else
            {
                $advertisers = DB::table('advertiser')->where('advertisername', 'LIKE', '%' . $request->search . "%")->get();
            }

            if ($advertisers) {
                $output = '<ul>';
                foreach ($advertisers as $key => $product) {
                    $output .= '<li>' .
                        $product->advertiserid .'. '.$product->advertisername.
                        '</li>';
                }
                $output .= '</ul>';
            }
      //  }
        return Response($output);
    }
}
