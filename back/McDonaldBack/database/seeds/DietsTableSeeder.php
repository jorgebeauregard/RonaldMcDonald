<?php

use Illuminate\Database\Seeder;

class DietsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('diets')->insert([
            'name' => "Normal"
        ]);
        DB::table('diets')->insert([
            'name' => "Blanda"
        ]);
        DB::table('diets')->insert([
            'name' => "Lactante"
        ]);
        DB::table('diets')->insert([
            'name' => "Papilla"
        ]);
        DB::table('diets')->insert([
            'name' => "Renal"
        ]);
        DB::table('diets')->insert([
            'name' => "Especial"
        ]);
        DB::table('diets')->insert([
            'name' => "Restringida"
        ]);
    }

}
