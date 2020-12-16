<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Flayer;


class GalleryController extends Controller
{
    public function index(){
            $flayers=Flayer::OrderBy('id', 'ASC')->get();
            return view('front.gallery.gallery',['flayers'=>$flayers]);
    }
}
