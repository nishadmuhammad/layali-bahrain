<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\AdminController;
use App\Opening;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class OpeningController extends AdminController
{
    function __construct()
    {
        $this->middleware(['role:admin|HR']);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $openings=Opening::all();
        return view('admin.opening.index',['openings'=>$openings]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.opening.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //  dd($request);
        $data=$request->validate([
            'country' => 'required',
            'no_of_opening' =>'required',
            'position'=>'required',
            'description' =>'required',
            'expiry_date'=>'required',

        ]);

        //Storing
        Opening::create($data);
        return redirect(route('opening.index'))->with('success','Opening added successfully!');;


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
        $opening=Opening::findOrFail($id);
        return view('admin.opening.edit',['opening'=>$opening]);
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
        $opening=Opening::findOrFail($id);
        $data=$request->validate([
            'country' => 'required',
            'no_of_opening' =>'required',
            'position'=>'required',
            'description' =>'required',
            'expiry_date'=>'required',

        ]);

        //updating
        $opening->update($data);
        return redirect(route('opening.index'))->with('success','Opening updated successfully!');;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $opening=Opening::findOrFail($id);
        //deleting
        $opening->delete();
        return back()->with('success','Opening deleted successfully!');
    }
}
