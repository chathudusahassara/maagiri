<?php

namespace App\Http\Controllers;
use App\Models\PageContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class PageContentController extends Controller
{
    //
    public function index($pageName){

        $pageId = (new PageController)->get_page_name_by_id($pageName);
        //type 1 = gallery / type 2 = sub banner
        $type = 1;
        $d = PageContent::where('pages_id',$pageId)->first();
        $parentID = (new PageController)->getParentID($d->pages_id);
        $pages = (new PageController)->getPageChilds($parentID);
        $data['contents'] = $d;
        
        $data['pages'] = $pages;
        $data['gallery'] = (new PageMediaController)->getPageMedia($pageId, 3);
        $data['pageId'] = $pageId;

        //check page features
        if((new PageController)->checkPageFeatureEnabled($pageId) == true){
            $data['features'] = (new PageFeatureController)->getfeatures($pageId);
        }else{
            $data['features'] = [];
        }

        $data['pagebanner'] = (new PageMediaController)->get_page_sub_banner($pageId, 1);

        return view('pages.index', $data);
    }


    public function get_all_active_contents(){

        $contents = PageContent::where('is_active',1)->get();
        return $contents;
    }

    public function get_content_by_id($id){

        $contents = PageContent::where([['id',$id],['is_active',1]])->first();
        return $contents;
    }



    //update
    public function update(){

        $msg = "success";

        PageContent::where('id', Input::get('pid'))->update([
            //'name' => Input::get('name'),
            'body' => Input::get('body')
        ]);

        return redirect('easy/contents/all');
      }


}
