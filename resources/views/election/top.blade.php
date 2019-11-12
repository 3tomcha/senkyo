<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/app.css" type="text/css" />
    </head>
    <body>
                    <h1>{{$election->title }}</h1><br>
        <div class="container row mx-auto">
            @foreach($profiles as $profile)
                <div class="col-md-4 text-center">
                    <img src="test1.jpg" class="img-fluid">
                    <?php $prof = $profile->toArray(); ?>
                    <?php unset($prof['id'], $prof['created_at'], $prof['updated_at']); ?>
                    @foreach($prof as $value)
                        @foreach(explode("/", $value) as $val)
                            {{ $val }}
                        @endforeach
                    @endforeach
                </div>
            @endforeach
        </div>
    </body>
</html>