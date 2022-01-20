<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FajtaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fajtas')->insert([
            'id'=>1,
            'faneve'=>"Korte",
            'hanyeves'=>23
        ]);
        DB::table('fajtas')->insert([
            'id'=>2,
            'faneve'=>"Szilva",
            'hanyeves'=>40
        ]);
        DB::table('fajtas')->insert([
            'id'=>3,
            'faneve'=>"Cseresznye",
            'hanyeves'=>3
        ]);
    }
}
