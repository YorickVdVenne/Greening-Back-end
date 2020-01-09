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
            'id'            => 32,
            'user_id'       => 1,
            'title'         => "Aapjes",
            'subject'       => "Dieren",
            'description'   => "apen zijn cool 4ever",
            'self'          => "http://greening.louis.lol/api/ideas/32"
        ]);
        DB::table('ideas')->insert([
            'id'            => 33,
            'user_id'       => 1,
            'title'         => "Auto",
            'subject'       => "Transport",
            'description'   => "pak de fiets hee",
            'self'          => "http://greening.louis.lol/api/ideas/33"
        ]);
    }
}
