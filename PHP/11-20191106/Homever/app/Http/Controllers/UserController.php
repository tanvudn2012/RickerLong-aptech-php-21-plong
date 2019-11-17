<?php

namespace App\Http\Controllers;
use App\Role;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(){
        return view('admin.login');
    }
    public function xllogin(){
        $email=$_POST['email'];
        $password=$_POST['password'];
        $user = User::where('email','=',$email and 'password','=',$password);   
        return 'Dang nhap thanh cong';
    }
    public function index()
    {   
        $users = User::get();
        return view('admin.home',['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::get();
        return view('admin.create',['roles' =>$roles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $user->first();
       return view('admin.show' ,['user'=>$user]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {   
        $user = User::find($user->id);
        return view('admin.update',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $update=$user-> where($user->id,"=",$request->id)->update([
            'name' =>$request->name,
            'email' =>$request->email,
        ]);
        return redirect()->route('admin.home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        User::destroy($user->id);
        return view('admin.home',['users'=>$user->id]);
    }
}
