<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->insert([
            'name' => "Aguascalientes"
        ]);
        
        DB::table('states')->insert([
            'name' => "Baja California"
        ]);
        
        DB::table('states')->insert([
            'name' => "Baja California Sur"
        ]);
        
        DB::table('states')->insert([
            'name' => "Campeche"
        ]);
        
        DB::table('states')->insert([
            'name' => "Chiapas"
        ]);
        
        DB::table('states')->insert([
            'name' => "Chihuahua"
        ]);
        
        DB::table('states')->insert([
            'name' => "Ciudad de México"
        ]);
        
        DB::table('states')->insert([
            'name' => "Coahuila de Zaragoza"
        ]);
        
        DB::table('states')->insert([
            'name' => "Colima"
        ]);
        
        DB::table('states')->insert([
            'name' => "Durango"
        ]);
        
        DB::table('states')->insert([
            'name' => "Estado de México"
        ]);
        
        DB::table('states')->insert([
            'name' => "Guanajuato"
        ]);
        
        DB::table('states')->insert([
            'name' => "Guerrero"
        ]);
        
        DB::table('states')->insert([
            'name' => "Hidalgo"
        ]);
        
        DB::table('states')->insert([
            'name' => "Jalisco"
        ]);
        
        DB::table('states')->insert([
            'name' => "Michoacán de Ocampo"
        ]);
        
        DB::table('states')->insert([
            'name' => "Morelos"
        ]);
        
        DB::table('states')->insert([
            'name' => "Nayarit"
        ]);
        
        DB::table('states')->insert([
            'name' => "Nuevo León"
        ]);
        
        DB::table('states')->insert([
            'name' => "Oaxaca"
        ]);
        
        DB::table('states')->insert([
            'name' => "Puebla"
        ]);
        
        DB::table('states')->insert([
            'name' => "Querétaro"
        ]);
        
        DB::table('states')->insert([
            'name' => "Quintana Roo"
        ]);
        
        DB::table('states')->insert([
            'name' => "San Luis Potosí"
        ]);
        
        DB::table('states')->insert([
            'name' => "Sin Localidad"
        ]);
        
        DB::table('states')->insert([
            'name' => "Sinaloa"
        ]);
        
        DB::table('states')->insert([
            'name' => "Sonora"
        ]);
        
        DB::table('states')->insert([
            'name' => "Tabasco"
        ]);
        
        DB::table('states')->insert([
            'name' => "Tamaulipas"
        ]);
        
        DB::table('states')->insert([
            'name' => "Tlaxcala"
        ]);
        
        DB::table('states')->insert([
            'name' => "Veracruz de Ignacio de la Llave"
        ]);
        
        DB::table('states')->insert([
            'name' => "Yucatán"
        ]);
        
        DB::table('states')->insert([
            'name' => "Zacatecas"
        ]);
    }
}
