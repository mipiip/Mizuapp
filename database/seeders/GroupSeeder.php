<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('groups')->truncate();

        DB::table('groups')->insert([
            [
                'name' => '第一群規則動詞 er動詞',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => '第二群規則動詞　ir動詞',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => '第三群動詞　ir動詞',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => '第三群動詞　re動詞',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => '第三群動詞　oir動詞',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            
            
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1');//
    }
}
