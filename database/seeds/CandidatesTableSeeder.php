<?php

use Illuminate\Database\Seeder;

class CandidatesTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('candidates')->delete();

        $candidates = array(
            ['id' => 1, 'candidateName' => 'Ahmed Fahad', 'symbol' => 'Laptop', 'cast' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'candidateName' => 'Aslam', 'symbol' => 'Mirror', 'cast' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'candidateName' => 'Rashid', 'symbol' => 'Candle', 'cast' => 0, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );

        // Uncomment the below to run the seeder
        DB::table('candidates')->insert($candidates);
    }

}