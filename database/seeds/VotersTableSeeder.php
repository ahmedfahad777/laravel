<?php

use Illuminate\Database\Seeder;

class VotersTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('voters')->delete();

        $voters = array(
            ['id' => 1, 'voterName' => 'Fahad', 'voterId' => 'shajed1234567', 'vote' => false, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'voterName' => 'Jalil', 'voterId' => 'arshad1234567', 'vote' => false, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'voterName' => 'Jitu', 'voterId' => 'shahid1234567', 'vote' => false, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        // Uncomment the below to run the seeder
        DB::table('voters')->insert($voters);
    }

}