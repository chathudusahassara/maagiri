<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $data['pages'] = Page::all();
        $data['blogs'] = Blog::orderBy('created_at', 'DESC')->paginate(10);
        return view('blog.index', $data);
    }

    public function read($slug)
    {
        $data['blog'] = Blog::where('slug', $slug)->first();
        return view('blog.view', $data);
    }
}
