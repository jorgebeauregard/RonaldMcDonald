<?php

use Illuminate\Database\Seeder;

class CheckInCompanionTableSeeder extends Seeder
{
    

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('check_in_companion')->insert([
            'companion_id' => 1,
            'check_in_id' => 1,
            'relationship_id' => 1,
        ]);

        DB::table('check_in_companion')->insert([
            'companion_id' => 2,
            'check_in_id' => 1,
            'relationship_id' => 2,
        ]);
    }
}
