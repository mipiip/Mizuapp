<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ $token }}">
        <title>Conjugaison du verbe</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <div>
            <h1>指示に従って適切に活用した動詞を入力してください。</h1>
            
            <form action="/questions/store" method="post">
                @csrf
                 @foreach($questions as $question)
                 <p>{{ $question->question }}</p>
                 <input type="hidden" name="question_id[]" value="{{ $question->id }}" />
                 <label>Je(J`)</label>
                 <input class="answer_input" type="text" name="user_answer[]" required/><br/>
                 <label>Tu</label>
                 <input class="answer_input" type="text" name="user_answer[]" required/><br/>
                 <label>Il/Elle</label>
                 <input class="answer_input" type="text" name="user_answer[]" required/><br/>
                 <label>Nous</label>
                 <input class="answer_input" type="text" name="user_answer[]" required/><br/>
                 <label>Vous</label>
                 <input class="answer_input" type="text" name="user_answer[]" required/><br/> 
                 <label>Ils/Elles</label>
                 <input class="answer_input" type="text" name="user_answer[]" required/> 
                 <!--<label>Tu(T`) </label>-->
                 <!--<input type="text" name="user_answer[]"/> -->
                 @endforeach
                 
            <p>アクサン・特殊文字{â î ê ô é è à ù ç œ}</p>
            
            <p>*未回答の問題がある場合は未入力パスボタンを押してから回答終了してください*</p>
            
            <button id="passBtn" type="button">未入力パス</button>
            <button type="submit">回答終了</button>
            </form>
        </div>
        <script>
            const passBtn = document.getElementById('passBtn');
            const inputEl = document.querySelectorAll('.answer_input');
            console.log(inputEl.length);
            passBtn.addEventListener("click", () => {
                for (i=0; i<inputEl.length; i++) {
                    if(inputEl[i].value == "") {
                        inputEl[i].value = "pass";
                    }
                }
            });
            
            window.addEventListener('pageshow', function (event) {
    if (event.persisted) {
        // ブラウザの戻るボタンが押されたときにページを再読み込み
        window.location.reload();
    }
});
            // document.addEventListener('DOMContentLoaded', function () {
            // var token = '{{ $token }}';
            // if (window.history && window.history.pushState) {
            //     window.history.pushState(null, null, window.location.href);
            //     window.addEventListener('popstate', function () {
            //         window.history.pushState(null, null, window.location.href);
            //         // トークンの一致チェック
            //         if (token !== '{{ $token }}') {
            //             // トークンが一致しない場合、アクションを実行（例: アラート表示）
            //             alert('Invalid back action');
            //         }
            //     });
            // }
            // });
        </script>
    </body>
</html>