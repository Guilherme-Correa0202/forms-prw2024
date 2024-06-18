<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $p = $_GET['p'];
        $m = $_GET['m'];
        $g = $_GET['g'];
        $valor = 10*$p+12*$m+15*$g;

        echo "<h3>O valor total é: $valor R$</h3>"
    ?>
</body>
</html>