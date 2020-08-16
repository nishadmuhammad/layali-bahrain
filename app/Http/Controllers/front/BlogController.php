<?php

namespace App\Http\Controllers\front;
use App\Http\Controllers\Controller;
use App\Post;

class BlogController extends Controller
{
    public function index(){
        $blogs=Post::where('status','Published')->OrderBy('id', 'DESC')->get();
        return view('front.blog.index',['blogs'=>$blogs]);
    }
    public function show($slug){
        $blog=Post::where('slug',$slug)->firstOrFail();
        $blogs=Post::where([['slug','<>',$slug],['status','Published']])->OrderBy('id', 'DESC')->limit(4)->get();
        return view('front.blog.show',['blog'=>$blog,'blogs'=>$blogs]);
    }
}
