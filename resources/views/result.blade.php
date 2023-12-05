<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Conjugaison du verbe</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
    
    <h1>結果</h1>
    
    <h2>正解数：{{ $result }}</h2>
    
    <h3>解答</h3>
    @foreach ($questions as $index => $q)
     <p> {{ $q['question'] }}</p>
     <p>あなたの回答：{{ $user_answers[$index] }}</p>
     <p>正解：{{ $q['answer'] }}</p>
     
    @endforeach
    
    <a href="/mypage">マイページへ</a>
    
    </body>
</html>