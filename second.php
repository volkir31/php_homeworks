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
<style>
    td{
        font-size: 14px;
        text-align: center;
        border: 1px solid #000;
        padding: 5px;
    }
    .tables{
        margin: 200px auto;
        max-width: 1000px;
        width: 100%;
        flex-wrap: wrap;
        display: flex;
        justify-content: space-around;
    }
</style>
<div class="tables">
    <table>
        <caption>&&</caption>
        <tr>
            <td>A</td>
            <td>B</td>
            <td>A && B</td>
        </tr>
        <tr>
            <td>0</td>
            <td>0</td>
            <td><?php echo (int)(0 && 0)?></td>
        </tr>
        <tr>
            <td>0</td>
            <td>1</td>
            <td><?php echo (int)(0 && 1)?></td>
        </tr>
        <tr>
            <td>1</td>
            <td>0</td>
            <td><?php echo (int)(1 && 0)?></td>
        </tr>
        <tr>
            <td>1</td>
            <td>1</td>
            <td><?php echo (int)(1 && 1)?></td>
        </tr>
    </table>
    <table>
        <caption>||</caption>
        <tr>
            <td>A</td>
            <td>B</td>
            <td>A || B</td>
        </tr>
        <tr>
            <td>0</td>
            <td>0</td>
            <td><?php echo (int)(0 || 0)?></td>
        </tr>
        <tr>
            <td>0</td>
            <td>1</td>
            <td><?php echo (int)(0 || 1)?></td>
        </tr>
        <tr>
            <td>1</td>
            <td>0</td>
            <td><?php echo (int)(1 || 0)?></td>
        </tr>
        <tr>
            <td>1</td>
            <td>1</td>
            <td><?php echo (int)(1 || 1)?></td>
        </tr>
    </table>
    <table>
        <caption>XOR</caption>
        <tr>
            <td>A</td>
            <td>B</td>
            <td>A xor B</td>
        </tr>
        <tr>
            <td>0</td>
            <td>0</td>
            <td><?php echo (int)(0 xor 0)?></td>
        </tr>
        <tr>
            <td>0</td>
            <td>1</td>
            <td><?php echo (int)(0 xor 1)?></td>
        </tr>
        <tr>
            <td>1</td>
            <td>0</td>
            <td><?php echo (int)(1 xor 0)?></td>
        </tr>
        <tr>
            <td>1</td>
            <td>1</td>
            <td><?php echo (int)(1 xor 1)?></td>
        </tr>
    </table>
</div>
<div class="equation">
    <?php
        function discriminant($a, $b, $c){
            return pow($b,2) - 4*$a*$c;
        }
        echo discriminant(1,2,1);
        echo '<hr>';

        function test($str){
            preg_match_all("/[-,+]\s*\d*/",$str,$arr, PREG_OFFSET_CAPTURE);
            $coefficient =[];
            foreach ($arr as $index => $item) {
                foreach ($item as $sub_index => $sub_item) {
                    $coefficient[]=(int)$sub_item[0];
                }
            }
            $discriminant = discriminant($coefficient[0], $coefficient[1], $coefficient[2]);
            if ($discriminant ==0) echo -$coefficient[1]/(2*$coefficient[0]);
            elseif ($discriminant > 0){
                echo (-$coefficient[1] - pow($discriminant,1/2))/(2*$coefficient[0]);
                echo '<br>';
                echo (-$coefficient[1] + pow($discriminant,1/2))/(2*$coefficient[0]);
            }
        }
        test('+1x^2 +4x -5=0');

    $arr = include __DIR__ . '/includible.php';
        echo '<hr>';
        echo discriminant($arr[0], $arr[1],$arr[2])
    ?>


</div>
</body>
</html>


