<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Staff;


class StaffController extends Controller
{
    public function index(){
        $staff_details=Staff::where('status','live')->OrderBy('odr', 'ASC')->get();
        return view('front.about',['staff_details'=>$staff_details]);
    }
}
