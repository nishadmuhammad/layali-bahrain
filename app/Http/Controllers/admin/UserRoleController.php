<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\AdminController;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use DB;

class UserRoleController extends AdminController
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
        $users=User::all();
        return view('admin.user.index',['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles=Role::all();
        return view('admin.user.create',['roles'=>$roles]);

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
            'name' => 'required',
            'email'=>'required|email|unique:users,email',
            'password' => 'required|same:confirm_password',
            'role'=>'required',
        ]);

        $user=User::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'password'=>Hash::make($data['password'])
        ]);
        $user->assignRole($data['role']);
        return redirect()->route('user.index')->with('success','User added successfully');
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
        $user=User::findOrFail($id);
        $userRole=$user->roles->pluck('name')->all();
        $roles=Role::all();
        return view('admin.user.edit',compact('user','userRole','roles'));
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
        $user=User::findOrFail($id);
        $data=$request->validate([
            'name' => 'required',
            'email'=>'required|email|unique:users,email,'.$id,
            'password'=>'nullable|same:confirm_password',
            'role'=>'required',
        ]);
        if($data['password'] == '')
        {
            $password=$user->password;
        }
        else
        {
            $password=Hash::make($data['password']);

        }
        $user->update([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'password'=>$password,
        ]);

        DB::table('model_has_roles')->where('model_id',$id)->delete();

        $user->assignRole($data['role']);
        return redirect()->route('user.index')->with('success','User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user=User::findOrFail($id);
        $user->delete();
        return back()->with('success','User deleted successfully!');

    }
}
