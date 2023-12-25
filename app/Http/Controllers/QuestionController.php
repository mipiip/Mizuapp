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
       
       $token = uniqid();
       
       return view ('question')->with(['questions' => $randomQuestions, 'token'=> $token]);
       
    }
    
    public function store(Request $request, Score $score) {
        // questionsテーブルのidが何番の問題を解いたのかというデータ。
        $question_ids =  $request->question_id; // [1, 2, 3]
        // ユーザーが回答した内容のデータ
        $user_answers = $request->user_answer; // ['ans1', 'ans2', 'ans3']
        // 正解数の初期値
        $correct_count = 0;
        
        $score = new Score();
        
        $type = ["je","tu", "il/elle", "nous", "vous", "ils/elles"];
        
        $questions = [];
        
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
            
        $questions []= [
            'question' => $get_question->question,
            'type'=> $type[$type_index],
            'answer' => $get_question->{$type[$type_index]},
            ];
        }
        
        $score->user_id = Auth::id();
        
        $score->score = $correct_count;
       
        $score->save();
        
        return view ('result')->with(['result' => $correct_count, 'questions' => $questions, 'user_answers'=> $user_answers]);
    }
    
    public function getRankingData()
    {
    // スコアの合計が高い順にランキングを取得
    $rankings = User::with('scores')
        ->withCount('scores as total_score')
        ->orderByDesc('total_score')
        ->get();

    return $rankings;
    }

    public function mypage()
    {
        $user = Auth::user();

        $username = $user->name;
        $rankingData = $this->getRankingData();
        $totalScore = Score::where('user_id', $user->id)->sum('score');
        // ログインしているユーザーの順位を取得
        $userRank = $rankingData->search(function ($rankData) use ($user) {
            
            return $rankData->id === $user->id;
        }) + 1; 
        
        
        return view('mypage')->with(['username' => $username, 'totalScore' => $totalScore, 'rankingData' => $rankingData, 'userRank' => $userRank]);
    }
    
    public function image(Request $request, User $user)
    {
        $request->validate([
            'profile_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = Auth::user();

        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('profile_images'), $imageName);

            $user->profile_image = $imageName;
            $user->save();
        }

        return redirect()->route('profile.edit')->with('success', 'プロフィール画像がアップロードされました。');
    }
    
}
