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
        $num = $_GET['num'];

        for($i=1; $i<=$num; $i++){
           echo "<img src='../../../$nome/$i.jpg' alt='' width='150px' height='100px'>";
        }
    ?>
    
</body>
</html>