<?php

if (NULL !== $_COOKIE['name']) {
    setcookie('name',NULL);
}
header('location: /php_homeworks/fifth/login.php');