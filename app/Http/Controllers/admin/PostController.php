<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\AdminController;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class PostController extends AdminController
{
    function __construct()
    {
        $this->middleware(['role:admin|Blogger']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::all();
        return view('admin.post.index',['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.create');
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
            'title' => 'required|max:255',
            'cover_photo' =>'required|image',
            'description' =>'nullable',
            'content' =>'nullable',
            'keywords'=>'nullable'
        ]);
        //add additional fields here
        $data['status']='Published';
        $data['slug']=Str::slug($data['title'], '-');
        //Uploading and saving Cover
        if($request->cover_photo) {
            $image_path = request('cover_photo')->store('uploads/posts/cover', 'public');
            $naked_path = env('IMAGE_PATH') . $image_path;
            $photo = Image::make($naked_path)->fit(1194,505);
            $photo->save();
            $data['cover_photo']=$image_path;
        }
        else{
            $data['cover_photo']='';
        }

        //thumbnail
        if($request->cover_photo) {
            $image_path = request('cover_photo')->store('uploads/posts/thumbnail', 'public');
            $naked_path = env('IMAGE_PATH') . $image_path;
            $photo = Image::make($naked_path)->fit(581,333);
            $photo->save();
            $data['thumbnail']=$image_path;
        }
        else{
            $data['thumbnail']='';
        }

        //Storing
        Post::create($data);
        return redirect(route('post.index'))->with('success','Post added successfully!');;


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
        $post=Post::findOrFail($id);
        return view('admin.post.edit',['post'=>$post]);
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
        $post=Post::findOrFail($id);
        $data=$request->validate([
            'title' => 'required|max:255',
            'cover_photo' =>'nullable|image',
            'description' =>'nullable',
            'content'=>'nullable',
            'status' =>'required',
            'keywords'=>'nullable'
        ]);
        $data['slug']=Str::slug($data['title'], '-');
        //Uploading and saving Cover
        if($request->cover_photo) {
            $image_path = request('cover_photo')->store('uploads/posts/cover', 'public');
            $naked_path = env('IMAGE_PATH') . $image_path;
            $photo = Image::make($naked_path)->fit(931,505);
            $photo->save();
            $data['cover_photo']=$image_path;
            //removing old image
            $file_path=env('IMAGE_PATH').$post->cover_photo;
            if(file_exists($file_path))
            {
                @unlink($file_path);
            }
        }
        //thumbnail
        if($request->cover_photo) {
            $image_path = request('cover_photo')->store('uploads/posts/thumbnail', 'public');
            $naked_path = env('IMAGE_PATH') . $image_path;
            $photo = Image::make($naked_path)->fit(581,333);
            $photo->save();
            $data['thumbnail'] = $image_path;
            //removing old image
            $file_path = env('IMAGE_PATH') . $post->thumbnail;
            if (file_exists($file_path)) {
                @unlink($file_path);
            }
        }

        //updating
        $post->update($data);
        return redirect(route('post.index'))->with('success','Post updated successfully!');;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Post::findOrFail($id);
        //removing cover
        $file_path=env('IMAGE_PATH').$post->cover_photo;
        if(file_exists($file_path))
        {
            @unlink($file_path);
        }
        //deleting
        $post->delete();
        return back()->with('success','Post deleted successfully!');
    }
}
