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
        $selecao = $_GET['selecao'];
        $num1 = $_GET['numero1'];
        $num2 = $_GET['numero2'];
       
        if($selecao == 1){ echo "<h2>O resultado é: </h2>". $num1+$num2;}        
        if($selecao == 2){ echo "<h2>O resultado é: </h2>". $num1-$num2;}        
        if($selecao == 3){ echo "<h2>O resultado é: </h2>". $num1/$num2;}        
        if($selecao == 4){ echo "<h2>O resultado é: </h2>". $num1*$num2;}        

    ?>
</body>
</html>
