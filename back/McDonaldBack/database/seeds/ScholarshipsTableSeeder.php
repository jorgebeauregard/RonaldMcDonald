<?php

use Illuminate\Database\Seeder;

class ScholarshipsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('scholarships')->insert([
            'name' => "Sin escuela"
        ]);
        
        DB::table('scholarships')->insert([
            'name' => "Maternal"
        ]);
        
        DB::table('scholarships')->insert([
            'name' => "Kinder"
        ]);
        
        DB::table('scholarships')->insert([
            'name' => "Primaria"
        ]);
        
        DB::table('scholarships')->insert([
            'name' => "Secundaria"
        ]);
        
        DB::table('scholarships')->insert([
            'name' => "Preparatoria/Bachiller"
        ]);
        
        DB::table('scholarships')->insert([
            'name' => "Carrera Técnica"
        ]);
        
        DB::table('scholarships')->insert([
            'name' => "Licenciatura"
        ]);
        
        DB::table('scholarships')->insert([
            'name' => "Maestría"
        ]);
        
        DB::table('scholarships')->insert([
            'name' => "Doctorado"
        ]);
        
        DB::table('scholarships')->insert([
            'name' => "Educación inicial"
        ]);
        
    }
}


