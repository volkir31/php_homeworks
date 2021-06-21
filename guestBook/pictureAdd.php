<?php
var_dump($_FILES);
$count = count($_FILES['img']['name']);
$name = $_FILES['img']['name'];

for ($i = 0; $i < $count; $i++) {
    $type = explode('/', $_FILES['img']['type'][$i])[1];
    if (isset($_FILES['img']) && 0 === (int)$_FILES['img']['error'][$i] && ('jpeg' === $type || 'png' === $type)) {
        move_uploaded_file($_FILES['img']['tmp_name'][$i], __DIR__ . "/images/$name[$i]");
    } elseif (('jpeg' !== $type || 'png' !== $type)) {
        echo 'You can only send PNG and JPEG';
        die;
    }
}
header('location: /guestBook/photoGalery.php');

