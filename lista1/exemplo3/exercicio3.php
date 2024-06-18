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
        $estado = $_GET['estado'];

        if($estado == "Acre") {echo "<h6>Rio Branco</h6>";}
        if($estado == "Alagoas") {echo "<h6>Maceió</h6>";}
        if($estado == "Amapá") {echo "<h6>mACAPÁ</h6>";}
        if($estado == "Amazonas") {echo "<h6>Manaus</h6>";}
        if($estado == "Bahia") {echo "<h6>Salvador</h6>";}
        if($estado == "Ceará") {echo "<h6>Fortaleza</h6>";}
        if($estado == "Distrito Federal") {echo "<h6>Brasilia</h6>";}
        if($estado == "Espirito Santo") {echo "<h6>Vitoria</h6>";}
        if($estado == "Goiás") {echo "<h6>Giania</h6>";}
        if($estado == "Maranhão") {echo "<h6>São Luís</h6>";}
        if($estado == "Mato Grosso") {echo "<h6>Cuiabá</h6>";}
        if($estado == "Mato Grosso do Sul") {echo "<h6>Campo Grande</h6>";}
        if($estado == "Minas Gerais") {echo "<h6>Belo Horizonte</h6>";}
        if($estado == "Pará") {echo "<h6>Belém</h6>";}
        if($estado == "Paraíba") {echo "<h6>João Pessoa</h6>";}
        if($estado == "Paraná") {echo "<h6>Curitiba</h6>";}
        if($estado == "Pernambuco") {echo "<h6>Recife</h6>";}
        if($estado == "Piauí") {echo "<h6>Recife";}
        if($estado == "Rio de Janeiro") {echo "<h6>Tresina</h6>";}
        if($estado == "Rio Grande do Norte") {echo "<h6>Rio de Janeiro</h6>";}
        if($estado == "Rio Grande do Sul") {echo "<h6>Natal</h6>";}
        if($estado == "Rondônia") {echo "<h6>Porto Velho</h6>";}
        if($estado == "Roraima") {echo "<h6>Boa Vista</h6>";}
        if($estado == "Santa Catarina") {echo "<h6>Florianopolis</h6>";}
        if($estado == "São Paulo") {echo "<h6>São Paulo</h6>";}
        if($estado == "Sergipe") {echo "<h6>Aracaju</h6>";}
        if($estado == "Tocantis") {echo "<h6>Palmas</h6>";}

    ?>
</body>
</html>