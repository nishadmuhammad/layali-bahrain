<?php

namespace App\Http\Controllers\admin;
use App\Portfolio;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PortfolioController extends Controller
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

        $portfolios=Portfolio::all()->sortBy('odr');
        return view('admin.portfolio.index',['portfolios'=>$portfolios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.portfolio.create');
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
            'title'=>'required',
            'odr'=>'nullable',
            'photo'=>'nullable|image',
            'description'=>'required',
            'width'=>'required',
            'status'=>'nullable',

        ]);

        $data['status']='Published';
        // $data['slug']=Str::slug($data['title'], '-');

        //Uploading and saving outer image
        if($request->cover_photo) {
            $image_path = request('cover_photo')->store('uploads/portfolio', 'public');
            $naked_path = env('IMAGE_PATH') . $image_path;
            if($request->width =="full"){
            $photos = Image::make($naked_path)->fit(1365,683);
            }else{
            $photos = Image::make($naked_path)->fit(644,480);
            }
            $photos->save();
            $data['photo']=$image_path;
        }
        else{
            $data['photo']='';
        }

        //storing
        Portfolio::create($data);
        return redirect(route('portfolio.index'))->with('success','Portfolio added successfully!');
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
         $portfolios=Portfolio::findOrFail($id);
        return view('admin.portfolio.edit',['portfolios'=>$portfolios]);
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
        $portfolios=Portfolio::findOrFail($id);
        $data=$request->validate([
            'title'=>'required',
            'odr'=>'required',
            'photo'=>'nullable|image',
            'description'=>'required',
            'width'=>'required',

        ]);
        $data['status']='Published';

        if($request->cover_photo) {
            $image_path = request('cover_photo')->store('uploads/portfolio', 'public');
            $naked_path = env('IMAGE_PATH') . $image_path;
            if($request->width =="full"){
                $photos = Image::make($naked_path)->fit(1365,683);

            }else{
                $photos = Image::make($naked_path)->fit(644,480);
            }
            $photos->save();
            $data['photo']=$image_path;
            $file_path=env('IMAGE_PATH').$portfolios->cover_photo;
            if(file_exists($file_path))
            {
                @unlink($file_path);
            }
        }
        //updating
        $portfolios->update($data);
        return redirect(route('portfolio.index'))->with('success','Portfolio updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portfolios=Portfolio::findOrFail($id);
        //removing  outer image
        $file_path=env('IMAGE_PATH').$portfolios->portfolio;
        if(file_exists($file_path))
        {
            @unlink($file_path);
        }
        $portfolios->delete();
        return back()->with('success','portfolio deleted successfully!');
    }
}
