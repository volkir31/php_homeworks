<?php
//$pass = password_hash('111', PASSWORD_ARGON2ID);
//var_dump(password_verify('111', $pass));
function getUserList(array $file):array{
    $users = [];
    foreach ($file as $index => $line) {
        $user = explode(' ', $line);
        $users[] = [trim($user[0]),trim($user[1])];
    }
    return $users;
}
function existsUser(string $login){
    $file = file(__DIR__.'/Users.txt');
    $users = getUserList($file);
    foreach ($users as $index => $user) {
        if((string)$user[0] == (string)$login) return true;
    }
    return false;
}

var_dump(existsUser(''));

