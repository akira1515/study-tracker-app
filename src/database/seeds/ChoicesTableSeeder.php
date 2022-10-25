<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('choices')->insert([
            ['name' => 'たかなわ', 'question_id' => 1, 'valid' => 1],
            ['name' => 'たかわ', 'question_id' => 1, 'valid' => 0],
            ['name' => 'こうわ', 'question_id' => 1, 'valid' => 0],
            ['name' => 'かめいど', 'question_id' => 2, 'valid' => 1],
            ['name' => 'かめど', 'question_id' => 2, 'valid' => 0],
            ['name' => 'かめと', 'question_id' => 2, 'valid' => 0],
            ['name' => 'むかいなだ', 'question_id' => 3, 'valid' => 1],
            ['name' => 'むこうひら', 'question_id' => 3, 'valid' => 0],
            ['name' => 'むきひら', 'question_id' => 3, 'valid' => 0]
        ]);
    }
}
