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
        $n = $_GET['n'];
        $i = $_GET['i'];
        $pe = $_GET['pe'];
        $m = $_GET['m'];

        if($p == null){ echo "Prontuário não pode estar em branco<br>"; $x=1;}
        if($n == null){ echo "Nome não pode estar em branco<br>";$x=1;}
        if($i<=15 && $i>=75){ echo "Idade deve ser um valor entre 15 e 75 anos<br>";$x=1;}
        if($pe != "V" && $pe != "Vespertino" && $pe != "N" && $pe != "Noturno"){ echo "Período deve ser V-Vespertino ou N-Noturno<br>"; $x=1;}
        if($m <= 1 && $m >= 4){ echo "Módulo pode ser um valor entre 1 e 4.<br>"; $x=1;}
        if($x==0){echo "Esta tudo correto";}
    ?>
</body>
</html>