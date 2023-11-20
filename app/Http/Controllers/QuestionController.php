<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Score;
use App\Models\User;

class QuestionController extends Controller
{
    public function index(Question $question) {
       //questionsテーブルからランダムに5問問題を持ってくる
       $randomQuestions = Question::inRandomOrder()->limit(3)->get();
       return view ('question')->with(['questions' => $randomQuestions]);
    }
    
    public function store(Request $request, Score $score) {
        // questionsテーブルのidが何番の問題を解いたのかというデータ。
        $question_ids =  $request->question_id; // [1, 2, 3]
        //dd($question_ids);
        // ユーザーが回答した内容のデータ
        $user_answers = $request->user_answer; // ['ans1', 'ans2', 'ans3']
        // 正解数の初期値
        $correct_count = 0;
        
        $score = new Score();
        
        // ユーザーの回答分、ループさせて、正誤判定を行う。
        // $iはループの番号。0 1 2 3...
        foreach($user_answers as $i => $answer) {
            // $question_idsを参考に、questionsテーブルから解いた問題のデータを取得する。
            // questionsテーブルのidと$question_ids[$i]の番号が一致するものを取得。
            $get_question1 = Question::where('id',$question_ids[0])->first();
            if($get_question1["je"] === $answer){
                $correct_count += 1;
            }elseif($get_question1["tu"] === $answer){
                $correct_count += 1;
            }elseif($get_question1["il/elle"] === $answer){
                $correct_count += 1;
            }elseif($get_question1["nous"] === $answer){
                $correct_count += 1;
            }elseif($get_question1["vous"] === $answer){
                $correct_count += 1;
            }elseif($get_question1["ils/elles"] === $answer){
                $correct_count += 1;
            }
            
            $get_question2 = Question::where('id',$question_ids[1])->first();
            if($get_question2["je"] === $answer){
                $correct_count += 1;
            }elseif($get_question2["tu"] === $answer){
                $correct_count += 1;
            }elseif($get_question2["il/elle"] === $answer){
                $correct_count += 1;
            }elseif($get_question2["nous"] === $answer){
                $correct_count += 1;
            }elseif($get_question2["vous"] === $answer){
                $correct_count += 1;
            }elseif($get_question2["ils/elles"] === $answer){
                $correct_count += 1;
            }
            
            $get_question3 = Question::where('id',$question_ids[2])->first();
            if($get_question3["je"] === $answer){
                $correct_count += 1;
            }elseif($get_question3["tu"] === $answer){
                $correct_count += 1;
            }elseif($get_question3["il/elle"] === $answer){
                $correct_count += 1;
            }elseif($get_question3["nous"] === $answer){
                $correct_count += 1;
            }elseif($get_question3["vous"] === $answer){
                $correct_count += 1;
            }elseif($get_question3["ils/elles"] === $answer){
                $correct_count += 1;
            }
        }
        
        $score->user_id = Auth::id();
        
        $score->score = $correct_count;
       
        $score->save();
        
        return view ('result')->with(['result' => $correct_count]);
    }
}
