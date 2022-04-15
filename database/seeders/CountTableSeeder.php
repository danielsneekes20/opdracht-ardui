<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('count')->insert([
            "amount" => 0,
        ]);
    }
}
