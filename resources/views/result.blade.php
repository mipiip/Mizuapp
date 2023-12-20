<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Conjugaison du verbe</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/result.css') }}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic&display=swap" rel="stylesheet">
    </head>
    <body>
    
    <h1>結果</h1>
    
    <h2>正解数：{{ $result }}</h2>
    
    <h3>解答</h3>

    <table border="1">
        <thead>
        <tr>
            <th>問題</th>
            <th>主格代名詞</th>
            <th>あなたの回答</th>
            <th>正解</th>
        </tr>
        </thead>
        
        <tbody>
            @foreach ($questions as $index => $q)
                <tr>
                    <td>{{ $q['question'] }}</td>
                    <td>{{ $q['type'] }}</td>
                    <td>{{ $user_answers[$index] }}</td>
                    <td>{{ $q['answer'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
        
    <a href="/mypage">マイページへ</a>
    
    </body>
</html>