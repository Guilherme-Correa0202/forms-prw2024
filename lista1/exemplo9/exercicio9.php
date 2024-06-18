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
        $hora = $_GET['hora'];

        if($hora<"12:00"){echo "BOM DIA, $nome";}
        if($hora<"18:00"){echo "BOA TARDE, $nome";}
        if($hora>"18:00"){echo "BOA NOITE, $nome";}
    ?>
</body>
</html>