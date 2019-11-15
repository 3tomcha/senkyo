<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/app.css" type="text/css" />
    </head>
    <body>
                    <h1>{{$election->title }}</h1><br>
                    <a href="/profile/create?id={{$id}}"><h2>選挙のメンバーを登録する（管理者のみ表示予定）</h2></a><br>
                    
        @isset($profiles)
        @foreach($profiles as $profile)
        <div class="container row mx-auto">
                <div class="col-md-4 text-center">
                    <img src="test1.jpg" class="img-fluid">
                    <?php $prof = $profile->toArray(); ?>
                    <?php unset($prof['id'], $prof['created_at'], $prof['updated_at'], $prof['election_id']); ?>
                    @foreach($prof as $value)
                        @foreach(explode("/", $value) as $val)
                            {{ $val }}
                        @endforeach
                    @endforeach
                    <h3>編集する（管理者のみ表示予定）</h3>
                    <h3>削除する（管理者のみ表示予定）</h3>
                </div>
        </div>
        @endforeach
        @endisset
    </body>
</html>