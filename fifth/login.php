<!doctype html>
<?php
session_start();
if (NULL!==$_COOKIE['name']){
    header('location: /php_homeworks/fifth/index.php');
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="Users.php" method="post">
        <input type="text" name="login" placeholder="login">
        <input type="password" name="password" placeholder="password">
        <button type="submit">Sign in</button>
    </form>
    <?php var_dump($_COOKIE['name'])?>
</body>
</html>
