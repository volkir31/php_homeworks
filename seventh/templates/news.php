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
<ul>
    <?php
    foreach ($data as $index => $item) { ?>
        <li><a href="/php_homeworks/seventh/indexArticle.php?id=<?=$index?>"><?= $item ?></a></li>
        <?php
    }
    ?>
</ul>
<form action="" method="post">
    <input type="text" name="article">
    <button type="submit">Submit</button>
</form>
</body>
</html>
