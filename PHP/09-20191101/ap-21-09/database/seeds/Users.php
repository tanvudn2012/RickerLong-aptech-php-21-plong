<?php

use Illuminate\Database\Seeder;
use App\User;
class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sql = Faker\Factory::create(); 
        for ($i=0; $i <5 ; $i++) { 
            DB::table('users')->insert([
                'name' => $sql->name($gender = null),
                'email' => $sql->safeEmail,
                'password' => bcrypt('asdasd'),
            ]);
        }
    }
}
