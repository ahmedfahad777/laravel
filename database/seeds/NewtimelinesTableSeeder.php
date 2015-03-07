<?php

use Illuminate\Database\Seeder;

class NewtimelinesTableSeeder extends Seeder {

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('newtimelines')->delete();

        $newtimelines = array(
            ['id' => 1, 'title' => 'Post 1', 'body' => 'project-1', 'created_at' => new DateTime, 'updated_at' => new DateTime, 'published_at' => new DateTime],
            ['id' => 2, 'title' => 'Post 2', 'body' => 'project-2', 'created_at' => new DateTime, 'updated_at' => new DateTime, 'published_at' => new DateTime],
            ['id' => 3, 'title' => 'Post 3', 'body' => 'project-3', 'created_at' => new DateTime, 'updated_at' => new DateTime, 'published_at' => new DateTime],
        );

        // Uncomment the below to run the seeder
        DB::table('newtimelines')->insert($newtimelines);
    }

}
