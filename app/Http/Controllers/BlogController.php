<?php

namespace App\Http\Controllers;

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
        return view('front-end.page.blog-single');
    }
}
