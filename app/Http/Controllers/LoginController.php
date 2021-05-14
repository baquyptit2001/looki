<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        $pre = url()->previous();
        return view('front-end.page.login', compact('pre'));
    }
}
