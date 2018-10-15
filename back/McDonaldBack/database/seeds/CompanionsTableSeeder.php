<?php

use Illuminate\Database\Seeder;

class CompanionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companions')->insert([
            'names' => "Fernanda",
            'flast_name' => "Montaño",
            'mlast_name' => "Ríos",
            'age' => 21,
            'sex' => 'Femenino',
            'scholarship_id' => 6,
            'identification' => "A01231231",
            'health_status' => 'Sano',
            'working' => false,
            'occupation_id' => 1,
            'paid_leave' => false,
            'healthcare' => false,
            'economic_dependencies' => 2,
            'home_owner' => false,
            'rent' => 2.00,
            'financial_aid' => false,
            'monthly_income' => 3.00,
            'remarks' => "Lorem ipsum bla bla bla",
        ]);

        DB::table('companions')->insert([
            'names' => "Alejandro",
            'flast_name' => "Gomez",
            'mlast_name' => "Mont",
            'age' => 43,
            'sex' => 'Masculino',
            'scholarship_id' => 1,
            'identification' => "A0121212",
            'health_status' => 'Enfermo',
            'working' => true,
            'occupation_id' => 3,
            'paid_leave' => true,
            'healthcare' => true,
            'economic_dependencies' => 5,
            'home_owner' => true,
            'rent' => 2000.00,
            'financial_aid' => true,
            'monthly_income' => 1.00,
            'remarks' => "Muchos muchos seeds",
        ]);
    }
}

