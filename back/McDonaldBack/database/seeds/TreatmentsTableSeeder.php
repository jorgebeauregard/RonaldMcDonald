<?php

use Illuminate\Database\Seeder;

class TreatmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('treatments')->insert([
            'name' => "Terapia"
        ]);
        DB::table('treatments')->insert([
            'name' => "Tratamiento"
        ]);
        DB::table('treatments')->insert([
            'name' => "Estudios de Laboratorio"
        ]);
        DB::table('treatments')->insert([
            'name' => "Valoración Médica"
        ]);
        DB::table('treatments')->insert([
            'name' => "Estudios de Gabinete"
        ]);
        DB::table('treatments')->insert([
            'name' => "Rehabilitación"
        ]);
        DB::table('treatments')->insert([
            'name' => "Consulta Externa"
        ]);
        DB::table('treatments')->insert([
            'name' => "Cirugía"
        ]);
        DB::table('treatments')->insert([
            'name' => "Observación - Urgencias"
        ]);
        DB::table('treatments')->insert([
            'name' => "Pre-Hospitalización"
        ]);
        DB::table('treatments')->insert([
            'name' => "Terapia Intensiva"
        ]);
        DB::table('treatments')->insert([
            'name' => "Post-Hospitalización"
        ]);
        DB::table('treatments')->insert([
            'name' => "Hospitalización"
        ]);
        DB::table('treatments')->insert([
            'name' => "Otro"
        ]);
    }
}


