<?php

use Illuminate\Database\Seeder;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Tan Vu',
            'email' => 'tanvudn2012@gmail.com',
            'password'=> '123456',
        ]);
        DB::table('users')->insert([
            'name' => 'Ngo Thuong',
            'email' => 'ngothuong@gmail.com',
            'password'=> '123456',
        ]);
    }
}
