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
        DB::table('child_companion')->insert([
            'child_id' => 14,
            'companion_id' => 1,
            'relationship_id' => 1
        ]);

        DB::table('child_companion')->insert([
            'child_id' => 14,
            'companion_id' => 3,
            'relationship_id' => 2
        ]);

        DB::table('child_companion')->insert([
            'child_id' => 2,
            'companion_id' => 2,
            'relationship_id' => 13
        ]);
    }
}
