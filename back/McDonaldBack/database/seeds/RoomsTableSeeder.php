<?php

use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            'name'=> "101"
        ]);
        DB::table('rooms')->insert([
            'name'=> "102"
        ]);
        DB::table('rooms')->insert([
            'name'=> "201"
        ]);
        DB::table('rooms')->insert([
            'name'=> "202"
        ]);
    }
}
