<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon; //Some weird date formatter


class ChildrenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('children')->insert([
            'names' => "Jorge Alberto",
            'flast_name' => "Beauregard",
            'mlast_name' => "Bravo",
            'birthday' => Carbon::parse('1995-05-12'),
            'sex' => "Masculino",
            'scholarship_id' => 6,
            'address_street' => "Calle de Bure",
            'address_number' => "14",
            'neighborhood' => "Los Cedros",
            'locality' => "Veracruz",
            'municipality' => "El Puerto",
            'zip_code' => "124121",
            'state_id' => 7, //veracruz
            'phone_1' => "222-123-1212",
            'phone_2' => "999-122-1235",
            'social' => "1",
            'zone_type' => "Urbana",
            'min_wage' => "<1"
        ]);

        DB::table('children')->insert([
            'names' => "Enrique",
            'flast_name' => "Lozada",
            'mlast_name' => "Vega",
            'birthday' => Carbon::parse('1995-12-30'),
            'sex' => "Masculino",
            'scholarship_id' => 2,
            'address_street' => str_random(10),
            'address_number' => str_random(4),
            'neighborhood' => str_random(10),
            'locality' => str_random(10),
            'municipality' => str_random(10),
            'zip_code' => str_random(7),
            'state_id' => 7, //veracruz
            'phone_1' => "222-123-1212",
            'phone_2' => "999-122-1235",
            'social' => "3",
            'zone_type' => "Sub-urbana",
            'min_wage' => "1 a 2"
        ]);

        $gender = ["Masculino","Femenino"];
        $social = ['1','2','3','4','5','6'];
        $zone = ['Rural', 'Sub-urbana', 'Urbana'];
        $wage = ['<1', '1 a 2', '>2'];
        for ($i = 0; $i <= 40; $i++) {
            DB::table('children')->insert([
                'names' => "child#number".$i.str_random(10),
                'flast_name' => str_random(10),
                'mlast_name' => str_random(10),
                'birthday' => Carbon::parse('1995-12-30'),
                'sex' => $gender[rand(0,1)],
                'scholarship_id' => rand(1,9),
                'address_street' => str_random(10),
                'address_number' => str_random(4),
                'neighborhood' => str_random(10),
                'locality' => str_random(10),
                'municipality' => str_random(10),
                'zip_code' => str_random(7),
                'state_id' => rand(1,33), //veracruz
                'phone_1' => str_random(3)."-".str_random(3)."-".str_random(4),
                'phone_2' => str_random(3)."-".str_random(3)."-".str_random(4),
                'social' => $social[rand(0,5)],
                'zone_type' => $zone[rand(0,2)],
                'min_wage' => $wage[rand(0,2)],
            ]);
        }

     
        //str_random(10).'@outlook.com'
    }
}
