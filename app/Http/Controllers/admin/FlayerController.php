<?php

namespace App\Http\Controllers\admin;

use App\Flayer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class FlayerController extends Controller
{

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $flayers=Flayer::all()->sortBy('id');
        return view('admin.flayer.index',['flayers'=>$flayers]);
    }

    public function create()
    {
        return view('admin.flayer.create');
    }

     /**
     *  create.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        $this->validate($request, [
            'type' => 'required',
            'cover_photo'=>'required',
            ]);
            // $input=$request->all();
            $type=$request->type;

            $images=array();
            if($files=$request->file('cover_photo')){

                foreach($files as $file){
                    $name=$file->getClientOriginalName();
                    $path = $file->store('uploads/flayer/', 'public');
                    $images[]=$name;
                    $naked_path = env('IMAGE_PATH') . $path;

                    Flayer::insert( [
                        'photo'=> $naked_path,
                        'type' =>$type,
                    ]);
                }
             return back()->with('success','Flayer added successfully!');
                
            }

    }
}
            