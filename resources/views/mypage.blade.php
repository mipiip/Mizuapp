<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Conjugaison du verbe</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        
    <h1>マイページ</h1>
    
    <p>ユーザー名：{{ $username }}</p>
    
    <p>総合得点： {{ $totalScore }}</p>
    
    <div>
    <h2>ランキング</h2>
    
    @foreach($rankingData as $rank)
        <p>
            あなたの順位: {{ $rank->rank }} / {{ count($rankingData) }}
        </p>
    @endforeach
    </div>

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