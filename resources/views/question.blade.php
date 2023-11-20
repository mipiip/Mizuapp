<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Conjugaison du verbe</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
            <h1>指示に従って適切に活用した動詞を入力してください。</h1>
            
            <form action="/questions/store" method="post">
                @csrf
                 @foreach($questions as $question)
                 <p>{{ $question->question }}</p>
                 <input type="hidden" name="question_id[]" value="{{ $question->id }}" />
                 <label>Je(J`)</label>
                 <input type="text" name="user_answer[]"/><br/>
                 <label>Tu</label>
                 <input type="text" name="user_answer[]"/><br/>
                 <label>Il/Elle</label>
                 <input type="text" name="user_answer[]"/><br/>
                 <label>Nous</label>
                 <input type="text" name="user_answer[]"/><br/>
                 <label>Vous</label>
                 <input type="text" name="user_answer[]"/><br/> 
                 <label>Ils/Elles</label>
                 <input type="text" name="user_answer[]"/> 
                 <!--<label>Tu(T`) </label>-->
                 <!--<input type="text" name="user_answer[]"/> -->
                 @endforeach
         
            <button type="submit">回答終了</button>
            </form>
        </div>
    </body>
</html>