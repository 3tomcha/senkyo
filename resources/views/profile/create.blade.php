<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/app.css" type="text/css" />
    </head>
    <body>
        <div class="container row mx-auto">
            <form action="/profile" method="POST" name="profile">
            @csrf
            <input type="hidden" name="column1"/>
            <input type="text" id="column1_key"/>
            <input type="text" id="column1_val"/>
            <input type="hidden" name="election_id" value="{{$election_id}}"/>
            <input type="submit" id="submit" value="作成"/>
            </form>
        </div>
            
        <script type="text/javascript">
            var submit = document.getElementById("submit");
            var column1 = document.getElementsByName('column1')[0];
            var column1_val = document.getElementById("column1_val");
            var column1_key = document.getElementById('column1_key');
            
            column1_val.onchange = function(){
                column1.value = column1_key.value + "/" +column1_val.value;
            };
            column1_key.onchange = function(){
                column1.value = column1_key.value + "/" +column1_val.value;
            };
        </script>
    </body>
</html>