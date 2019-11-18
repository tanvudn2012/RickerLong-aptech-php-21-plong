<?php

use Illuminate\Database\Seeder;
use App\Article;
class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=Faker\Factory::create();
        for ($i=0; $i < 5; $i++) { 
            Article::insert([
                "title"=>$title=$data->realText(30),
                "title_slug"=>str_slug($title, '-'),
                "description"=>$data->text,
            ]);    
        }
    }
}
