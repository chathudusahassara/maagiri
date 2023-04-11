<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offers;

class OffersController extends Controller
{

    public function index(){

        $data['content'] = (new PageContentController)->get_content_by_id(16);
        $data['banner'] = (new PageMediaController)->get_page_sub_banner(8, 1);
        $data['offers'] = Offers::orderBy('end_date', 'DESC')->get();
        return view('offers.index', $data);
    }

    public function view($slug){

        $data['offer'] = Offers::where('slug',$slug)->first();
        return view('offers.view', $data);
    }

    public function get_offers(){
        return Offers::orderBy('end_date', 'DESC')->limit(2)->get();
    }
}
