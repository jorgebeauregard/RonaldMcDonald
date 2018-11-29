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
            'name'=> "103"
        ]);
        DB::table('rooms')->insert([
            'name'=> "104"
        ]);
        DB::table('rooms')->insert([
            'name'=> "105"
        ]);
        DB::table('rooms')->insert([
            'name'=> "106"
        ]);
        
        DB::table('rooms')->insert([
            'name'=> "201"
        ]);
        DB::table('rooms')->insert([
            'name'=> "202"
        ]);
        DB::table('rooms')->insert([
            'name'=> "203"
        ]);
        DB::table('rooms')->insert([
            'name'=> "204"
        ]);
        DB::table('rooms')->insert([
            'name'=> "205"
        ]);
        DB::table('rooms')->insert([
            'name'=> "206"
        ]);

        DB::table('rooms')->insert([
            'name'=> "301"
        ]);
        DB::table('rooms')->insert([
            'name'=> "302"
        ]);
        DB::table('rooms')->insert([
            'name'=> "303"
        ]);
        DB::table('rooms')->insert([
            'name'=> "304"
        ]);
        DB::table('rooms')->insert([
            'name'=> "305"
        ]);
        DB::table('rooms')->insert([
            'name'=> "306"
        ]);
    }
}
