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
        $this->call(UserTableSeeder::class);
        $this->call(FirstTaskTableSeeder::class);
        $this->call(SecondTaskTableSeeder::class);
        $this->call(ThirdTaskTableSeeder::class);
        $this->call(User_keyTableSeeder::class);
    }
}
