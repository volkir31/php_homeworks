<?php
function getUserList(array $file):array{
    $users = [];
    foreach ($file as $index => $line) {
        $user = explode(' ', $line);
        $users[] = [trim($user[0]),trim($user[1])];
    }
    return $users;
}

function existsUser(string $login):array{
    $file = file(__DIR__.'/Users.txt');
    $users = getUserList($file);
    foreach ($users as $index => $user) {
        if((string)$user[0] == (string)$login) return [true,$user];
    }
    return [false,[]];
}

function checkPassword(string $login, string $password):bool{
    $userData = existsUser($login);
    if(true === $userData[0]){
        if (md5($password) === $userData[1][1]){
            $_SESSION['name'] = $userData[1][0];
            setcookie('name', $userData[1][0]);
            return true;
        }
    }
    return false;
}

function getCurrentUser():string{
       return $_SESSION['name'];
}

$user = $_POST;
if($user) {
    if(checkPassword($user['login'], $user['password'])){
        header('location: /php_homeworks/fifth/index.php');
    }
    else{
        echo 'Error! wrong password';
    }

}

