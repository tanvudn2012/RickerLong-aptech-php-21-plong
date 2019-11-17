<?php

use Illuminate\Database\Seeder;
use App\post;
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
        for ($i=0; $i <5 ; $i++) {
            post::insert([
                'title' => $dl->realText(100),
                'description' => $dl->realText(200),
                'content' => $dl->randomHtml()
            ]);
        }
    }
}
