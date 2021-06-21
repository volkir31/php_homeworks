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
foreach ($data as $item) {
    ?>
    <div class="note"><?= $item ?></div>
    <?php
}
?>
<form action="" method="post">
    <input type="text" name="note">
    <button type="submit">Submit</button>
</form>
</body>
</html>
