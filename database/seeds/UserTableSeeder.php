<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'phone'=> '8888888',
            'email' => 'admin3@admin.com',
            'active' => 1,
            'code' => 1,
            'pay' =>6000,
            'password' => bcrypt('admin'),
        ]);

        DB::table('users')->insert([
            'name' => 'admin2',
            'phone'=> '8888888',
            'email' => 'admin2@admin.com',
            'active' => 1,
            'code' => 1,
            'pay' =>4000,
            'password' => bcrypt('admin'),
        ]);
        DB::table('users')->insert([
            'name' => 'user3',
            'phone'=> '8888888',
            'email' => 'user3@used.com',
            'active' => 1,
            'code' => 0,
            'pay' =>500,
            'password' => bcrypt('user'),
        ]);
        DB::table('users')->insert([
            'name' => 'user2',
            'phone'=> '8888888',
            'email' => 'user2@used.com',
            'active' => 1,
            'code' => 0,
            'pay' =>0,
            'password' => bcrypt('user'),
        ]);

        DB::table('users')->insert([
            'name' => 'user1',
            'phone'=> '8888888',
            'email' => 'user1@used.com',
            'active' => 1,
            'code' => 0,
            'pay' =>2000,
            'password' => bcrypt('user'),
        ]);

    }
}
