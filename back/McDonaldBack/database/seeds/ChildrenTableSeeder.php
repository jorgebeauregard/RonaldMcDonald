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
         /*
            string('names', 128);
            string('flast_name', 128);
            string('mlast_name', 128);
            date('birthday');
            enum('sex', ['Masculino', 'Femenino']);
            unsignedInteger('scholarship_id');
            string('address_street', 128);
            string('address_number', 128);
            string('neighborhood', 128);
            string('locality', 128);
            string('municipality', 128);
            string('zip_code', 8);
            unsignedInteger('state_id');
            string('phone_1', 16);
            string('phone_2', 16);
            enum('social', ['1','2','3','4','5','6']);
            enum('zone_type', ['Rural', 'Sub-urbana', 'Urbana']);
            enum('min_wage', ['<1', '1 a 2', '>2']);
            timestamps();
            */
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
            'state_id' => 31, //veracruz
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
            'birthday' => Carbon::parse('1995-12-29'),
            'sex' => "Masculino",
            'scholarship_id' => 2,
            'address_street' => str_random(10),
            'address_number' => str_random(4),
            'neighborhood' => str_random(10),
            'locality' => str_random(10),
            'municipality' => str_random(10),
            'zip_code' => str_random(7),
            'state_id' => 31, //veracruz
            'phone_1' => "222-123-1212",
            'phone_2' => "999-122-1235",
            'social' => "3",
            'zone_type' => "Sub-urbana",
            'min_wage' => "1 a 2"
        ]);

        //str_random(10).'@outlook.com'
    }
}
