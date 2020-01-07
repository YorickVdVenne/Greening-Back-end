<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ideas')->insert([
            'user_id' => 1,
            'title' => Str::random(10),
            'subject' => Str::random(10),
            'description' => Str::random(2000)
        ]);
    }
}
