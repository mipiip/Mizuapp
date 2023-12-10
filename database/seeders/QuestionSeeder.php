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
                // 'updated_at' => Carbon::now(),
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
                //'updated_at' => Carbon::now(),
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
                //'updated_at' => Carbon::now(),
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
                //'updated_at' => Carbon::now(),
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
                //'updated_at' => Carbon::now(),
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
                //'updated_at' => Carbon::now(),
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
                //'updated_at' => Carbon::now(),
            ],[
                'question' => 'appelerの現在形',
                'je' => 'appelle',
                'tu' => 'appelles',
                'il/elle' => 'appelle',
                'nous' => 'appelons',
                'vous' => 'appelez',
                'ils/elles' => 'appellent',
                'group_id'=> 1,
                'created_at' => Carbon::now(),
                //'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'appelerの半過去形',
                'je' => 'appelais',
                'tu' => 'appelais',
                'il/elle' => 'appelait',
                'nous' => 'appelions',
                'vous' => 'appeliez',
                'ils/elles' => 'appelaient',
                'group_id'=> 1,
                'created_at' => Carbon::now(),
                //'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'appelerの複合過去形',
                'je' => 'ai appelé',
                'tu' => 'as appelé',
                'il/elle' => 'a appelé',
                'nous' => 'avons appelé',
                'vous' => 'avez appelé',
                'ils/elles' => 'ont appelé',
                'group_id'=> 1,
                'created_at' => Carbon::now(),
                //'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'appelerの大過去形',
                'je' => 'avais appelé',
                'tu' => 'avais appelé',
                'il/elle' => 'avait appelé',
                'nous' => 'avions appelé',
                'vous' => 'aviez appelé',
                'ils/elles' => 'avaient appelé',
                'group_id'=> 1,
                'created_at' => Carbon::now(),
                //'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'appelerの単純未来形',
                'je' => 'appellerai',
                'tu' => 'appelleras',
                'il/elle' => 'appellera',
                'nous' => 'appellerons',
                'vous' => 'appellerez',
                'ils/elles' => 'appelleront',
                'group_id'=> 1,
                'created_at' => Carbon::now(),
                //'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'appelerの条件法現在形',
                'je' => 'appellerais',
                'tu' => 'appellerais',
                'il/elle' => 'appellerait',
                'nous' => 'appellerions',
                'vous' => 'appelleriez',
                'ils/elles' => 'appelleraient',
                'group_id'=> 1,
                'created_at' => Carbon::now(),
                //'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'appelerの接続法現在形',
                'je' => 'appelle',
                'tu' => 'appelles',
                'il/elle' => 'appelle',
                'nous' => 'appelions',
                'vous' => 'appeliez',
                'ils/elles' => 'appellent',
                'group_id'=> 1,
                'created_at' => Carbon::now(),
                //'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'allerの現在形',
                'je' => 'vais',
                'tu' => 'vas',
                'il/elle' => 'va',
                'nous' => 'allons',
                'vous' => 'allez',
                'ils/elles' => 'vont',
                'group_id'=> 1,
                'created_at' => Carbon::now(),
                //'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'allerの半過去形',
                'je' => 'allais',
                'tu' => 'allais',
                'il/elle' => 'allait',
                'nous' => 'allions',
                'vous' => 'alliez',
                'ils/elles' => 'allaient',
                'group_id'=> 1,
                'created_at' => Carbon::now(),
                //'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'allerの複合過去形',
                'je' => 'suis allé',
                'tu' => 'es allé',
                'il/elle' => 'est allé',
                'nous' => 'sommes allés',
                'vous' => 'êtes allés',
                'ils/elles' => 'sont allés',
                'group_id'=> 1,
                'created_at' => Carbon::now(),
                //'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'allerの大過去形',
                'je' => 'étais allé',
                'tu' => 'étais allé',
                'il/elle' => 'était allé',
                'nous' => 'étions allés',
                'vous' => 'étiez allés',
                'ils/elles' =>'était allés', 
                'group_id'=> 1,
                'created_at' => Carbon::now(),
                //'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'allerの単純未来形',
                'je' => 'aimerai',
                'tu' => 'aimeras',
                'il/elle' => 'aimera',
                'nous' => 'aimerons',
                'vous' => 'aimerez',
                'ils/elles' => 'aimeront',
                'group_id'=> 1,
                'created_at' => Carbon::now(),
               //'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'allerの条件法現在形',
                'je' => 'aimerais',
                'tu' => 'aimerais',
                'il/elle' => 'aimerait',
                'nous' => 'aimerions',
                'vous' => 'aimeriez',
                'ils/elles' => 'aimeraient',
                'group_id'=> 1,
                'created_at' => Carbon::now(),
                //'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'allerの接続法現在形',
                'je' => 'aime',
                'tu' => 'aimes',
                'il/elle' => 'aime',
                'nous' => 'aimions',
                'vous' => 'aimiez',
                'ils/elles' => 'aiment',
                'group_id'=> 1,
                'created_at' => Carbon::now(),
                //'updated_at' => Carbon::now(),
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
                //'updated_at' => Carbon::now(),
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
                //'updated_at' => Carbon::now(),
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
                //'updated_at' => Carbon::now(),
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
                //'updated_at' => Carbon::now(),
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
                //'updated_at' => Carbon::now(),
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
                //'updated_at' => Carbon::now(),
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
                //'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'avoirの現在形',
                'je' => 'ai',
                'tu' => 'as',
                'il/elle' => 'a',
                'nous' => 'avons',
                'vous' => 'avez',
                'ils/elles' => 'ont',
                'group_id'=> 5,
                'created_at' => Carbon::now(),
                //'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'avoirの半過去形',
                'je' => 'avais',
                'tu' => 'avais',
                'il/elle' => 'avait',
                'nous' => 'avions',
                'vous' => 'aviez',
                'ils/elles' => 'avaient',
                'group_id'=> 5,
                'created_at' => Carbon::now(),
                //'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'avoirの複合過去形',
                'je' => 'ai eu',
                'tu' => 'as eu',
                'il/elle' => 'a eu',
                'nous' => 'avons eu',
                'vous' => 'avez eu',
                'ils/elles' => 'ont eu',
                'group_id'=> 5,
                'created_at' => Carbon::now(),
                //'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'avoirの大過去形',
                'je' => 'avais eu',
                'tu' => 'avais eu',
                'il/elle' => 'avait eu',
                'nous' => 'avions eu',
                'vous' => 'aviez eu',
                'ils/elles' => 'avaient eu',
                'group_id'=> 5,
                'created_at' => Carbon::now(),
               //'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'avoirの単純未来形',
                'je' => 'aurai',
                'tu' => 'auras',
                'il/elle' => 'aura',
                'nous' => 'aurons',
                'vous' => 'aurez',
                'ils/elles' => 'auront',
                'group_id'=> 5,
                'created_at' => Carbon::now(),
                //'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'avoirの条件法現在形',
                'je' => 'aurais',
                'tu' => 'aurais',
                'il/elle' => 'aurait',
                'nous' => 'aurions',
                'vous' => 'auriez',
                'ils/elles' => 'auraient',
                'group_id'=> 5,
                'created_at' => Carbon::now(),
                //'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'avoirの接続法現在形',
                'je' => 'aie',
                'tu' => 'aies',
                'il/elle' => 'ait',
                'nous' => 'ayons',
                'vous' => 'ayez',
                'ils/elles' => 'aient',
                'group_id'=> 5,
                'created_at' => Carbon::now(),
                //'updated_at' => Carbon::now(),
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
                //'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'prendreの現在形',
                'je' => 'prends',
                'tu' => 'prends',
                'il/elle' => 'prend',
                'nous' => 'prenons',
                'vous' => 'prenez',
                'ils/elles' => 'prennent',
                'group_id'=> 3,
                'created_at' => Carbon::now(),
                //'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'prendreの大過去形',
                'je' => 'avais pris',
                'tu' => 'avais pris',
                'il/elle' => 'avait pris',
                'nous' => 'avions pris',
                'vous' => 'aviez pris',
                'ils/elles' => 'avaient pris',
                'group_id'=> 3,
                'created_at' => Carbon::now(),
                //'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'mangerの現在形',
                'je' => 'mange',
                'tu' => 'manges',
                'il/elle' => 'mange',
                'nous' => 'mangeons',
                'vous' => 'mangez',
                'ils/elles' => 'mangent',
                'group_id'=> 1,
                'created_at' => Carbon::now(),
                //'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'mangerの半過去形',
                'je' => 'mangeais',
                'tu' => 'mangeais',
                'il/elle' => 'mangeait',
                'nous' => 'mangions',
                'vous' => 'mangiez',
                'ils/elles' => 'mangeaient',
                'group_id'=> 1,
                'created_at' => Carbon::now(),
                //'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'mangerの複合過去形',
                'je' => 'ai mangé',
                'tu' => 'as mangé',
                'il/elle' => 'a mangé',
                'nous' => 'avons mangé',
                'vous' => 'avez mangé',
                'ils/elles' => 'ont mangé',
                'group_id'=> 1,
                'created_at' => Carbon::now(),
                //updated_at' => Carbon::now(),
            ],
            [
                'question' => 'mangerの大過去形',
                'je' => 'avais mangé',
                'tu' => 'avais mangé',
                'il/elle' => 'avait mangé',
                'nous' => 'avions mangé',
                'vous' => 'aviez mangé',
                'ils/elles' => 'avaient mangé',
                'group_id'=> 1,
                'created_at' => Carbon::now(),
                //'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'mangerの単純未来形',
                'je' => 'mangerai',
                'tu' => 'mangeras',
                'il/elle' => 'mangera',
                'nous' => 'mangerons',
                'vous' => 'mangerez',
                'ils/elles' => 'mangeront',
                'group_id'=> 1,
                'created_at' => Carbon::now(),
                //'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'mangerの条件法現在形',
                'je' => 'mangerais',
                'tu' => 'mangerais',
                'il/elle' => 'mangerait',
                'nous' => 'mangerions',
                'vous' => 'mangeriez',
                'ils/elles' => 'mangeraient',
                'group_id'=> 1,
                'created_at' => Carbon::now(),
                //'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'mangerの接続法現在形',
                'je' => 'mange',
                'tu' => 'manges',
                'il/elle' => 'mange',
                'nous' => 'mangions',
                'vous' => 'mangiez',
                'ils/elles' => 'mangent',
                'group_id'=> 1,
                'created_at' => Carbon::now(),
                //'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'connaîtreの現在形',
                'je' => 'connais',
                'tu' => 'connais',
                'il/elle' => 'connaît',
                'nous' => 'connaissons',
                'vous' => 'connaissezs',
                'ils/elles' => 'connaissent',
                'group_id'=> 4,
                'created_at' => Carbon::now(),
                //'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'connaîtreの半過去形',
                'je' => 'connaissais',
                'tu' => 'connaissais',
                'il/elle' => 'connaissait',
                'nous' => 'connaissions',
                'vous' => 'connaissiez',
                'ils/elles' => 'connaissaient',
                'group_id'=> 4,
                'created_at' => Carbon::now(),
                //'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'connaîtreの複合過去形',
                'je' => 'ai connu',
                'tu' => 'as connu',
                'il/elle' => 'a connu',
                'nous' => 'avons connu',
                'vous' => 'avez connu',
                'ils/elles' => 'ont connu',
                'group_id'=> 4,
                'created_at' => Carbon::now(),
                //'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'connaîtreの大過去形',
                'je' => 'avais connu',
                'tu' => 'avais connu',
                'il/elle' => 'avait connu',
                'nous' => 'avions connu',
                'vous' => 'aviez connu',
                'ils/elles' => 'avaient connu',
                'group_id'=> 4,
                'created_at' => Carbon::now(),
                //'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'connaîtreの単純未来形',
                'je' => 'connaîtrai',
                'tu' => 'connaîtras',
                'il/elle' => 'connaîtra',
                'nous' => 'connaîtrons',
                'vous' => 'connaîtrez',
                'ils/elles' => 'connaîtront',
                'group_id'=> 4,
                'created_at' => Carbon::now(),
                //'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'connaîtreの条件法現在形',
                'je' => 'connaîtrais',
                'tu' => 'connaîtrais',
                'il/elle' => 'connaîtrait',
                'nous' => 'connaîtrions',
                'vous' => 'connaîtriez',
                'ils/elles' => 'connaîtraient',
                'group_id'=> 4,
                'created_at' => Carbon::now(),
                //'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'connaîtreの接続法現在形',
                'je' => 'connaisse',
                'tu' => 'connaisses',
                'il/elle' => 'connaisse',
                'nous' => 'connaissions',
                'vous' => 'connaissiez',
                'ils/elles' => 'connaissent',
                'group_id'=> 4,
                'created_at' => Carbon::now(),
                //'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'tenirの現在形',
                'je' => 'tiens',
                'tu' => 'tiens',
                'il/elle' => 'tient',
                'nous' => 'tenons',
                'vous' => 'tenez',
                'ils/elles' => 'tiennent',
                'group_id'=> 3,
                'created_at' => Carbon::now(),
                //'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'tenirの半過去形',
                'je' => 'tenais',
                'tu' => 'tenais',
                'il/elle' => 'tenait',
                'nous' => 'tenions',
                'vous' => 'teniez',
                'ils/elles' => 'tenaient',
                'group_id'=> 3,
                'created_at' => Carbon::now(),
                //'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'tenirの複合過去形',
                'je' => 'ai tenu',
                'tu' => 'as tenu',
                'il/elle' => 'a tenu',
                'nous' => 'avons tenu',
                'vous' => 'avez tenu',
                'ils/elles' => 'ont tenu',
                'group_id'=> 3,
                'created_at' => Carbon::now(),
                //'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'tenirの大過去形',
                'je' => 'avais tenu',
                'tu' => 'avais tenu',
                'il/elle' => 'avait tenu',
                'nous' => 'avions tenu',
                'vous' => 'aviez tenu',
                'ils/elles' => 'avaient tenu',
                'group_id'=> 3,
                'created_at' => Carbon::now(),
                //'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'tenirの単純未来形',
                'je' => 'tiendrai',
                'tu' => 'tiendras',
                'il/elle' => 'tiendra',
                'nous' => 'tiendrons',
                'vous' => 'tiendrez',
                'ils/elles' => 'tiendront',
                'group_id'=> 3,
                'created_at' => Carbon::now(),
                //'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'tenirの条件法現在形',
                'je' => 'tiendrais',
                'tu' => 'tiendrais',
                'il/elle' => 'tiendrait',
                'nous' => 'tiendrions',
                'vous' => 'tiendriez',
                'ils/elles' => 'tiendraient',
                'group_id'=> 3,
                'created_at' => Carbon::now(),
                //'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'tenirの接続法現在形',
                'je' => 'tienne',
                'tu' => 'tiennes',
                'il/elle' => 'tienne',
                'nous' => 'tenions',
                'vous' => 'teniez',
                'ils/elles' => 'tiennent',
                'group_id'=> 3,
                'created_at' => Carbon::now(),
                //'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'finirの現在形',
                'je' => 'finis',
                'tu' => 'finis',
                'il/elle' => 'finit',
                'nous' => 'finissons',
                'vous' => 'finissez',
                'ils/elles' => 'finissent',
                'group_id'=> 2,
                'created_at' => Carbon::now(),
                //updated_at' => Carbon::now(),
            ],
            [
                'question' => 'finirの半過去形',
                'je' => 'finissais',
                'tu' => 'finissais',
                'il/elle' => 'finissait',
                'nous' => 'finissions',
                'vous' => 'finissiez',
                'ils/elles' => 'finissaient',
                'group_id'=> 2,
                'created_at' => Carbon::now(),
                //'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'finirの複合過去形',
                'je' => 'ai fini',
                'tu' => 'as fini',
                'il/elle' => 'a fini',
                'nous' => 'avons fini',
                'vous' => 'avez fini',
                'ils/elles' => 'ont fini', 
                'group_id'=> 2,
                'created_at' => Carbon::now(),
                //'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'finirの大過去形',
                'je' => 'avais fini',
                'tu' => 'avais fini',
                'il/elle' => 'avait fini',
                'nous' => 'avions fini',
                'vous' => 'aviez fini',
                'ils/elles' => 'avaient fini',
                'group_id'=> 2,
                'created_at' => Carbon::now(),
                //'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'finirの単純未来形',
                'je' => 'finirai',
                'tu' => 'finiras',
                'il/elle' => 'finira',
                'nous' => 'finirons',
                'vous' => 'finirez',
                'ils/elles' => 'finiront',
                'group_id'=> 2,
                'created_at' => Carbon::now(),
                //'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'finirの条件法現在形',
                'je' => 'finirais',
                'tu' => 'finirais',
                'il/elle' => 'finirait',
                'nous' => 'finirions',
                'vous' => 'finiriez',
                'ils/elles' => 'finiraient',
                'group_id'=> 2,
                'created_at' => Carbon::now(),
                //'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'finirの接続法現在形',
                'je' => 'finisse',
                'tu' => 'finisses',
                'il/elle' => 'finisse',
                'nous' => 'finissions',
                'vous' => 'finissiez',
                'ils/elles' => 'finissent',
                'group_id'=> 2,
                'created_at' => Carbon::now(),
                //'updated_at' => Carbon::now(),
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
                //'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'prendreの半過去形',
                'je' => 'prenais',
                'tu' => 'prenais',
                'il/elle' => 'prenait',
                'nous' => 'prenions',
                'vous' => 'preniez',
                'ils/elles' => 'prenaient',
                'group_id'=> 4,
                'created_at' => Carbon::now(),
                //'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'prendreの複合過去形',
                'je' => 'ai pris',
                'tu' => 'as pris',
                'il/elle' => 'a pris',
                'nous' => 'avons pris',
                'vous' => 'avez pris',
                'ils/elles' => 'ont pris',
                'group_id'=> 4,
                'created_at' => Carbon::now(),
                //'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'prendreの大過去形',
                'je' => 'avais pris',
                'tu' => 'avais pris',
                'il/elle' => 'avait pris',
                'nous' => 'avions pris',
                'vous' => 'aviez pris',
                'ils/elles' => 'avaient pris',
                'group_id'=> 4,
                'created_at' => Carbon::now(),
                //'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'prendreの単純未来形',
                'je' => 'prendrai',
                'tu' => 'prendras',
                'il/elle' => 'prendra',
                'nous' => 'prendrons',
                'vous' => 'prendrez',
                'ils/elles' => 'prendront',
                'group_id'=> 4,
                'created_at' => Carbon::now(),
                //'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'prendreの条件法現在形',
                'je' => 'prendrais',
                'tu' => 'prendrais',
                'il/elle' => 'prendrait',
                'nous' => 'prendrions',
                'vous' => 'prendriez',
                'ils/elles' => 'prendraient',
                'group_id'=> 4,
                'created_at' => Carbon::now(),
                //'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'prendreの接続法現在形',
                'je' => 'prenne',
                'tu' => 'prennes',
                'il/elle' => 'prenne',
                'nous' => 'prenions',
                'vous' => 'preniez',
                'ils/elles' => 'prennent',
                'group_id'=> 4,
                'created_at' => Carbon::now(),
               // 'updated_at' => Carbon::now(),
            ]
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
