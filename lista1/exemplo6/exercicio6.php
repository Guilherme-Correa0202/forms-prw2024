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
        $nome = $_GET['nome'];
        $nota1 = $_GET['nota1'];
        $nota2 = $_GET['nota2'];
        $frequencia = $_GET['frequencia'];
        $media =  number_format(($nota1+$nota2)/2, 2, ".","");

        echo "<h3>A media do aluno $nome é: $media</h3>";
        if($frequencia<75 && $media<5){echo ("REPROVADO POR NOTA E POR FREQUENCIA");}
        if($frequencia<75 && $media>=5){echo ("REPROVADO POR FREQUENCIA");}
        if($frequencia>75 && $media<5){echo ("REPROVADO POR NOTA");}
        if($frequencia>75 && $media>=5){echo ("ALUNO APROVADO");}
    ?>
</body>
</html>