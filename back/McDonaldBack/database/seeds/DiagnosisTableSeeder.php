<?php

use Illuminate\Database\Seeder;

class DiagnosisTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('diagnoses')->insert([
            'name' => "Cancer"
        ]);

        DB::table('diagnoses')->insert([
            'name' => "Lupus"
        ]);

        DB::table('diagnoses')->insert([
            'name' => "Gripa"
        ]);

        DB::table('diagnoses')->insert([
            'name' => "Anorexia"
        ]);


    }
}
