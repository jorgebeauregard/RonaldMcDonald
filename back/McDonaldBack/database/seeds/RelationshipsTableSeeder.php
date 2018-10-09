<?php

use Illuminate\Database\Seeder;

class RelationshipsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('relationships')->insert([
            'name' => "Padre"
        ]);
        
        DB::table('relationships')->insert([
            'name' => "Madre"
        ]);
        
        DB::table('relationships')->insert([
            'name' => "Abuelo"
        ]);
        
        DB::table('relationships')->insert([
            'name' => "Abuela"
        ]);
        
        DB::table('relationships')->insert([
            'name' => "Tia"
        ]);
        
        DB::table('relationships')->insert([
            'name' => "Tio"
        ]);
        
        DB::table('relationships')->insert([
            'name' => "Hermano"
        ]);
        
        DB::table('relationships')->insert([
            'name' => "Hermana"
        ]);
        
        DB::table('relationships')->insert([
            'name' => "Primo"
        ]);
        
        DB::table('relationships')->insert([
            'name' => "Prima"
        ]);
        
        DB::table('relationships')->insert([
            'name' => "Cuñada"
        ]);
        
        DB::table('relationships')->insert([
            'name' => "Cuñado"
        ]);
        
        DB::table('relationships')->insert([
            'name' => "Sin Parentesco"
        ]);
        
        DB::table('relationships')->insert([
            'name' => "Tutor"
        ]);
    }
}

