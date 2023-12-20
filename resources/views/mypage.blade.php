<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>PetitVerbe</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic&display=swap" rel="stylesheet">
    </head>
    <body>
        
    <h1>マイページ</h1>
    
    <p>ユーザー名：{{ $username }}</p>
    
    <p>総合得点： {{ $totalScore }}</p>
    
    <div>
        あなたの順位: {{ $userRank }} / {{ count($rankingData) }}
    </div>
    
    <div>
        @foreach($rankingData as $rank)
        <p>{{ $rank->name }}</p>
        @endforeach
    </div>
    
    <a href="/questions">問題を解く</a>

    <script>
        window.onload = function() {
        history.pushState(null, null, null);

        window.addEventListener("popstate", function (e) {
        history.pushState(null, null, null);
        return;
        });
    };
    </script>
    
    </body>
</html>