<?php

namespace App\Http\Controllers\admin;
use App\Staff;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaffController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $staff_details=Staff::all()->sortBy('id');
        return view('admin.Staff.index',['staff_details'=>$staff_details]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.staff.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          //dd('hii');
          $data=$request->validate([
            'name'=>'required',
            'photo'=>'nullable|image',
            'position'=>'required',
            'status'=>'nullable',
            
        ]);

        $data['status']='live';
        // $data['slug']=Str::slug($data['title'], '-');

        //Uploading and saving outer image
        if($request->photo) {
            $image_path = request('photo')->store('uploads/staff/', 'public');
            $naked_path = env('IMAGE_PATH') . $image_path;
            $photos = Image::make($naked_path)->fit(247.5,279.67);
            $photos->save();
            $data['photo']=$image_path;
        }
        else{
            $data['photo']='';
        }
        //storing
        Staff::create($data);
        return redirect(route('staff.index'))->with('success','Staff added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $staff_details=Staff::findOrFail($id);
        return view('staff.edit',['staff_details'=>$staff_details]);
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=$request->validate([
            'name'=>'required',
            'photo'=>'nullable|image',
            'position'=>'required',
          
            
        ]);

        if($request->photo) {
            $image_path = request('photo')->store('uploads/staff/', 'public');
            $naked_path = env('IMAGE_PATH') . $image_path;
            $photos = Image::make($naked_path)->fit(247.5,279.67);
            $photos->save();
            $file_path=env('IMAGE_PATH').$staff_details->photo;
            if(file_exists($file_path))
            {
                @unlink($file_path);
            }
        }

        //updating
        $Staff_deatils->update($data);
        return redirect(route('staff.index'))->with('success','Staff updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $staff_details=staff::findOrFail($id);
        //removing  outer image
        $file_path=env('IMAGE_PATH').$staff_details->staff;
        if(file_exists($file_path))
        {
            @unlink($file_path);
        }
        $staff_details->delete();
        return back()->with('success','Staff deleted successfully!');
    }

}
