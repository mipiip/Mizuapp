<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Score;
use App\Models\User;
use App\Models\Mypage;

class QuestionController extends Controller
{
    public function index(Question $question) {
       //questionsテーブルからランダムに3問問題を持ってくる
       $randomQuestions = Question::inRandomOrder()->limit(3)->get();
       return view ('question')->with(['questions' => $randomQuestions]);
    }
    
    public function store(Request $request, Score $score) {
        // questionsテーブルのidが何番の問題を解いたのかというデータ。
        $question_ids =  $request->question_id; // [1, 2, 3]
        //dd($question_ids);
        // ユーザーが回答した内容のデータ
        $user_answers = $request->user_answer; // ['ans1', 'ans2', 'ans3']
        //dd($jeAnswer = $request->input('je.user_answer'));
        // 正解数の初期値
        $correct_count = 0;
        
        $score = new Score();
        
        $type = ["je","tu", "il/elle", "nous", "vous", "ils/elles"];
        // ユーザーの回答分、ループさせて、正誤判定を行う。
        // $iはループの番号。0 1 2 3...
        foreach($user_answers as $i => $answer) {
            $type_index = $i%6;
            // $question_idsを参考に、questionsテーブルから解いた問題のデータを取得する。
            // questionsテーブルのidと$question_ids[$i]の番号が一致するものを取得。
            if($i>11){
                $get_question = Question::where('id',$question_ids[2])->first();
            }elseif($i>5){
                $get_question = Question::where('id',$question_ids[1])->first();
            }else{
                $get_question = Question::where('id',$question_ids[0])->first();
            }
            if($get_question[$type[$type_index]] === $answer) {
                $correct_count += 1;
            }
        }
        
        $score->user_id = Auth::id();
        
        $score->score = $correct_count;
       
        $score->save();
        
        return view ('result')->with(['result' => $correct_count]);
    }
    
    public function mypage()
    {
        return view('mypage');
            
        }
}
