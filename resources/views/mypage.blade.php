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
        <img src="images/wave.svg" alt="" class="section-header top-wave">
        <div class="contents">
        <h1>マイページ</h1>
        
        <p>ユーザー名：{{ $username }}</p>
        @if(Auth::user()->profile_image_url)
                    <img class ="pro-img" src="{{ Auth::user()->profile_image_url }}" alt="プロフィール画像">
        @else
            <img src="{{ asset('profile_images/default.jpg') }}" alt="noimage">
        @endif
        <p>総合得点： {{ $totalScore }}</p>
        
        <div>
            あなたの順位: {{ $userRank }} / {{ count($rankingData) }}
        </div>
        
        <div>
            <p>ランキング</p>
            @foreach($rankingData->take(5) as $index => $rank)
                <p>{{ $index + 1 }}位: {{ $rank->name }}</p>
                <img class="pro-img" src="{{ $rank->profile_image_url }}" alt="{{ $rank->name }}のプロフィール画像">
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
        </div>
        <img src="images/lowwave.svg" alt="" class=section-header>
    </body>
</html>