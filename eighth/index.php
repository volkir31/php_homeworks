<?php
require_once __DIR__ . '/View.php';
require_once __DIR__ . '/DB.php';
echo '<link rel="stylesheet" href="templates/style.css">';

$view = new View();
$db = new DB(require __DIR__ . '/config.php');

if ($_POST['author'] && $_POST['title'] && $_POST['text']) {
//    $post = ['author' => $_POST['author'], 'title' => $_POST['title'], 'text' => $_POST['text']];
    $post = [$_POST['title'], $_POST['text'], $_POST['author']];
    $db->query("INSERT INTO users.news (title, text, author) VALUES (?, ?, ?)", $post);
    $_POST = [];
}

$data = $db->query("SELECT * FROM users.news ORDER BY id DESC", []);

foreach ($data as $index => $datum) {
    $view->assign($index, $datum);
}

$view->display('/templates/index.php');