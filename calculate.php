<?php
var_dump($_POST);
header('Location: /php_homeworks/third.php');
return ([$_POST['firstValue'],$_POST['secondValue']]);