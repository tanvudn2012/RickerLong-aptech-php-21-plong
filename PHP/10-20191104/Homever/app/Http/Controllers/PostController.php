<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */     

//     public function getupload(Request $request)
//     {
//     return view('upImage');
//     }
//     public function postFile(Request $request)
//     {
//         //kiểm tra có tồn tại myFikle ?
//         if($request->hasFile('myFile'))
//         {
//         //lưu file
//         $request->file('myFile')->move(
//         'public/img', //nơi cần lưu
//         'Saved.png' //tên file
// );
//         }
//         else
//         {
//         echo "Chưa có file";
//         }
//     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts= post::get();
        return view('upImage',['posts'=>$posts]);
    }
}