<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Conjugaison du verbe</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/result.css') }}">
    </head>
    <body>
    
    <h1>結果</h1>
    
    <h2>正解数：{{ $result }}</h2>
    
    <h3>解答</h3>

    <table border="1">
        <thead>
        <tr>
            <th>問題</th>
            <th>人称</th>
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
    
    <div style= "margin-top: 20px;">
        <a href="/mypage">マイページへ</a
    </div>
    
    </body>
</html>