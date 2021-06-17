<?php

function add($str){
    $file =  fopen(__DIR__.'/guestBook.txt','a');
    fwrite($file, $str."\n");
    fclose($file);
}
add($_POST['inp']);
header('location: /php_homeworks/guestBook/guestBook.php');