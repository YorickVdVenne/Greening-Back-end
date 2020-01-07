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
            'title' => "Aapjes",
            'subject' => "Dieren",
            'description' => "apen zijn cool 4ever"
        ]);
    }
}
