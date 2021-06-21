<?php
require_once __DIR__ . '/View.php';
require_once __DIR__ . '/News.php';
require_once __DIR__ . '/Article.php';

$view = new View();
$news = new News();

if($_POST['article']){
    $article = new Article($_POST['article']);
    $news->addArticle($article);
}
foreach ($news->getArticles() as $index => $item) {
    $view->assign($index, $item);
}

$view->display('/templates/news.php');