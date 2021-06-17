<?php
var_dump($_FILES);
$count = count($_FILES['img']['name']);
$name = $_FILES['img']['name'];


for ($i =0; $i<$count; $i++){
    if(isset($_FILES['img']) && 0 === (int)$_FILES['img']['error'][$i] &&
        ('jpeg'===explode('/',$_FILES['img']['type'][$i])[1] || 'png'===explode('/',$_FILES['img']['type'][$i])[1])){
        move_uploaded_file($_FILES['img']['tmp_name'][$i],__DIR__."/images/$name[$i]");
        header('location: /guestBook/photoGalery.php');
    }
    elseif(('jpeg'!==explode('/',$_FILES['img']['type'][$i])[1] || 'png'!==explode('/',$_FILES['img']['type'][$i])[1])){
        echo 'You can only send PNG and JPEG';
        die;
    }
}

