<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        img{
            height: 80vh;
        }
        div{
            width: max-content;
            height: max-content;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div>
    <?php
        $arr = ['https://images.unsplash.com/photo-1496196614460-48988a57fccf?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=967&q=80',
            'https://images.unsplash.com/photo-1601882906700-3035ebabe365?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80',
            'https://images.unsplash.com/photo-1618259753830-69a8ab9916e8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80',
            'https://images.unsplash.com/photo-1602167775512-a6adbd35b2e2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=80'];
        $img = $arr[$_GET['id']];
        echo "<img src='$img'>";
    ?>
    </div>
</body>
</html>


