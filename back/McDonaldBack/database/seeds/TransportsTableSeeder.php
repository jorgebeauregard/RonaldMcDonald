<?php

use Illuminate\Database\Seeder;

class TransportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transports')->insert([
            'child_id'=> 1,
            'transport_count'=> 3
        ]);
        
        DB::table('transports')->insert([
            'child_id'=> 2,
            'transport_count'=> 3
        ]);
        
        DB::table('transports')->insert([
            'child_id'=> 3,
            'transport_count'=> 3
        ]);
        
    }
}
