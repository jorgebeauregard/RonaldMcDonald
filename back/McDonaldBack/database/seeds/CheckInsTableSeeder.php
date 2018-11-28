<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CheckInsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('check_ins')->insert([
            'child_id' => 1,
            'check_in_date' => Carbon::parse('2018-11-27'),
            'hospital_id' => 2,
            'child_status' => 'En casa',
            'doctor_id' => 1,
            'diagnosis_id' => 1,
            'treatment_id' => 2,
            'diet_id' => 3,
            'social_worker_id' => 5,
            're_entry' => false,
            'check_out_date' => Carbon::parse('2018-11-29'),
            'additional_children' => 2,
            'remarks' => 'Muy mal chico',
        ]);

        DB::table('check_ins')->insert([
            'child_id' => 1,
            'check_in_date' => Carbon::parse('2018-05-12'),
            'hospital_id' => 1,
            'child_status' => 'En hospital',
            'doctor_id' => 1,
            'diagnosis_id' => 1,
            'treatment_id' => 11,
            'diet_id' => 2,
            'social_worker_id' => 49,
            're_entry' => true,
            'check_out_date' => null,
            'additional_children' => 0,
            'remarks' => 'Muy buen chico',
        ]);
        //$table->enum('child_status', ['En casa', 'En hospital', 'Extra']);
        DB::table('check_ins')->insert([
            'child_id' => 2,
            'check_in_date' => Carbon::parse('2018-11-27'),
            'hospital_id' => 3,
            'child_status' => 'En casa',
            'doctor_id' => 1,
            'diagnosis_id' => 1,
            'treatment_id' => 2,
            'diet_id' => 3,
            'social_worker_id' => 5,
            're_entry' => false,
            'check_out_date' => null,
            'additional_children' => 2,
            'remarks' => 'Muy mal chico',
        ]);

        DB::table('check_ins')->insert([
            'child_id' => 3,
            'check_in_date' => Carbon::parse('2018-11-27'),
            'hospital_id' => 2,
            'child_status' => 'En casa',
            'doctor_id' => 1,
            'diagnosis_id' => 1,
            'treatment_id' => 2,
            'diet_id' => 3,
            'social_worker_id' => 5,
            're_entry' => false,
            'check_out_date' => null,
            'additional_children' => 2,
            'remarks' => 'Muy mal chico',
        ]);
    }
}