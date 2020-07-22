<?php

namespace App\Http\Controllers\front;
use App\Application;
use App\Http\Controllers\Controller;
use App\Opening;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

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
    public function store(Request $request)
    {
        $data=$request->validate([
           'name'=>'required',
           'opening_id'=>'required',
           'email'=>'required|email',
            'phone'=>'required',
            'biodata'=>'required',
            'description'=>'required',
        ]);
        //Uploading and saving outer image
        if($request->biodata) {

             $filenameWithExt=$request->file('biodata')->getClientOriginalName();
            $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
            $extension=$request->file('biodata')->getClientOriginalExtension();
            $fileNameToStore=$filename.'_'.time().'.'.$extension;
            request()->biodata->move(env('IMAGE_PATH').'/uploads/biodata', $fileNameToStore);
            $file_path='uploads/biodata/'.$fileNameToStore;
            $data['biodata']=$file_path;
        }
        else{
            $data['biodata']='';
        }
        Application::create($data);
        return back()->with('success','Your application submitted successfully. Our HR manager will contact you in 2-3 days.');
    }
}
