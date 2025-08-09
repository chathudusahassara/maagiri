<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\PageContent;
use App\Models\PageMedia;

use Inertia\Inertia;


class DiningController extends Controller
{

    public function index(){

        return Inertia::render('Dining/Index');
    }

    public function restaurants($restaurant){

        $getPage = Page::where('link_name',$restaurant)->first();

        $getPageContent = PageContent::where('pages_id',$getPage->id)->first();

        $getPageMedia = PageMedia::where('pages_id',$getPage->id)->get();

        $data['pageContent'] = $getPageContent;
        $data['pageMedia'] = $getPageMedia;
        $data['page'] = $getPage;
        
        

        return Inertia::render('Dining/Restaurants', $data);
    }
}
