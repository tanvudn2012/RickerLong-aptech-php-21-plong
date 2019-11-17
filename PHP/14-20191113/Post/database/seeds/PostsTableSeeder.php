<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sql=Faker\Factory::create();
        for ($i=0; $i <5 ; $i++) { 
            Post::insert([
                'title'=>$sql->realText(30);
            ])
        }
    }
}
