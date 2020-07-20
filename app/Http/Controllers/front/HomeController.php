<?php

namespace App\Http\Controllers\front;
use App\Http\Controllers\Controller;
use App\Post;
class HomeController extends Controller
{
    public function index(){
        $posts=Post::OrderBy('id','DESC')->take(4);
        return view('front.home',['posts'=>$posts]);
    }
}
