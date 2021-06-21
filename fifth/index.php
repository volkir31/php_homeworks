<!doctype html>
<?php
session_start();
if (NULL === $_COOKIE['name']) {
    header('location: /php_homeworks/fifth/login.php');
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
<form action="logout.php" method="post">
    <button type="submit">Logout</button>
</form>
<?php
session_start();
echo 'welcome stranger <br>';
var_dump($_COOKIE['name']);

$fileNames = scandir(__DIR__ . '/images');
unset($fileNames[0]);
unset($fileNames[1]);
?>
<form action="pictureAdd.php" method="post" enctype="multipart/form-data">
    <input type="file" name="img[]" multiple>
    <button type="submit">Submit</button>
</form>
<?php
foreach ($fileNames as $fileName) {
    echo "<img src='images/$fileName'>";
}
?>
</body>
</html>
