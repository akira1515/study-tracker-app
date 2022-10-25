<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert(['big_question_id' => 1, 'question_order' => 1, 'img' => 'tokyo1.png']);
        DB::table('questions')->insert(['big_question_id' => 1, 'question_order' => 2, 'img' => 'tokyo2.png']);
        DB::table('questions')->insert(['big_question_id' => 2, 'question_order' => 1, 'img' => 'hiroshima1.png']);
    }
}
