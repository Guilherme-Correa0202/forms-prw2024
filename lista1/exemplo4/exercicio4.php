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
        $ano = $_GET['ano'];
        if(($ano%4 == 0 && $ano%100!=0) || $ano/400 == 0){echo "<h6>É um ano bissesto</h6>";}
        else{echo "<h1>Não é um ano bissesto</h1>";}
    ?>
</body>
</html>