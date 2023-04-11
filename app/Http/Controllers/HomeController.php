<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    

    public function index()
    {
        $data['wellness'] = (new PageMediaController)->getPageMedia(1,7);
        $data['events'] = (new PageMediaController)->getPageMedia(1, 6);
        $data['dining'] = (new PageMediaController)->getPageMedia(1, 5);
        $data['rooms'] = (new PageMediaController)->getPageMedia(1, 4);
        $data['about'] = (new PageContentController)->get_content_by_id(11);
        $data['banner'] = (new PageMediaController)->getPageMedia(1,2);
        $data['offers'] = (new OffersController)->get_offers();
        return view('home.index', $data);
    }


    public function reservations(){

        return view('home.reservation');
    }


}
