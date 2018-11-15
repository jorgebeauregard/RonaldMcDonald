<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);

        //Independent
        $this->call(HospitalsTableSeeder::class);
        $this->call(OccupationsTableSeeder::class);
        $this->call(RelationshipsTableSeeder::class);
        $this->call(ScholarshipsTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(DietsTableSeeder::class);
        $this->call(SocialWorkersTableSeeder::class);
        $this->call(TreatmentsTableSeeder::class);
        $this->call(DoctorsTableSeeder::class);
        $this->call(RoomsTableSeeder::class);
        $this->call(DiagnosisTableSeeder::class);

        //Dependent
        $this->call(ChildrenTableSeeder::class);
        $this->call(CheckInsTableSeeder::class);
        $this->call(CompanionsTableSeeder::class);
        $this->call(CheckInCompanionTableSeeder::class);
        $this->call(ChildCompanionTableSeeder::class);
        $this->call(CheckInRoomTableSeeder::class);
        $this->call(RationsTableSeeder::class);
        $this->call(TransportsTableSeeder::class);
    }
}
