<?php

namespace App\Http\Controllers\front;
use App\Enquiry;
use App\Gcaptcha;
use App\Http\Controllers\Controller;
use App\Mail\EnquiryEmail;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index(){
        $posts=Post::OrderBy('id','DESC')->take(4);
        return view('front.home',['posts'=>$posts]);
    }
}
