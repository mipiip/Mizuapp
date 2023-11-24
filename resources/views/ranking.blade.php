<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Conjugaison du verbe</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        
    <h1>ランキング</h1>
    
    <table>
        <thead>
            <tr>
                <tr>ユーザーID</tr>
                <tr>ユーザー名</tr>
                <tr>総合得点</tr>
            </tr>
        </thead>
        @foreach($rankings as $ranking)
            <tr>
                <td>{{ $ranking->id }}</td>
                <td>{{ $ranking->name }}</td>
                <td>{{ $ranking->total_score }}</td>
            </tr>
        @endforeach
    </table>
    </body>
</html>