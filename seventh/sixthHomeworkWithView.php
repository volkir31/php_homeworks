<?php
include_once __DIR__ . '/../sixth/GuestBook.php';
include_once __DIR__ . '/View.php';

$view = new View();


$guestBook = new GuestBook(__DIR__ . '/../sixth/guest2.txt');

if ($_POST['note']) {
    $guestBook->append($_POST['note']);
}

foreach ($guestBook->getDataFromFile() as $index => $item) {
    $view->assign($index, $item);
}

$view->display('/templates/index.php');