<!doctype html>
<?php
$arr = $_GET;
if ($arr['sign']=='-') $arr['result'] = $arr["firstValue"] - $arr["secondValue"];
if ($arr['sign']=='+') $arr['result'] = $arr["firstValue"] + $arr["secondValue"];
if ($arr['sign']=='*') $arr['result'] = $arr["firstValue"] * $arr["secondValue"];
if ($arr['sign']=='/') $arr['result'] = $arr["firstValue"] / $arr["secondValue"];
if ($arr['sign']=='%') $arr['result'] = $arr["firstValue"] % $arr["secondValue"];
if ($arr['sign']=='^') $arr['result'] = pow($arr["firstValue"], $arr["secondValue"]);

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <input name="firstValue" type="text" value="<?php echo $arr["firstValue"] ?>">
        <select name="sign" id="">
            <option value="-">-</option>
            <option value="+">+</option>
            <option value="*">*</option>
            <option value="/">/</option>
            <option value="%">%</option>
            <option value="^">^</option>
        </select>
        <input name="secondValue" type="text" value="<?php echo $arr["secondValue"] ?>">
        <button type="submit">=</button>
        <?php
        echo $arr['result'];
        ?>
    </form>

</body>
</html>

