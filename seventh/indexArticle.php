<?php
require_once __DIR__ . '/View.php';
require_once __DIR__ . '/News.php';

$view = new View();
$news = new News();


if(is_numeric($_GET['id'])){
    $view->assign(0,$news->getArticles()[$_GET['id']]);
}


$view->display('/templates/article.php');