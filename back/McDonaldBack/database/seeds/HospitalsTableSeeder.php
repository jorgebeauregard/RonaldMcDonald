<?php

use Illuminate\Database\Seeder;

class HospitalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hospitals')->insert([
            'name'=> "CRIT"
            //Centro de Rehabilitacion Infantil Teleton
        ]);
        DB::table('hospitals')->insert([
            'name'=> "HNP"
            //hospitals del Niño Poblano
        ]);
        DB::table('hospitals')->insert([
            'name'=> "HGCH"

        ]);
        DB::table('hospitals')->insert([
            'name'=> "HUP"
        ]);
        DB::table('hospitals')->insert([
            'name'=> "HGN"
        ]);
        DB::table('hospitals')->insert([
            'name'=> "HGS"
        ]);
        DB::table('hospitals')->insert([
            'name'=> "HdlM"
        ]);
        DB::table('hospitals')->insert([
            'name'=> "UQxP"
        ]);
        DB::table('hospitals')->insert([
            'name'=> "TyO"
            //Traumatología y Ortopedia
        ]);
        DB::table('hospitals')->insert([
            'name'=> "HA CCR"
        ]);
        DB::table('hospitals')->insert([
            'name'=> "HB"
            //hospitals Betania?
        ]);
    }
}

