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
        $text = $_GET['text'];
        $textarea = $_GET['textarea'];
        $checkbox = $_GET['checkbox'];
        $radio = $_GET['radio'];
        $menususpenso = $_GET['menususpenso'];
        
        echo "<h6>Text: $text</h6>";
        echo "<h6>TextArea: $textarea</h6>";
        echo "<h6>CheckBox: $checkbox</h6>";
        echo "<h6>Radio: $radio</h6>";
        echo "<h6>Menu suspenso: $menususpenso</h6>";
    ?>
</body>
</html>