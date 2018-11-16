<?php

use Illuminate\Database\Seeder;

class DoctorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doctors')->insert([
            'names'=> "Gari",
            'flast_name'=> "Kaspárov",
            'mlast_name'=> "",
        ]);

        DB::table('doctors')->insert([
            'names'=> "Luis",
            'flast_name'=> "García",
            'mlast_name'=> "",
        
        DB::table('doctors')->insert([
            'names'=> "Kevin",
            'flast_name'=> "Sanchez",
            'mlast_name'=> "Perez",
        ]);
    }
}
