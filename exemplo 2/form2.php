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
        $username = $_POST['username'];
        $senha = $_POST['senha'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $erro=0;
        If (strlen($username)<5) { echo "O username deve possuir no mínimo 5 caracteres.<br>"; $erro=1;}
        If (strlen($senha)<5) { echo "A senha deve possuir no mínimo 5 caracteres.<br>"; $erro=1;}
        If(empty($cidade)) { echo "Favor digitar sua cidade<br>"; $erro=1;}
        If(strlen($estado)!=2) { echo "Favor digitar seu estado corretamente<br>"; $erro=1;}
        If($erro==0) {echo "Todos os dados foram digitados corretamente!<br>";}
    ?>
</body>
</html>
