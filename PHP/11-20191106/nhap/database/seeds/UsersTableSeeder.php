<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sql=Faker\Factory::create();
        for ($i=0; $i <10 ; $i++) { 
            DB::table('users')->insert([
                'name'=>$sql->name(),
                'email'=>$sql->safeEmail(),
                'password'=>bcrypt('123'),
            ]);
        }
    }
}
