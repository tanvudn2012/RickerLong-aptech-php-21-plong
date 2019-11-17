<?php

use Illuminate\Database\Seeder;
use App\Post;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dl=Faker\Factory::create();
        for ($i=0; $i < 5; $i++) { 
            Post::insert([
                'title'=>$dl->name,
                'description'=>$dl->text,
                'content' =>$dl->text,
            ]);
        }
    }
}
