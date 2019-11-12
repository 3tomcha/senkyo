<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/app.css" type="text/css" />
    </head>
    <body>
        <a href="/create">選挙を作成してみる</a>
        <h1>選挙一覧</h1>
        <div class="container mx-auto">
            @foreach($elections as $election)
            <div>
                <a href="/election?id={{$election->id }}">
                <h2>{{ $election->title }}</h2>
                </a>
                </div>
            @endforeach
        </div>
    </body>
</html>