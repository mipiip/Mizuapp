<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('questions')->truncate();

        DB::table('questions')->insert([
            [
                'question' => 'aimerの現在形',
                'je' => 'aime',
                'tu' => 'aimes',
                'il/elle' => 'aime',
                'nous' => 'aimons',
                'vous' => 'aimez',
                'ils/elles' => 'aiment',
                'group_id'=> 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'aimerの半過去形',
                'je' => 'aimais',
                'tu' => 'aimais',
                'il/elle' => 'aimait',
                'nous' => 'aimions',
                'vous' => 'aimiez',
                'ils/elles' => 'aimaient',
                'group_id'=> 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'aimerの複合過去形',
                'je' => 'ai aimé',
                'tu' => 'as aimé',
                'il/elle' => 'a aimé',
                'nous' => 'avons aimé',
                'vous' => 'avez aimé',
                'ils/elles' => 'ont aimé',
                'group_id'=> 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'aimerの大過去形',
                'je' => 'avais aimé',
                'tu' => 'avais aimé',
                'il/elle' => 'avait aimé',
                'nous' => 'avions aimé',
                'vous' => 'aviez aimé',
                'ils/elles' => 'avaient aimé',
                'group_id'=> 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'aimerの単純未来形',
                'je' => 'aimerai',
                'tu' => 'aimeras',
                'il/elle' => 'aimera',
                'nous' => 'aimerons',
                'vous' => 'aimerez',
                'ils/elles' => 'aimeront',
                'group_id'=> 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'aimerの条件法現在形',
                'je' => 'aimerais',
                'tu' => 'aimerais',
                'il/elle' => 'aimerait',
                'nous' => 'aimerions',
                'vous' => 'aimeriez',
                'ils/elles' => 'aimeraient',
                'group_id'=> 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'aimerの接続法現在形',
                'je' => 'aime',
                'tu' => 'aimes',
                'il/elle' => 'aime',
                'nous' => 'aimions',
                'vous' => 'aimiez',
                'ils/elles' => 'aiment',
                'group_id'=> 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'êtreの現在形',
                'je' => 'suis',
                'tu' => 'es',
                'il/elle' => 'est',
                'nous' => 'sommes',
                'vous' => 'êtes',
                'ils/elles' => 'sont',
                'group_id'=> 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'êtreの半過去形',
                'je' => 'étais',
                'tu' => 'étais',
                'il/elle' => 'était',
                'nous' => 'étions',
                'vous' => 'étiez',
                'ils/elles' => 'étaient',
                'group_id'=> 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'êtreの複合過去形',
                'je' => 'ai été',
                'tu' => 'as été',
                'il/elle' => 'a été',
                'nous' => 'avons été',
                'vous' => 'avez été',
                'ils/elles' => 'ont été',
                'group_id'=> 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'êtreの大過去形',
                'je' => 'avais été',
                'tu' => 'avais été',
                'il/elle' => 'avait été',
                'nous' => 'avions été',
                'vous' => 'aviez été',
                'ils/elles' => 'avaient été',
                'group_id'=> 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'êtreの単純未来形',
                'je' => 'serai',
                'tu' => 'seras',
                'il/elle' => 'sera',
                'nous' => 'serons',
                'vous' => 'serez',
                'ils/elles' => 'seront',
                'group_id'=> 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'êtreの条件法現在形',
                'je' => 'serais',
                'tu' => 'serais',
                'il/elle' => 'serait',
                'nous' => 'serions',
                'vous' => 'seriez',
                'ils/elles' => 'seraient',
                'group_id'=> 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'êtreの接続法現在形',
                'je' => 'sois',
                'tu' => 'sois',
                'il/elle' => 'soit',
                'nous' => 'soyons',
                'vous' => 'soyez',
                'ils/elles' => 'soient',
                'group_id'=> 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'finirの複合過去形',
                'je' => 'ai finis',
                'tu' => 'as finis',
                'il/elle' => 'a finis',
                'nous' => 'avons finis',
                'vous' => 'avez finis',
                'ils/elles' => 'ont finis', 
                'group_id'=> 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'prendreの接続法現在形',
                'je' => 'prenne',
                'tu' => 'prennes',
                'il/elle' => 'prenne',
                'nous' => 'prenions',
                'vous' => 'preniez',
                'ils/elles' => 'prennent',
                'group_id'=> 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'prendreの現在形',
                'je' => 'prends',
                'tu' => 'prends',
                'il/elle' => 'prend',
                'nous' => 'prenons',
                'vous' => 'prenez',
                'ils/elles' => 'prennent',
                'group_id'=> 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'prendreの大過去形',
                'je' => 'avais pris',
                'tu' => 'avais pris',
                'il/elle' => 'avait pris',
                'nous' => 'avions pris',
                'vous' => 'aviez pris',
                'ils/elles' => 'avaient pris',
                'group_id'=> 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}