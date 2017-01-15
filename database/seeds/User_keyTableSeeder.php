<?php

use Illuminate\Database\Seeder;

class User_keyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('user_key')->insert([
            'key' => str_random(4),
            'username'=> 'test',
            'phone'=> '88888888',
            'active' => 0,
            'max_user' => '3',
        ]);
        DB::table('user_key')->insert([
            'key' => str_random(4),
            'username'=> 'user1',
            'phone'=> '88888888',
            'active' => 0,
            'max_user' => '3',
        ]);
        DB::table('user_key')->insert([
            'key' => str_random(4),
            'username'=> 'test1',
            'phone'=> '88888888',
            'active' => 0,
            'max_user' => '5',
        ]);
        DB::table('user_key')->insert([
            'key' => str_random(4),
            'username'=> 'test2',
            'phone'=> '88888888',
            'active' => 0,
            'max_user' => '3',
        ]);
        DB::table('user_key')->insert([
            'key' => str_random(4),
            'username'=> 'test3',
            'phone'=> '88888888',
            'active' => 0,
            'max_user' => '2',
        ]);
        DB::table('user_key')->insert([
            'key' => str_random(4),
            'username'=> 'test4',
            'phone'=> '88888888',
            'active' => 0,
            'max_user' => '6',
        ]);



    }
}
