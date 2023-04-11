<?php

namespace App\Http\Controllers;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class PageController extends Controller
{
    //
    public function index(){


    }//

    //get all pages
    public function getAll(){

        $pages = Page::all();
        return $pages;
    }//

    public function getPageChilds($parentId){

        $childs = Page::where('parent_id',$parentId)->get();
        return $childs;
    }//

    public function getParentID($childId){

        $parent = Page::where('id',$childId)->pluck('parent_id')->first();
        return $parent;
    }//

    public function checkPageFeatureEnabled($pageId){

        $check = Page::where('id',$pageId)->pluck('is_features');
        return $check;
    }

    //get all parents
    public function getParents(){

        $parent = Page::where('parent_id','0')->get();
        return $parent;
    }


    //get all submenus
    public function getSubMenus(){

        $submenu = Page::where('parent_id','>','0')->get();
        return $submenu;
    }

    //get page id by name
    public function get_page_name_by_id($linkname){

        $pageName = Page::where('link_name', $linkname)->pluck('id')->first();
        return $pageName;
    }



}
