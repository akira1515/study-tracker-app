<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('langs')->insert([
            ['name' => 'JavaScript'],
            ['name' => 'CSS'],
            ['name' => 'PHP'],
            ['name' => 'HTML'],
            ['name' => 'Laravel'],
            ['name' => 'SQL'],
            ['name' => 'SHELL'],
            ['name' => '情報システム基礎知識(その他)'],
        ]);
    }
}
