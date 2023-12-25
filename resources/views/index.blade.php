<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>PetitVerbe</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/index.css') }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Praho&display=swap">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic&display=swap" rel="stylesheet">
    </head>
    <body style="background-image: url({{ asset('images/rennes_paysage.jpg') }});">
        <h1>PetitVerbe</h1>
        
        <h2>フランス語の動詞活用練習</h2>
            
        <h3>フランス語の習得には、動詞活用が欠かせません。繰り返し練習してフランス語の動詞活用練習をしましょう。</h3>
        
        
            
        <a href="/questions">START</a>
        <a href="/mypage">マイページ</a>
        <a href="/regster">ユーザー登録</a>
    </body>
</html>