<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    public function index(){
        $users = user::get();
        return view('index',['users'=>$users]);
    }
}
