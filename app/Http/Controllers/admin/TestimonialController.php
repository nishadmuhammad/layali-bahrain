<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\AdminController;
use App\Testimonial;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class TestimonialController extends AdminController
{
    function __construct()
    {
        $this->middleware(['role:admin']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials=Testimonial::all();
        return view('admin.testimonial.index',['testimonials'=>$testimonials]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'name'=>'required',
            'rating'=>'required',
            'designation'=>'required',
            'description'=>'required',
            'profile_pic'=>'nullable|image',
        ]);
        $data['status']='Published';
        //uploading profile pic
        if($request->profile_pic) {
            $image_path = request('profile_pic')->store('uploads/testimonials/profile', 'public');
            $naked_path = env('IMAGE_PATH') . $image_path;
            $photo = Image::make($naked_path)->fit(51,51);
            $photo->save();
            $data['profile_pic']=$image_path;
        }
        else{
            $data['profile_pic']='';
        }

        //storing
        Testimonial::create($data);
        return redirect(route('testimonial.index'))->with('success','Testimonial added successfully!');;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimonial=Testimonial::findOrFail($id);
        return view('admin.testimonial.edit',['testimonial'=>$testimonial]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $testimonial=Testimonial::findOrFail($id);
        $data=$request->validate([
            'name'=>'required',
            'rating'=>'required',
            'designation'=>'required',
            'description'=>'required',
            'profile_pic'=>'nullable|image',
            'status'=>'required',

        ]);
        //uploading profile pic
        if($request->profile_pic) {
            $image_path = request('profile_pic')->store('uploads/testimonials/profile', 'public');
            $naked_path = env('IMAGE_PATH') . $image_path;
            $photo = Image::make($naked_path)->fit(51,51);
            $photo->save();
            $data['profile_pic']=$image_path;
            //removing old image
            $file_path=env('IMAGE_PATH').$testimonial->profile_pic;
            if(file_exists($file_path))
            {
                @unlink($file_path);
            }
        }
        //updating
        $testimonial->update($data);
        return redirect(route('testimonial.index'))->with('success','Testimonial updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonial=Testimonial::findOrFail($id);
        //removing profile pic
        $file_path=env('IMAGE_PATH').$testimonial->profile_pic;
        if(file_exists($file_path))
        {
            @unlink($file_path);
        }
        //removing cover pic
        $file_path=env('IMAGE_PATH').$testimonial->cover_pic;
        if(file_exists($file_path))
        {
            @unlink($file_path);
        }
        $testimonial->delete();
        return back()->with('success','Testimonial deleted successfully!');


    }
}
