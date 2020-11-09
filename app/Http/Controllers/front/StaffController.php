<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index(){
        $staff_details=staff::where('status','Published')->OrderBy('id', 'DESC')->get();
        return view('front.portfolio',['portfolios'=>$portfolios]);
    }
}
