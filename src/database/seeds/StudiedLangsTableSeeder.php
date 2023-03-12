<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudiedLangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('studied_langs')->insert([
            ['study_record_id' => 80, 'lang_id' => 3],
            ['study_record_id' => 81, 'lang_id' => 5],
            ['study_record_id' => 82, 'lang_id' => 2],
            ['study_record_id' => 82, 'lang_id' => 3],
            ['study_record_id' => 82, 'lang_id' => 1],
            ['study_record_id' => 83, 'lang_id' => 4],
            ['study_record_id' => 84, 'lang_id' => 8],
            ['study_record_id' => 84, 'lang_id' => 2],
            ['study_record_id' => 85, 'lang_id' => 1],
            ['study_record_id' => 86, 'lang_id' => 3],
            ['study_record_id' => 87, 'lang_id' => 7],
            ['study_record_id' => 87, 'lang_id' => 4],
            ['study_record_id' => 88, 'lang_id' => 6],
            ['study_record_id' => 89, 'lang_id' => 6],
            ['study_record_id' => 89, 'lang_id' => 1],
            ['study_record_id' => 89, 'lang_id' => 6],
            ['study_record_id' => 90, 'lang_id' => 2],
            ['study_record_id' => 91, 'lang_id' => 5],
            ['study_record_id' => 92, 'lang_id' => 3],
            ['study_record_id' => 93, 'lang_id' => 3],
            ['study_record_id' => 94, 'lang_id' => 4],
            ['study_record_id' => 95, 'lang_id' => 7],
            ['study_record_id' => 96, 'lang_id' => 3],
            ['study_record_id' => 97, 'lang_id' => 2],
            ['study_record_id' => 98, 'lang_id' => 6],
            ['study_record_id' => 99, 'lang_id' => 4],
            ['study_record_id' => 100, 'lang_id' => 3],
            ['study_record_id' => 101, 'lang_id' => 2],
            ['study_record_id' => 102, 'lang_id' => 5],
            ['study_record_id' => 103, 'lang_id' => 5],
            ['study_record_id' => 104, 'lang_id' => 1],
            ['study_record_id' => 105, 'lang_id' => 3],
            ['study_record_id' => 106, 'lang_id' => 8],
            ['study_record_id' => 107, 'lang_id' => 3],
            ['study_record_id' => 108, 'lang_id' => 3],
            ['study_record_id' => 109, 'lang_id' => 1],
            ['study_record_id' => 110, 'lang_id' => 2],
        ]);
    }
}
