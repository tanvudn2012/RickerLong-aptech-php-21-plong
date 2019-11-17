<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(PostsTableSeeder::class);
    }
}
// @if($hocsinh->hinhthe != '') 
//         <img onclick="MymodalImage(this);" alt="{{ $hocsinh->tenhocsinh }}" src="/public/upload/hinhthe/{{ $hocsinh->hinhthe }}" style="cursor: zoom-in;" width="60"/>
//         @else 
//         <img onclick="MymodalImage(this);" alt="{{ $hocsinh->tenhocsinh }}" src="/public/upload/hinhthe/noimage.png" style="cursor: zoom-in;" width="60"/> @endif
