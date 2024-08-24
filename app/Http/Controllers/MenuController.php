<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use Inertia\Inertia;

class MenuController extends Controller
{
    public function getParents()
    {
        $parents = Page::where('parent_id', '0')->where('is_active', 1)->get();
        return $parents;
    }

    // Get all submenus
    public function getSubMenus()
    {
        $submenus = Page::where('parent_id', '>', '0')->get();
        return $submenus;
    }

    // Fetch menu data and render the page
    public function index()
    {
        $parents = $this->getParents();
        $submenus = $this->getSubMenus();

        $menuItems = $parents->map(function($parent) use ($submenus) {
            $parent->submenus = $submenus->where('parent_id', $parent->id);
            return $parent;
        });

        return $menuItems;
    }
}
