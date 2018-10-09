<?php

use Illuminate\Database\Seeder;

class OccupationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('occupations')->insert([
            'name' => "Desempleado"
        ]);
        
        DB::table('occupations')->insert([
            'name' => "Labores del Hogar"
        ]);
        
        DB::table('occupations')->insert([
            'name' => "Empleado"
        ]);
        
        DB::table('occupations')->insert([
            'name' => "Profesionista"
        ]);
        
        DB::table('occupations')->insert([
            'name' => "Plomero"
        ]);
        
        DB::table('occupations')->insert([
            'name' => "Albañil"
        ]);
        
        DB::table('occupations')->insert([
            'name' => "Chofer"
        ]);
        
        DB::table('occupations')->insert([
            'name' => "Sirvienta"
        ]);
        
        DB::table('occupations')->insert([
            'name' => "Campesino"
        ]);
        
        DB::table('occupations')->insert([
            'name' => "Taxista"
        ]);
    }
}


