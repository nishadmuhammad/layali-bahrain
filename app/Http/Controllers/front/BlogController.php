<?php

namespace App\Http\Controllers\front;
use App\Http\Controllers\Controller;
use App\Post;

class BlogController extends Controller
{
    public function index(){
        $blogs=Post::OrderBy('id', 'DESC')->take(8);
        return view('front.blog.index',['blogs'=>$blogs]);
    }
    public function show($slug){
        $blog=Post::where('slug',$slug)->firstOrFail();
        $blogs=Post::where('slug','<>',$slug)->OrderBy('id', 'DESC')->take(4);
        return view('front.blog.show',['blog'=>$blog,'blogs'=>$blogs]);
    }
}
