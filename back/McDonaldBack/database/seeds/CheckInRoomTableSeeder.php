<?php

use Illuminate\Database\Seeder;

class CheckInRoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('check_in_room')->insert([
            'check_in_id' => 1,
            'room_id' => 1,
            'active' => true
        ]);

        DB::table('check_in_room')->insert([
            'check_in_id' => 1,
            'room_id' => 4,
            'active' => false
        ]);
    }
}
