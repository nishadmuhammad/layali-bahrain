<?php

namespace App\Http\Controllers\front;
use App\Http\Controllers\Controller;
use App\Opening;

class CareerController extends Controller
{
    public function index(){
        $openings=Opening::all();
        return view('front.career.index',['careers'=>$openings]);
    }
    public function show($id){
        $opening=Opening::findOrFail($id);
        $openings=Opening::all();
        return view('front.career.show',['opening'=>$opening,'openings'=>$openings]);
    }
}
