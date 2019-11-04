<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VuController extends Controller
{
    public function getName($name){
        return 'Tôi tên là '.$name;
    }
}
getName('Vũ');