<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>PetitVerbe</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <body>
        <h1>PetitVerbe</h1>
        <!-- formタグにenctypeを追加 -->
        <form action="/profile" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="image">
                <input type="file" name="profile_image">
            </div>
            <input type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>