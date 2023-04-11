<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivacyController extends Controller
{
    //
    public function index(){

        $data['privacy'] = (new PageContentController)->get_content_by_id(14);
        return view('privacy.index', $data);
    }

    public function terms(){

        $data['terms'] = (new PageContentController)->get_content_by_id(15);
        return view('privacy.terms', $data);
    }

}
