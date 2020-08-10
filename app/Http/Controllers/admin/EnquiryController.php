<?php

namespace App\Http\Controllers\admin;

use App\Enquiry;
use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;

class EnquiryController extends AdminController
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
        $enquireis=Enquiry::all();
        return view('admin.enquiry.index',['enquiries'=>$enquireis]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $enquiry=Enquiry::findOrFail($id);
        $enquiry->delete();
        return back()->with('success','Enquiry deleted successfully!');
    }

    public function bulkDelete($id)
    {
        //dd($ids);
        Enquiry::whereIn('id',explode(',',$id))->delete();
        return back()->with('success','Enquiries deleted successfully!');

    }
}
