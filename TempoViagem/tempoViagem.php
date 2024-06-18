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

        $V = $_POST['vm'];
        $D = $_POST['d'];
        $C =  $_POST['c'];
        $Th = $D/$V;
        $Tc = $D/$C;
        echo "<h5>Total horas: </h5>". number_format($Th, 2, ".", ""). "<br>";
        echo "<h5>Total combustivel: </h5>". number_format($Tc, 2, ".", "")."<br>";
    ?>
</body>
</html>