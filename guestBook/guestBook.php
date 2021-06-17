<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .container{
            width: 1000px;
            margin: 0 auto;
            padding: 0;
            font-size: 16px;
        }
        .even__row{
            background-color: #494949;
            margin: 0;
            padding: 20px;
            color: #fff;
        }
        .odd__row{
            background-color: #696969;
            margin: 0;
            padding: 20px;
            color: #fff;
        }
        form{
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        $file = file(__DIR__.'/guestBook.txt');
        function read($file){
            foreach ($file as $index => $item) {
                if ($index %2 ==0){
                    echo "<div class='even__row'>$item</div>";
                }
                else{
                    echo "<div class='odd__row'>$item</div>";
                }
            }
        }
        read($file);
        ?>
        <form action="/php_homeworks/guestBook/formHendler.php" method="post">
            <input type="text" name="inp">
            <button type="submit">Send</button>
        </form>
    </div>

</body>
</html>

