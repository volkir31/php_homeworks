<?php

$count = count($_FILES['img']['name']);
$name = $_FILES['img']['name'];

$file = fopen(__DIR__.'/log.txt','a');
$date = new DateTime();
$date = $date->format('d.M.Y h:i');
$username = $_COOKIE['name'];

for ($i = 0; $i < $count; $i++) {
    $type = trim(explode('/', $_FILES['img']['type'][$i])[1]);
    if (isset($_FILES['img']) && 0 === (int)$_FILES['img']['error'][$i] && ('jpeg' === $type || 'png' === $type)) {
        move_uploaded_file($_FILES['img']['tmp_name'][$i], __DIR__ . "/images/$name[$i]");
        fwrite($file, "$date $username  $name[$i]  \n");
    }
    if ('jpeg' !== $type && 'png' !== $type) {
        echo 'You can only send PNG and JPEG'. $type;
        die;
    }
}
fclose($file);
header('location: /php_homeworks/fifth/index.php');
