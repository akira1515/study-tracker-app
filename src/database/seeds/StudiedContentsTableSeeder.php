<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudiedContentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('studied_contents')->insert([
            ['study_record_id' => 80, 'content_id' => 3],
            ['study_record_id' => 81, 'content_id' => 1],
            ['study_record_id' => 82, 'content_id' => 1],
            ['study_record_id' => 82, 'content_id' => 2],
            ['study_record_id' => 82, 'content_id' => 3],
            ['study_record_id' => 83, 'content_id' => 1],
            ['study_record_id' => 84, 'content_id' => 2],
            ['study_record_id' => 85, 'content_id' => 2],
            ['study_record_id' => 86, 'content_id' => 1],
            ['study_record_id' => 87, 'content_id' => 2],
            ['study_record_id' => 88, 'content_id' => 1],
            ['study_record_id' => 89, 'content_id' => 1],
            ['study_record_id' => 90, 'content_id' => 3],
            ['study_record_id' => 91, 'content_id' => 1],
            ['study_record_id' => 92, 'content_id' => 2],
            ['study_record_id' => 93, 'content_id' => 3],
            ['study_record_id' => 94, 'content_id' => 3],
            ['study_record_id' => 95, 'content_id' => 1],
            ['study_record_id' => 96, 'content_id' => 3],
            ['study_record_id' => 97, 'content_id' => 2],
            ['study_record_id' => 98, 'content_id' => 2],
            ['study_record_id' => 99, 'content_id' => 3],
            ['study_record_id' => 100, 'content_id' => 2],
            ['study_record_id' => 101, 'content_id' => 1],
            ['study_record_id' => 102, 'content_id' => 3],
            ['study_record_id' => 103, 'content_id' => 1],
            ['study_record_id' => 104, 'content_id' => 1],
            ['study_record_id' => 105, 'content_id' => 3],
            ['study_record_id' => 106, 'content_id' => 2],
            ['study_record_id' => 107, 'content_id' => 2],
            ['study_record_id' => 108, 'content_id' => 3],
            ['study_record_id' => 108, 'content_id' => 2],
            ['study_record_id' => 109, 'content_id' => 1],
        ]);
    }
}
