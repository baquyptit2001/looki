<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function grid(){
        return view('front-end.page.blog-grid');
    }
    public function list(){
        return view('front-end.page.blog-list');
    }
    public function single(){
        $cat = Category::where('parent_id', 0)->get();
        return view('front-end.page.blog-single', compact('cat'));
    }
}
