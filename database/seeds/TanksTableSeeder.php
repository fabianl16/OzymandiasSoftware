<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TanksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('tanks')->insert([
            'Tank_code' => '001'
        ]);
        DB::table('tanks')->insert([
            'Tank_code' => '002'
        ]);
        DB::table('tanks')->insert([
            'Tank_code' => '003'
        ]);


    }
}
