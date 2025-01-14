<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudyRecordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('study_records')->insert([
            ['date' => '2022-10-01', 'hour' => 8, 'user_id' => 1],
            ['date' => '2022-10-02', 'hour' => 6, 'user_id' => 1],
            ['date' => '2022-10-03', 'hour' => 1, 'user_id' => 1],
            ['date' => '2022-10-04', 'hour' => 3, 'user_id' => 1],
            ['date' => '2022-10-05', 'hour' => 1, 'user_id' => 1],
            ['date' => '2022-10-06', 'hour' => 2, 'user_id' => 1],
            ['date' => '2022-10-07', 'hour' => 4, 'user_id' => 1],
            ['date' => '2022-10-08', 'hour' => 3, 'user_id' => 1],
            ['date' => '2022-10-09', 'hour' => 6, 'user_id' => 1],
            ['date' => '2022-10-10', 'hour' => 8, 'user_id' => 1],
            ['date' => '2022-10-11', 'hour' => 6, 'user_id' => 1],
            ['date' => '2022-10-12', 'hour' => 5, 'user_id' => 1],
            ['date' => '2022-10-13', 'hour' => 1, 'user_id' => 1],
            ['date' => '2022-10-14', 'hour' => 2, 'user_id' => 1],
            ['date' => '2022-10-16', 'hour' => 1, 'user_id' => 1],
            ['date' => '2022-10-17', 'hour' => 4, 'user_id' => 1],
            ['date' => '2022-10-18', 'hour' => 3, 'user_id' => 1],
            ['date' => '2022-10-19', 'hour' => 2, 'user_id' => 1],
            ['date' => '2022-10-20', 'hour' => 1, 'user_id' => 1],
            ['date' => '2022-10-21', 'hour' => 2, 'user_id' => 1],
            ['date' => '2022-10-22', 'hour' => 3, 'user_id' => 1],
            ['date' => '2022-10-23', 'hour' => 6, 'user_id' => 1],
            ['date' => '2022-10-24', 'hour' => 4, 'user_id' => 1],
            ['date' => '2022-10-25', 'hour' => 3, 'user_id' => 1],
            ['date' => '2022-10-26', 'hour' => 1, 'user_id' => 1],
            ['date' => '2022-10-28', 'hour' => 6, 'user_id' => 1],
            ['date' => '2022-10-29', 'hour' => 3, 'user_id' => 1],
            ['date' => '2022-10-30', 'hour' => 4, 'user_id' => 1],
            ['date' => '2022-10-31', 'hour' => 5, 'user_id' => 1],
            ['date' => '2023-02-01', 'hour' => 8, 'user_id' => 1],
            ['date' => '2023-03-02', 'hour' => 6, 'user_id' => 1],
            ['date' => '2023-03-03', 'hour' => 1, 'user_id' => 1],
            ['date' => '2023-03-04', 'hour' => 3, 'user_id' => 1],
            ['date' => '2023-03-05', 'hour' => 1, 'user_id' => 1],
            ['date' => '2023-03-06', 'hour' => 2, 'user_id' => 1],
            ['date' => '2023-03-07', 'hour' => 4, 'user_id' => 1],
            ['date' => '2023-03-08', 'hour' => 3, 'user_id' => 1],
            ['date' => '2023-03-09', 'hour' => 9, 'user_id' => 1],
            ['date' => '2023-03-10', 'hour' => 4, 'user_id' => 1],
            ['date' => '2023-03-11', 'hour' => 7, 'user_id' => 1],
            ['date' => '2023-03-12', 'hour' => 4, 'user_id' => 1],
            ['date' => '2023-03-13', 'hour' => 4, 'user_id' => 1],
            ['date' => '2023-03-14', 'hour' => 4, 'user_id' => 1],
            ['date' => '2023-03-16', 'hour' => 4, 'user_id' => 1],
            ['date' => '2023-03-17', 'hour' => 0, 'user_id' => 1],
            ['date' => '2023-03-18', 'hour' => 1, 'user_id' => 1],
            ['date' => '2023-03-19', 'hour' => 2, 'user_id' => 1],
            ['date' => '2023-03-20', 'hour' => 1, 'user_id' => 1],
            ['date' => '2023-03-21', 'hour' => 2, 'user_id' => 1],
            ['date' => '2023-03-22', 'hour' => 3, 'user_id' => 1],
            ['date' => '2023-03-23', 'hour' => 6, 'user_id' => 1],
            ['date' => '2023-03-24', 'hour' => 4, 'user_id' => 1],
            ['date' => '2023-03-25', 'hour' => 3, 'user_id' => 1],
            ['date' => '2023-03-26', 'hour' => 1, 'user_id' => 1],
            ['date' => '2023-03-28', 'hour' => 6, 'user_id' => 1],
            // ['date' => '2023-02-29', 'hour' => 3],
            // ['date' => '2023-02-30', 'hour' => 4],
        ]);
    }
}
