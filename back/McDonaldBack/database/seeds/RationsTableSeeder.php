<?php

use Illuminate\Database\Seeder;
use App\Ration;
class RationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //For this to work I have to import "App\Ration"
        $ration = new Ration();
        $ration->child_id = 1;
        $ration->ration_count = 3;
        $ration->save();

        $ration = new Ration();
        $ration->child_id = 2;
        $ration->ration_count = 3;
        $ration->save();

        $ration = new Ration();
        $ration->child_id = 3;
        $ration->ration_count = 3;
        $ration->save();

    
    }
}
