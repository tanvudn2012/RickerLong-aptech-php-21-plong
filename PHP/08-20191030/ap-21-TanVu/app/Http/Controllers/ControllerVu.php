<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerVu extends Controller
{
    public function show($id)
    {
        return view('controller', ['id' => ($id)]);
    }
}   
