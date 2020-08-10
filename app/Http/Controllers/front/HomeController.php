<?php

namespace App\Http\Controllers\front;
use App\Http\Controllers\Controller;
use App\Post;
use App\Testimonial;

class HomeController extends Controller
{
    public function index(){
        $posts=Post::where('status','Published')->OrderBy('id','DESC')->limit(4)->get();
        $testimonials=Testimonial::all();
        return view('front.home',['posts'=>$posts,'testimonials'=>$testimonials]);
    }
}
