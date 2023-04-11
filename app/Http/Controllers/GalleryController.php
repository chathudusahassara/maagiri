<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    //
    public function main(){
        
        $data['content'] = (new PageContentController)->get_content_by_id(12);
        $data['banner'] = (new PageMediaController)->get_page_sub_banner(6, 1);
        $data['images'] = (new PageMediaController)->getPageMedia(6 ,8);
        return view('gallery.main', $data);
    }
}
