<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class TrainingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

          DB::table('trainings')->insert([
            'heading' => str_random(150),
            'short_decs'=> str_random(30),
            'image'=> '',
            'description' => str_random(30),
            'date_start' => Carbon::now(),
            'date_end' => Carbon::now()->addDay(),
        ]);

        DB::table('trainings')->insert([
            'heading' => str_random(150),
            'short_decs'=> str_random(30),
            'image'=> '',
            'description' => str_random(30),
            'date_start' => Carbon::now(),
            'date_end' => Carbon::now()->addDay(),
        ]);

        DB::table('trainings')->insert([
            'heading' => str_random(150),
            'short_decs'=> str_random(30),
            'image'=> '',
            'description' => str_random(30),
            'date_start' => Carbon::now(),
            'date_end' => Carbon::now()->addDay(),
        ]);

    }
}
