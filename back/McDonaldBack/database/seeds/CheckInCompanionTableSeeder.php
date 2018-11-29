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
            'check_in_id' => 1,
            'companion_id' => 1,
        ]);

        DB::table('check_in_companion')->insert([
            'check_in_id' => 2,
            'companion_id' => 2,
        ]);

        DB::table('check_in_companion')->insert([
            'check_in_id' => 2,
            'companion_id' => 9,
        ]);

        DB::table('check_in_companion')->insert([
            'check_in_id' => 3,
            'companion_id' => 25,
        ]);

        DB::table('check_in_companion')->insert([
            'check_in_id' => 3,
            'companion_id' => 7,
        ]);

        DB::table('check_in_companion')->insert([
            'check_in_id' => 3,
            'companion_id' => 11,
        ]);
    }
}
