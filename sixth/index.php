<!doctype html>
<?php
require_once __DIR__ . '/GuestBook.php';

$guestBook = new GuestBook(__DIR__ . '/guest2.txt');
if($_POST['note']) {
    $guestBook->append($_POST['note']);
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
<?php
foreach ($guestBook->getDataFromFile() as $item){?>
    <div class="note"><?=$item?></div>
<?php
}
?>
<form action="" method="post">
    <input type="text" name="note">
    <button type="submit">Submit</button>
</form>
</body>
</html>
