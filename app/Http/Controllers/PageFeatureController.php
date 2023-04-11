<?php

namespace App\Http\Controllers;
use App\Models\PageFeature;
use Illuminate\Http\Request;

class PageFeatureController extends Controller
{
    //
    public function getfeatures($pageId){

        $features = PageFeature::where('pages_id',$pageId)->first();
        return $features;
    }//

    public function get_all_active_features(){

        $features = PageFeature::where('is_active',1)->get();
        return $features;
    }//

}
