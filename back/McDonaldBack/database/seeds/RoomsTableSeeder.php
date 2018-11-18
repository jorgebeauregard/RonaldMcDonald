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
            'name'=> "101",
            'occupied' => true
        ]);
        DB::table('rooms')->insert([
            'name'=> "102",
            'occupied' => false
        ]);
        DB::table('rooms')->insert([
            'name'=> "201",
            'occupied' => false
        ]);
        DB::table('rooms')->insert([
            'name'=> "202",
            'occupied' => false
        ]);
    }
}
