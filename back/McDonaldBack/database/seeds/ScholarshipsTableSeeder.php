<?php

use Illuminate\Database\Seeder;

class ScholarshipsTableSeeder extends Seeder
{
    
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('scholarships')->insert([
            'name' => "Sin escuela"
        ]);
        /**1**/
        DB::table('scholarships')->insert([
            'name' => "Maternal"
        ]);
        /**2**/
        DB::table('scholarships')->insert([
            'name' => "Kinder"
        ]);
        /**3**/
        DB::table('scholarships')->insert([
            'name' => "Primaria"
        ]);
        /**4**/
        DB::table('scholarships')->insert([
            'name' => "Secundaria"
        ]);
        /**5**/
        DB::table('scholarships')->insert([
            'name' => "Preparatoria/Bachiller"
        ]);
        /**6**/
        DB::table('scholarships')->insert([
            'name' => "Carrera Técnica"
        ]);
        /**7**/
        DB::table('scholarships')->insert([
            'name' => "Licenciatura"
        ]);
        /**8**/
        DB::table('scholarships')->insert([
            'name' => "Maestría"
        ]);
        /**9**/
        DB::table('scholarships')->insert([
            'name' => "Doctorado"
        ]);
        /**10**/
        DB::table('scholarships')->insert([
            'name' => "Educación inicial"
        ]);
        
    }
}


