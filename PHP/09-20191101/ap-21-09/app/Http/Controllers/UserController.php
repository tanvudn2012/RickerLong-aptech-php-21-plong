<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function sql(){
        $user = DB::table('users')->get();
        return view('homever',['users' =>$user]);
    }
}
