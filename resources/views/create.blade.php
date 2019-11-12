<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/app.css" type="text/css" />
    </head>
    <body>
        <h1>選挙作成ページ</h1>
        <div class="container mx-auto">
            <form action="/" method="POST">
                @csrf
                選挙タイトル<input type="text" name="title"/>
                <input type="submit" value="Submit"/>
            </form>
        </div>
    </body>
</html>