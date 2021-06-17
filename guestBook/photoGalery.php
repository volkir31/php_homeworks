<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        img{
            height: 500px;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <?php
    $fileNames = scandir( __DIR__.'/images');
    unset($fileNames[0]);
    unset($fileNames[1]);

    foreach ($fileNames as $index => $fileName) {
        echo "<img src='images/$fileName'>";
    }
    ?>
    <form action="pictureAdd.php" method="post" enctype="multipart/form-data">
        <input type="file" name="img[]" multiple>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
