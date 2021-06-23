<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>

<?php
echo '<pre>';
foreach ($data as $item) { ?>
    <div class="article">
        <p><?= $item['author'] ?></p>
        <h1><?= $item['title'] ?></h1>
        <h2><?= $item['text'] ?></h2>
    </div>
    <?php
}
?>

<form action="" method="post">
    <label for="author">Author</label>
    <input type="text" name="author">
    <label for="title">Title</label>
    <input type="text" name="title">
    <label for="text">Text</label>
    <textarea name="text"></textarea>
    <button type="submit">Submit</button>
</form>
</body>
</html>