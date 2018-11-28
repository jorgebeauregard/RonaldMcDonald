<?php

use Illuminate\Database\Seeder;

class ChildCompanionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        DB::table('child_companion')->insert([
            'child_id' => 1,
            'companion_id' => 1,
            'relationship_id' => 1
        ]);

        //2
        DB::table('child_companion')->insert([
            'child_id' => 2,
            'companion_id' => 2,
            'relationship_id' => 13
        ]);

        DB::table('child_companion')->insert([
            'child_id' => 2,
            'companion_id' => 9,
            'relationship_id' => 13
        ]);

        //3
        DB::table('child_companion')->insert([
            'child_id' => 3,
            'companion_id' => 25,
            'relationship_id' => 2
        ]);

      
        DB::table('child_companion')->insert([
            'child_id' => 3,
            'companion_id' => 7,
            'relationship_id' => 1
        ]);


        DB::table('child_companion')->insert([
            'child_id' => 3,
            'companion_id' => 11,
            'relationship_id' => 2
        ]);

        //4
        DB::table('child_companion')->insert([
            'child_id' => 4,
            'companion_id' => 12,
            'relationship_id' => 2
        ]);

        //5
        DB::table('child_companion')->insert([
            'child_id' => 5,
            'companion_id' => 21,
            'relationship_id' => 2
        ]);
    }
}
